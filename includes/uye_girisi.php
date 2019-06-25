<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"/>
<link href="\yazlab1proje1\css\bootstrap.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="\yazlab1proje1\css\style.css"/>

<script src="\yazlab1proje1\js\jquery-3.1.1.min.js"></script>
<script src="\yazlab1proje1\js\bootstrap.js"></script>

<link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

<title> Üye Girişi </title>
<?php include("C:/wamp/www/yazlab1proje1/includes/config.php"); ?>

<?php
session_start();
if (isset($_POST['uyeGiris'])){
    require 'config.php';
    $kullaniciAdi = $_POST['kullaniciAdi'];
    $parola = $_POST['parola'];
    $sql = $baglan->query("SELECT * FROM uyeler WHERE kullanici_adi='$kullaniciAdi' and parola='$parola' ");

    while ($sonuc = $sql->fetch_assoc()) {
        $_SESSION['kullaniciAdi'] = $kullaniciAdi;
        header('Location: \yazlab1proje1\index.php');
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form method="post" style="margin-left: 20%; margin-right: 20%; margin-top: 20%;">
                <h2>Üye Girişi </h2>
                <table>
                    <tr>
                        <td>Kullanıcı Adı : </td>
                        <td><input type="text" name="kullaniciAdi"></td>
                    </tr>
                    <tr>
                        <td>Parola : </td>
                        <td><input type="password" name="parola"></td>
                    </tr>
                    <tr>
                        <td>&nbsp; </td>
                        <td><input type="submit" name="uyeGiris" value="Giriş"></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="col-md-6">
            <h1 style="margin-top: 20%; color: #3c763d; font-family: Tahoma; font-size: 50px;">
                Kocaeli Üniversitesi </br> Bilgisayar Mühendisliği </h1>
        </div>

</div>


