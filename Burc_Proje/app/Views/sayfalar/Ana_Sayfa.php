<style>
    /* Container ve Kartlar */
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 40px 20px;
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
    height: 220px;
    object-fit: cover;
    object-position: top;
}

.card h3 {
    font-size: 1.3rem;
    color: #e74c3c;
 }

.card a {
    display: inline-block;
    padding: 10px 20px;
    font-weight: bold;
    color: #e74c3c;
    text-decoration: none;
    border-radius: 30px;
    border: 1px solid #fff;
    transition: background-color 0.3s ease;
}

.card a:hover {
    background-color: #e74c3c;
    color: white;
}
</style>
<div class="container">
    <!-- Koç, Aslan, Başak, Terazi Burçları -->
    <div class="card" onclick="showPopup('Koç Burcu')">
        <img src="./Burc_Foto/Koç.jpg" alt="Koç">
        <h3>Koç Burcu</h3>
        <a href="<?=base_url('Koc_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Aslan Burcu')">
        <img src="./Burc_Foto/Aslan.jpg" alt="Aslan">
        <h3>Aslan Burcu</h3>
        <a href="<?=base_url('Aslan_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Başak Burcu')">
        <img src="./Burc_Foto/Başak.jpg" alt="Başak">
        <h3>Başak Burcu</h3>
        <a href="<?=base_url('Basak_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Terazi Burcu')">
        <img src="./Burc_Foto/Terazi.jpg" alt="Terazi">
        <h3>Terazi Burcu</h3>
        <a href="<?=base_url('Terazi_Burcu')?>">Detaylar</a>
    </div>

    <!-- Akrep, Boğa, Yay, Oğlak Burçları -->
    <div class="card" onclick="showPopup('Akrep Burcu')">
        <img src="./Burc_Foto/Akrep.jpg" alt="Akrep">
        <h3>Akrep Burcu</h3>
        <a href="<?=base_url('Akrep_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Boğa Burcu')">
        <img src="./Burc_Foto/Boğa.jpg" alt="Boğa">
        <h3>Boğa Burcu</h3>
        <a href="<?=base_url('Boga_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Yay Burcu')">
        <img src="./Burc_Foto/Yay.jpg" alt="Yay">
        <h3>Yay Burcu</h3>
        <a href="<?=base_url('Yay_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Oğlak Burcu')">
        <img src="./Burc_Foto/Oğlak.jpg" alt="Oğlak">
        <h3>Oğlak Burcu</h3>
        <a href="<?=base_url('Oglak_Burcu')?>">Detaylar</a>
    </div>

    <!-- Kova, Balık, İkizler, Yengeç Burçları -->
    <div class="card" onclick="showPopup('Kova Burcu')">
        <img src="./Burc_Foto/Kova.jpg" alt="Kova">
        <h3>Kova Burcu</h3>
        <a href="<?=base_url('Kova_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Balık Burcu')">
        <img src="./Burc_Foto/Balık.jpg" alt="Balık">
        <h3>Balık Burcu</h3>
        <a href="<?=base_url('Balık_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('İkizler Burcu')">
        <img src="./Burc_Foto/Ikizler.jpg" alt="İkizler">
        <h3>İkizler Burcu</h3>
        <a href="<?=base_url('Ikizler_Burcu')?>">Detaylar</a>
    </div>
    <div class="card" onclick="showPopup('Yengeç Burcu')">
        <img src="./Burc_Foto/Yengeç.jpg" alt="Yengeç">
        <h3>Yengeç Burcu</h3>
        <a href="<?=base_url('Yengec_Burcu')?>">Detaylar</a>
    </div>
</div>

<!-- Pop-up Message -->
<div id="popupMessage" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <p id="popupText"></p>
    </div>
</div>

<script src="<?=base_url()?>css_ve_java_kodları/script.js"></script>