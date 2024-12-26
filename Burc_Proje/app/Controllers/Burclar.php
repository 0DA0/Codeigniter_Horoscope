<?php

namespace App\Controllers;

use MongoDB;// composerla yüklendi
//genel dokümantasyon --> https://www.mongodb.com/docs/php-library/current/get-started/
//veri okuma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/read/
//veri yazma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/write/

//mongo kurulum için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-setup/
//ek bilgi için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-crud/

class Burclar extends BaseController
{
    public function Koc_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Koc_Burcu') . view('tema/footer');
    }
    public function Aslan_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Aslan_Burcu') . view('tema/footer');
    }
    public function Basak_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Basak_Burcu') . view('tema/footer');
    }
    public function Terazi_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Terazi_Burcu') . view('tema/footer');
    }
    public function Akrep_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Akrep_Burcu') . view('tema/footer');
    }
    public function Boga_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Boga_Burcu') . view('tema/footer');
    }
    public function Yay_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Yay_Burcu') . view('tema/footer');
    }
    public function Oglak_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Oglak_Burcu') . view('tema/footer');
    }
    public function Kova_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Kova_Burcu') . view('tema/footer');
    }
    public function Balık_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Balık_Burcu') . view('tema/footer');
    }
    public function Ikizler_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Ikizler_Burcu') . view('tema/footer');
    }
    public function Yengec_Burcu()
    {
        return view('tema/header') . view('sayfalar/Burclar/Yengec_Burcu') . view('tema/footer');
    }

    //Admin Burclar
    public function Koc_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Koc_Burcu') . view('tema/footer');
    }
    public function Aslan_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Aslan_Burcu') . view('tema/footer');
    }
    public function Basak_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Basak_Burcu') . view('tema/footer');
    }
    public function Terazi_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Terazi_Burcu') . view('tema/footer');
    }
    public function Akrep_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Akrep_Burcu') . view('tema/footer');
    }
    public function Boga_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Boga_Burcu') . view('tema/footer');
    }
    public function Yay_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Yay_Burcu') . view('tema/footer');
    }
    public function Oglak_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Oglak_Burcu') . view('tema/footer');
    }
    public function Kova_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Kova_Burcu') . view('tema/footer');
    }
    public function Balık_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Balık_Burcu') . view('tema/footer');
    }
    public function Ikizler_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Ikizler_Burcu') . view('tema/footer');
    }
    public function Yengec_BurcuAdmin()
    {
        return view('tema/Admin_header') . view('sayfalar/Burclar/Yengec_Burcu') . view('tema/footer');
    }
}