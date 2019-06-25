<!doctype html>
<head>
    <!-- -->
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

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">

            <?php include("C:/wamp/www/yazlab1proje1/includes/slider.php"); ?>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 ">

<?php $sql = $baglan->query("SELECT kullanici_adi FROM uyeler"); ?>

            <table style="margin-left:3%; margin-top:1%;">
                <tr>
                    <td>
                        <select name="secilenkullanici" id="secilenkullanici" style="width: 300px; height: 30px;">

                        <?php
                        while ($sonuc = $sql->fetch_assoc()) {
                            $kullaniciAdi = $sonuc["kullanici_adi"];

                            echo "<option value=\"$kullaniciAdi\">$kullaniciAdi</option>";
                        }

                        ?>
                        </select>
                    </td>
                    <td>&nbsp; </td>
                    <td><input type="submit" name="ara" value="Ara" style="height:30px; width: 100px; color:
                               white; background-color:#444444; ">
                    </td>
                </tr>
            </table>


            <?php
            if (isset($_POST['ara'])) {
                $secilenkullanici = $_POST['secilenkullanici'];



                $sql = $baglan->query("SELECT * FROM duyurutablosu WHERE ekleyen='$kullaniciAdi' ORDER BY tarih DESC");
            }

            while ($sonuc = $sql->fetch_assoc()) {
                $basliksonucu = $sonuc["baslik"];
                $iceriksonucu = $sonuc["icerik"];
                $idsonucu = $sonuc["id"];
                $ekleyensonucu = $sonuc["ekleyen"];
                $tarihsonucu = $sonuc["tarih"];

                $time = strtotime($tarihsonucu);
                $myFormatForView = date("F Y l", $time);
                $gunCustom = date("d", $time);

                echo "<div style=\"color:black; background-color:#DBEDCF; padding: 10px; border-radius:10px; \">";
                echo "    <a style=\"color:#5A72BF;  \"data-toggle=\"collapse\" href=\"#$idsonucu\" aria-expanded=\"false\">$basliksonucu</a>";
                echo "    <div class=\"collapse\" id=$idsonucu>";
                echo "        <div class=\"kategoriyazi\">$iceriksonucu</div>";
                echo "    </div>";
                echo "    <div style=\"color:green\";> $ekleyensonucu";
                echo "        <div style=\"color:#5A72BF; font-size:40px; float:right;\";> $gunCustom</div>";
                echo "    </div>";
                echo "    <div style=\"color:lightslategray\";> $myFormatForView </div>";
                echo "</div>";
                echo "<br>";
            }

            ?>


        </div>
    </div>
</div>

<div class="container" style=" margin-left:40px; margin-right: 40px; text-shadow: rgb(190, 190, 190)5px 3px 5px;">
    <div class="row" style="margin-top: 10px;">
        <div class="col-lg-4 col-md-4 col-sm-4 " style="overflow-y:scroll; height: 400px;">

            <h4>Genel Duyurular</h4>

            <?php include("C:/wamp/www/yazlab1proje1/includes/genel_duyuru.php"); ?>


        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 " style="overflow-y:scroll; height: 400px;">
            <h4>Bölüm Duyuruları</h4>

            <?php include("C:/wamp/www/yazlab1proje1/includes/bolum_duyuru.php"); ?>

        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 " style="overflow-y: scroll; height: 400px;">
            <div class="enson">
                <h4>Haber ve Etkinlikler</h4>

                <?php include("C:/wamp/www/yazlab1proje1/includes/haber_etkinlik.php"); ?>

            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
</body>

</html>


