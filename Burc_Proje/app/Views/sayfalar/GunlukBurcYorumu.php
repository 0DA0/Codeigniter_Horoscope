<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Günlük Burç Yorumları</title>
    <link rel="stylesheet" href="css ve js kodları/gunluk-burc.css">
</head>
<body>
    <style>
        /* Genel Stil */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Ana Bölüm */
        main {
            padding: 20px;
        }

        /* Burç Konteyneri */
        .burc-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Burç Kartı */
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
    </style>

    <main>
        <div class="burc-container" action="<?= base_url('GunlukBurcYorumu') ?>" >
            <?php foreach ($burclar as $burc): ?>
                <div class="burc-card">
                    <h2><?= esc($burc) ?></h2>
                    <p><?= esc($yorumlar[$burc]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>
