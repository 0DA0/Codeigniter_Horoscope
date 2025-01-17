<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <style>
        /* Genel sayfa stili */
body {
    font-family: 'Roboto', Arial, sans-serif;
    background: url('background-image.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #343a40;
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Menü Barı */
nav.menu {
    background-color: #e74c3c;
    padding: 10px;
}

nav.menu ul {
    display: flex;
    justify-content: space-between;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav.menu ul li {
    flex: 1;
    text-align: center;
}

nav.menu ul li a {
    color: white;
    text-decoration: none;
    padding: 10px;
    font-weight: bold;
    display: block;
}

nav.menu ul li a:hover {
    background-color: #e74c3c;
}

.admin-giris {
    background-color: #e74c3c;
    color: #fff;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 30px;
    cursor: pointer;
}

.admin-giris:hover {
    background-color: #218838;
}

/* Container ve Kartlar */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 40px;
}

.card {
    width: 250px;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 100%;
    height: 220px; /* Resim boyutunu büyüttük */
    object-fit: cover; /* Resmin tamamını kapsayacak şekilde ayarlandı */
    object-position: top; /* Resmin üst kısmı kesilmeyecek şekilde hizalandı */
}

.card h3 {
    font-size: 1.3rem;
    color: #e74c3c;
    margin: 10px 0;
}

.card a {
    display: inline-block;
    padding: 10px 20px;
    font-weight: bold;
    color: #e74c3c;
    text-decoration: none;
    border-radius: 30px;
    border: 1px solid #ffff;
    margin: 15px 0;
}

.card a:hover {
    background-color: #e74c3c;
    color: white;
}

@media (max-width: 768px) {
    .card {
        width: 90%;
    }
}

/* Ana sayfa içerik */
h1 {
    color: #333;
    text-align: center;
    margin-top: 50px;
}

/* Burç resimleri */
table {
    margin: 30px auto;
    text-align: center;
    width: 80%;
}

table img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease-in-out;
}

table img:hover {
    transform: scale(1.1);
}
    </style>

<h1>Hoşgeldiniz</h1>


<table>
    <tr>
        <td><a href="<?=base_url('Koc_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Koç.jpg')?>"></a></td>
        <td><a href="<?=base_url('Aslan_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Aslan.jpg')?>"></a></td>
        <td><a href="<?=base_url('Başak_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Başak.jpg')?>"></a></td>
        <td><a href="<?=base_url('Terazi_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Terazi.jpg')?>"></a></td>
    </tr>
    <tr>
        <td><a href="<?=base_url('Akrep_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Akrep.jpg')?>"></a></td>
        <td><a href="<?=base_url('Boğa_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Boğa.jpg')?>"></a></td>
        <td><a href="<?=base_url('Yay_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Yay.jpg')?>"></a></td>
        <td><a href="<?=base_url('Oğlak_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Oğlak.jpg')?>"></a></td>
    </tr>
    <tr>
        <td><a href="<?=base_url('Kova_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Kova.jpg')?>"></a></td>
        <td><a href="<?=base_url('Balık_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Balık.jpg')?>"></a></td>
        <td><a href="<?=base_url('İkizler_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Ikizler.jpg')?>"></a></td>
        <td><a href="<?=base_url('Yengeç_BurcuAdmin')?>"><img src="<?= base_url('../Burc_Foto/Yengeç.jpg')?>"></a></td>
    </tr>
</table>

</body>
</html>

