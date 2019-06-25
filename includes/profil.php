<!doctype html>
<head>

    <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"/>
    <link href="\yazlab1proje1\css\bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="\yazlab1proje1\css\style.css"/>

    <script src="\yazlab1proje1\js\jquery-3.1.1.min.js"></script>
    <script src="\yazlab1proje1\js\bootstrap.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">

    <title> KOU Bilgisayar Muhendisligi </title>


</head>

<body>

<?php include("C:/wamp/www/yazlab1proje1/includes/config.php"); ?>
<?php include("C:/wamp/www/yazlab1proje1/includes/header.php"); ?>

<div style="color: #2e6da4; font-size: 30px; margin-left: 30px;">
<?php
echo "Merhaba ";
echo $_SESSION['kullaniciAdi'];
echo " ne yapmak istersin? ";
?>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php include("C:/wamp/www/yazlab1proje1/includes/duyuru_ekle.php"); ?>
        </div>
        <div class="col-md-6">
            <?php include("C:/wamp/www/yazlab1proje1/includes/slider_ekle.php"); ?>
        </div>
    </div>
</div>
<?php include("C:/wamp/www/yazlab1proje1/includes/footer.php"); ?>
</body>

</html>


