<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//index
$routes->get('/', 'Anasayfa::index');
$routes->match(['get','post'],'login', 'AnaSayfa::login');
$routes->get('admin', 'Admin::index');
//$routes->get('logout', 'Anasayfa::logout');

//menüler
$routes->get('Anasayfa', 'Menuler::Anamenu');
$routes->get('GünlükBurçYorumu', 'Menuler::GunlukYorum');
$routes->get('BurçHesaplama', 'Menuler::BurcHesaplama');
$routes->get('YükselenHesaplama', 'Menuler::YukselenHesaplama');

//menülerAdmin
$routes->get('AnasayfaAdmin', 'Menuler::AnamenuAdmin');
$routes->get('GünlükBurçYorumuAdmin', 'Menuler::GunlukYorumAdmin');
$routes->get('BurçHesaplamaAdmin', 'Menuler::BurcHesaplamaAdmin');
$routes->get('YükselenHesaplamaAdmin', 'Menuler::YukselenHesaplamaAdmin');
$routes->get('logout', 'Menuler::logout');

//burclar
$routes->get('Koc_Burcu','Burclar::Koc_Burcu');
$routes->get('Aslan_Burcu','Burclar::Aslan_Burcu');
$routes->get('Basak_Burcu','Burclar::Basak_Burcu');
$routes->get('Terazi_Burcu','Burclar::Terazi_Burcu');
$routes->get('Akrep_Burcu','Burclar::Akrep_Burcu');
$routes->get('Boga_Burcu','Burclar::Boga_Burcu');
$routes->get('Yay_Burcu','Burclar::Yay_Burcu');
$routes->get('Oglak_Burcu','Burclar::Oglak_Burcu');
$routes->get('Kova_Burcu','Burclar::Kova_Burcu');
$routes->get('Balık_Burcu','Burclar::Balık_Burcu');
$routes->get('Ikizler_Burcu','Burclar::Ikizler_Burcu');
$routes->get('Yengec_Burcu','Burclar::Yengec_Burcu');

//burclar
$routes->get('Koc_BurcuAdmin','Burclar::Koc_BurcuAdmin');
$routes->get('Aslan_BurcuAdmin','Burclar::Aslan_BurcuAdmin');
$routes->get('Basak_BurcuAdmin','Burclar::Basak_BurcuAdmin');
$routes->get('Terazi_BurcuAdmin','Burclar::Terazi_BurcuAdmin');
$routes->get('Akrep_BurcuAdmin','Burclar::Akrep_BurcuAdmin');
$routes->get('Boga_BurcuAdmin','Burclar::Boga_BurcuAdmin');
$routes->get('Yay_BurcuAdmin','Burclar::Yay_BurcuAdmin');
$routes->get('Oglak_BurcuAdmin','Burclar::Oglak_BurcuAdmin');
$routes->get('Kova_BurcuAdmin','Burclar::Kova_BurcuAdmin');
$routes->get('Balık_BurcuAdmin','Burclar::Balık_BurcuAdmin');
$routes->get('Ikizler_BurcuAdmin','Burclar::Ikizler_BurcuAdmin');
$routes->get('Yengec_BurcuAdmin','Burclar::Yengec_BurcuAdmin');

//veri işlemleri
$routes->get('burc-yorum', 'burc_yorumlari::index');
$routes->match(['get', 'post'], 'GunlukBurcYorumuAdmin', 'burc_yorumlari::veri');
$routes->get('GunlukBurcYorumu', 'burc_yorumlari::index');

//test
$routes->get('mongo/(:num)', 'Home::test/$1');