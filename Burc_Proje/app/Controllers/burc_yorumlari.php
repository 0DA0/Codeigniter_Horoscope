<?php

namespace App\Controllers;

use MongoDB\Client;

class burc_yorumlari extends BaseController
{
    public function index()
    {
    $kul_adi = "admin1";
    $sifre = "admin123123";
    $adres = "cluster0.xvwwt.mongodb.net";
    $veritabani = "Burclar";
    $koleksiyon_adi = "gunluk_yorum"; 

        // MongoDB bağlantısı
        $client = new Client("mongodb+srv://$kul_adi:$sifre@$adres");
        $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);

        // Burçlar listesi
        $burclar = ["Koç", "Boğa", "İkizler", "Yengeç", "Aslan", "Başak", "Terazi", "Akrep", "Yay", "Oğlak", "Kova", "Balık"];

        // MongoDB'den yorumları çek
        $yorumlar = [];
        foreach ($burclar as $burc) {
            // Burç ismine göre veri çekme
            $yorum = $koleksiyon->findOne(['burc_adi' => $burc]);

            // Veri bulunursa, yorum ekle
            if ($yorum) 
            {
                $yorumlar[$burc] = $yorum['yorum'] ?? 'Yorum bulunamadı'; // Yorum varsa al, yoksa 'Yorum bulunamadı'
            } 
            else
            {
                $yorumlar[$burc] = 'Yorum bulunamadı'; // Veri yoksa 'Yorum bulunamadı'
            }
        }

        // Verileri View'e aktarıyoruz
        return view('tema/header').view('sayfalar/GunlukBurcYorumu', ['burclar' => $burclar,'yorumlar' => $yorumlar]).view('tema/footer');
    }
    
    public function veri()
{
    // MongoDB bağlantısı
    $kul_adi = "admin1";
    $sifre = "admin123123";
    $adres = "cluster0.xvwwt.mongodb.net";
    $veritabani = "Burclar";
    $koleksiyon_adi = "gunluk_yorum";  // MongoDB koleksiyon adı

    // MongoDB bağlantısını yapıyoruz
    $client = new Client("mongodb+srv://$kul_adi:$sifre@$adres");
    $koleksiyon = $client->selectCollection($veritabani, $koleksiyon_adi);

    // Formdan gelen veriler
    $burclar = $this->request->getPost('burclar'); // Burçlar ve yorumları
    $islem = $this->request->getPost('islem'); // İşlem türü (güncelle/sil)

    // Eğer işlem yapılmışsa, işlemi gerçekleştirelim
    if (!empty($islem)) {
        // İşlem tipini ve burç adını ayıralım
        list($tip, $burc_adi) = explode('|', $islem);

        if ($tip == 'guncelle' && isset($burclar[$burc_adi])) {
            // Yorum varsa güncelle
            $yorum = $burclar[$burc_adi];
            if (!empty($yorum)) {
                $koleksiyon->updateOne(
                    ['burc_adi' => $burc_adi], // Burç ismine göre güncelleme
                    ['$set' => [
                        'yorum' => $yorum, 
                        'tarih' => date('Y-m-d')  // Güncel tarih
                    ]],
                    ['upsert' => true] // Eğer kayıt yoksa ekle
                );
            }
        } elseif ($tip == 'sil') {
            // Silme işlemi
            $koleksiyon->deleteOne(['burc_adi' => $burc_adi]); // Eşleşen burç adıyla veriyi sil
        }
    }

    // Başarılı mesajı ile yönlendirme
    return redirect()->to('/GunlukBurcYorumu')->with('message', 'İşlem başarıyla gerçekleştirildi!');
}


}