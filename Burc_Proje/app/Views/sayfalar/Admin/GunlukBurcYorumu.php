<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günlük Burç Yorumları</title>
    <link rel="stylesheet" href="../css ve js kodları/gunluk-burc.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        main {
            padding: 20px;
        }
        .burc-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .burc-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .burc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .burc-card h2 {
            color: #e74c3c;
            font-size: 20px;
            margin-bottom: 10px;
        }
        .burc-card p {
            font-size: 16px;
            line-height: 1.5;
        }
        .burc-card button {
            margin-top: 10px;
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .burc-card button:hover {
            background-color: #2980b9;
        }
        .burc-card .delete-btn {
            background-color: #e74c3c;
        }
        .burc-card .delete-btn:hover {
            background-color: #c0392b;
        }
        .submit-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .submit-btn:hover {
            background-color: #2980b9;
        }
    </style>

    <main>
        <form method="POST" action="<?= base_url('GunlukBurcYorumuAdmin') ?>">
            <div class="burc-container">
                <?php
                $burclar = ["Koç", "Boğa", "İkizler", "Yengeç", "Aslan", "Başak", "Terazi", "Akrep", "Yay", "Oğlak", "Kova", "Balık"];
                foreach ($burclar as $burc) {
                    // Yorumları çek
                    $yorum = isset($yorumlar[$burc]) ? $yorumlar[$burc] : '';
                    echo "<div class='burc-card'>
                        <h2>$burc</h2>
                        <textarea name='burclar[$burc]' rows='3' placeholder='$burc burcu için yorum yazın...'>$yorum</textarea><br>
                        <button type='submit' name='islem' value='guncelle|$burc'>Güncelle</button>
                        <button type='submit' name='islem' value='sil|$burc' class='delete-btn'>Sil</button>
                    </div>";
                }
                ?>
            </div>
            <button type="submit" class="submit-btn">Kaydet</button>
        </form>
    </main>
</body>
</html>
