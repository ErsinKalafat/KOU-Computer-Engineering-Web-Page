<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="\yazlab1proje1\index.php" style="margin-left: 30px;">Kocaeli Üniversitesi
                Bilgisayar Mühendisliği </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="\yazlab1proje1\includes\hakkimizda.php">Hakkımızda<span class="sr-only">(current)</span>  </a>
                </li>
                <li><a href="\yazlab1proje1\includes\yonetim.php">Yönetim<span class="sr-only">(current)</span> </a>
                </li>
                <li><a href="\yazlab1proje1\includes\arastirma.php">Araştırma<span class="sr-only">(current)</span> </a>
                </li>
                <li><a href="\yazlab1proje1\includes\personel.php">Personel<span class="sr-only">(current)</span> </a>
                </li>
                <li><a href="\yazlab1proje1\includes\lisans.php">Lisans<span class="sr-only">(current)</span> </a></li>
                <li><a href="\yazlab1proje1\includes\ylisans_doktora.php">Y. Lisans / Doktora<span class="sr-only">(current)</span> </a>
                </li>
                <li><a href="\yazlab1proje1\includes\iletisim.php">İletişim<span class="sr-only">(current)</span> </a>
                </li>
                <!--                    <li><a style="float: right"; href="\yazlab1proje1\includes\duyuru_ekle.php">DUYURU EKLE<span class="sr-only">(current)</span> </a>-->
                <!--                    <li><a style="float: right"; href="\yazlab1proje1\includes\slider_ekle.php">SLİDER EKLE<span class="sr-only">(current)</span> </a>-->
                <li>


                    <?php
                    session_start();
                    if (!empty($_SESSION['kullaniciAdi'])) {
                        echo "<a style=\"background-color: #1b6d85; margin-left: 40px; font-size:18px;\" href=\"\yazlab1proje1\includes\profil.php\">";
                        echo "Hoşgeldin ";
                        echo $_SESSION['kullaniciAdi'];
                        echo "<span class=\"sr-only\">(current)</span> </a>";
                    }
                    ?>

                </li>

                <li>
                    <?php
                    if (empty($_SESSION['kullaniciAdi'])) {

                        echo "<a style = \"background-color: #2b542c; font-size:18px;\" href = \"\yazlab1proje1\includes\uye_girisi.php\" > Üye
                        Girişi <span class=\"sr-only\" > (current)</span > </a > ";

                    }
                    ?>
                </li>

                <li>
                    <?php
                    if (!empty($_SESSION['kullaniciAdi'])) {
                        echo "<a style=\"background-color: #761c19; font-size:18px;\" href=\"\yazlab1proje1\includes\logout.php\">Çıkış <span class=\"sr-only\">(current)</span> </a>";
                    }
                    ?>


                </li>

            </ul>
        </div>
    </div>
</nav>


