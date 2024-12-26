<?php

namespace App\Controllers;

use App\Models\AdminModel;

use MongoDB;// composerla yüklendi
//genel dokümantasyon --> https://www.mongodb.com/docs/php-library/current/get-started/
//veri okuma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/read/
//veri yazma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/write/

//mongo kurulum için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-setup/
//ek bilgi için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-crud/

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        
        if ($session->has('durum') && $session->get('durum')) 
        {

            return view('tema/Admin_header',['kullanici_adi'=>$session->get('kullanici_adi'),'durum'=>$session->get('durum')]).view('sayfalar/Admin/Ana_Sayfa').view('tema/footer');
        }
        else
        {
            return redirect()->to(base_url('login'));
        }
        
    }
    public function login()
    {
        helper('form');
        
        $session = session();
        if ($session->has('durum') && $session->get('durum')) 
        {
            return redirect()->to(base_url('admin'));
        } 
        else 
        {
            if (! $this->request->is('post'))
            {                
                return view('tema/header').view('sayfalar/login').view('tema/footer');
            }

            $rules = [
                'kullanici_adi' => 'required',
                'sifre' => 'required'
            ];

            if (! $this->validate($rules)) {
                return view('tema/header').view('sayfalar/login').view('tema/footer');
            }
        
            // Kullanıcının gönderdiği veriyi al
            $veri = $this->validator->getValidated();
        
            $model = model('AnasayfaModel');
        
            // Kullanıcı adı ile kayıt var mı kontrolü
            $sor = $model->where(['kullanici_adi' => $veri['kullanici_adi']])->find();
          
            //$hash_sifre_dogrulama = false; // Şifre doğrulama kontrolü
            if (count($sor) > 0) 
            {
                $kullanici = $sor[0]; // İlk kullanıcı kaydını al
                $kul_bilgi = [
                    'kullanici_adi' => $veri['kullanici_adi'],
                    'durum' => true
                ];
                $session->set($kul_bilgi);
                return redirect()->to(base_url('admin'));
                $hashli_sifre = $kullanici['sifre']; // Veritabanındaki hashli şifre
        
                // Kullanıcıdan gelen şifreyi hashlenmiş şifreyle karşılaştır
                if (password_verify($veri['sifre'], $hashli_sifre)) 
                {
                    $hash_sifre_dogrulama = true;
                }
            }
        
            // Şifre doğrulandıysa session'ı başlat
            if ($hash_sifre_dogrulama) 
            {
                
            }
             
            else 
            {
                return view('tema/header', ['uyari' => 'Yanlış kullanıcı adı veya şifre']).view('sayfalar/login').view('tema/footer');
            }
        }
    }
}