<?php

namespace App\Controllers;

use MongoDB;// composerla yüklendi
//genel dokümantasyon --> https://www.mongodb.com/docs/php-library/current/get-started/
//veri okuma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/read/
//veri yazma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/write/

//mongo kurulum için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-setup/
//ek bilgi için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-crud/

class Menuler extends BaseController
{
    public function Anamenu()
    {
        return view('tema/header') . view('sayfalar/Ana_Sayfa') . view('tema/footer');
    }
    public function GunlukYorum()
    {
        return view('tema/header') . view('sayfalar/GünlükBurçYorumu') . view('tema/footer');
    }
    public function BurcHesaplama()
    {
        return view('tema/header') . view('sayfalar/BurçHesaplama') . view('tema/footer');
    }
    public function YukselenHesaplama()
    {
        return view('tema/header') . view('sayfalar/YükselenHesaplama') . view('tema/footer');
    }

    //Admin

    public function AnamenuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Admin/Ana_Sayfa') . view('tema/footer');
    }
    public function GunlukYorumAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Admin/GunlukBurcYorumu') . view('tema/footer');
    }
    public function BurcHesaplamaAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Admin/BurçHesaplama') . view('tema/footer');
    }
    public function YukselenHesaplamaAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Admin/YükselenHesaplama') . view('tema/footer');
    }
    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(base_url('login'));
    }
}