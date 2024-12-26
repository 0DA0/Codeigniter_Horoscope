<style>
    /* Bu sayfaya özel header ve footer stili */
    .custom-header {
        background-color: #e74c3c;
        color: white;
        text-align: center;
        padding: 15px 0;
    }

    .custom-footer {
        background-color: #e74c3c;
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    /* Genel Sayfa Stilleri */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    main {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 300px;
        text-align: center;
    }

    table {
        width: 100%;
        margin-bottom: 15px;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        width: 40%;
        font-weight: bold;
        color: #555;
    }

    td input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #e74c3c;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        width: 100%;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #c0392b;
    }
</style>
    <main>
        <?= validation_list_errors() ?>
        <?php 
        if(isset($uyari))
        {
            echo 'Kullanıcı adı veya şifre hatalı';
        }
        ?>
        <form method="post" action="<?= base_url('login') ?>">
            <?= csrf_field()?>
            <table>
                <tr>
                    <th>Kullanıcı Adı</th>
                    <td><input id="kullanici_adi" type="text" name="kullanici_adi"></td>
                </tr>
                <tr>
                    <th>Şifre</th>
                    <td><input id="sifre" type="password"  name="sifre"></td>
                </tr>
            </table>
            <input type="submit" name="gonder" value="Giriş Yap">
        </form>
    </main>