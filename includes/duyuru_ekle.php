<html>
<head>

    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"/>
    <link href="\yazlab1proje1\css\bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="\yazlab1proje1\css\style.css" />

    <script src="\yazlab1proje1\js\jquery-3.1.1.min.js"></script>
    <script src="\yazlab1proje1\js\bootstrap.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <?php
    include("C:/wamp/www/yazlab1proje1/includes/config.php");
    ?>
</head>

<body>


<div style="margin-left:40px;">
    <h3>Duyuru Ekle</h3>
    <hr/>
<form action="" method="post">
    <table cellspacing="150" cellpadding="5">
        <tr>
            <td>Başlık :</td>
            <td><input type="text" name="baslik"/></td>
        </tr>

        <tr>
            <td>İçerik :</td>
            <td><textarea name="icerik" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Kategori : </td>
            <td>
                <select name="kategori">
                    <option value="">Seçiniz</option>
                    <option value="genelduyurular">Genel Duyurular</option>
                    <option value="bolumduyurulari">Bölüm Duyuruları</option>
                    <option value="haberveetkinlikler">Haber ve Etkinlikler</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="duyuruekle" value="Ekle"/></td>
        </tr>

    </table>
</form>
</div>

<?php

if (isset($_POST['duyuruekle'])) {
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];
    $kategori = $_POST["kategori"];

    $kullaniciAdi = $_SESSION['kullaniciAdi'];

    if (empty($baslik) || empty($icerik) || empty($kullaniciAdi) || empty($kategori) ) {
        echo "<div style=\"color:red; margin-left:40px;\";><h3> Ekleme Başarısız! Lütfen formda boş yer bırakmayınız. </h3></div>";

    } else {
        $submit = $baglan->query("insert into duyurutablosu (baslik,icerik,ekleyen,kategori) values ('$baslik','$icerik','$kullaniciAdi','$kategori')");
        echo "<div style=\"color:green; margin-left:40px; \";><h3> Ekleme Başarılı! </h3></div>";
    }
}

?>

</body>
</html>