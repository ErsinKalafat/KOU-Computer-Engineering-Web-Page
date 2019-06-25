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
    <h3>Slider Ekle</h3>
    <hr/>
    <form action="" method="post">
        <table cellspacing="150" cellpadding="5">
            <tr>
                <td>Resim URL :</td>
                <td><input type="url" name="resim"/></td>
            </tr>

            <tr>
                <td>Başlık :</td>
                <td><input name="resimbaslik" cols="30" rows="5"> </input></td>
            </tr>
            <tr>
                <td>Açıklama :</td>
                <td><input name="resimaciklama" cols="30" rows="5"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sliderekle" value="Ekle"/></td>
            </tr>

        </table>
    </form>
</div>

<?php


if (isset($_POST['sliderekle'])) {
    $resim = $_POST["resim"];
    $resimbaslik = $_POST["resimbaslik"];
    $resimaciklama = $_POST["resimaciklama"];


    if (empty($resim) || empty($resimbaslik) || empty($resimaciklama)) {
        echo "<div style=\"color:red; margin-left:40px;\";><h3> Ekleme Başarısız! Lütfen formda boş yer bırakmayınız. </h3></div>";

    } else {
        $submit = $baglan->query("insert into vtslider (resim,resimbaslik,resimaciklama) values ('$resim','$resimbaslik','$resimaciklama')");
        echo "<div style=\"color:green; margin-left:40px; \";><h3> Ekleme Başarılı! </h3></div>";
    }
}
?>

</body>
</html>
