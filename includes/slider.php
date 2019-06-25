<?php
include("C:/wamp/www/yazlab1proje1/includes/config.php");


$sql = $baglan->query("SELECT id,resim,resimbaslik,resimaciklama FROM vtslider");

while ($sonuc = $sql->fetch_assoc()) {
    $resimsonucu = $sonuc["resim"];
    $resimbasliksonucu = $sonuc["resimbaslik"];
    $resimaciklamasonucu = $sonuc["resimaciklama"];
}


echo "<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">";

echo "<ol class=\"carousel-indicators\">";
echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>";
echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>";
echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>";
echo "<li data-target=\"#carousel-example-generic\" data-slide-to=\"3\"></li>";
echo "</ol>";

echo "<div class=\"carousel-inner\" role=\"listbox\" >";

echo "<div class=\"item active\" style=\"\">";
echo "<img src=\"$resimsonucu\" >";
echo "<div class=\"carousel-caption\">";
echo "<h3>$resimbasliksonucu</h3>";
echo "<p>$resimaciklamasonucu</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"item\">";
echo "<img src=\"images/2.jpg\">";
echo "<div class=\"carousel-caption\">";
echo "<h3>PMI-TR ve Proje Yönetimine Giriş Tanıtım Etkinliği</h3>";
echo "<p>PMI (Project Magement Institute) Türkiye Ve Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir. Yer: Prof. Dr. Savaş Ayberk Konferans Salonu Tarih: 10 Kasım 2016 Saat: 14:00-17:00 Konuşmacı: A. Buğu Bayazıt Yıldırım</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"item\">";
echo "<img src=\"images/3.jpg\">";
echo "<div class=\"carousel-caption\">";
echo "<h3>Görüntü Döküman İşleme Semineri</h3>";
echo "<p> Kocaeli Üniversitesi işbirliği ile düzenenecek PMI-TR ve Proje Yönetimine Giriş Ve Tanıtım Etkinliğine tüm öğrencilerimiz davetlidir. Yer: Prof. Dr. Savaş Ayberk Konferans Salonu Tarih: 10 Kasım 2016 Saat: 14:00-17:00 Konuşmacı: A. Buğu Bayazıt Yıldırım</p>";
echo "</div>";
echo "</div>";

echo "<div class=\"item\">";
echo "<img src=\"images/4.jpg\">";
echo "<div class=\"carousel-caption\">";
echo "<h3>Öğrencilerimizin Projelerinin Tübitak Başarısı</h3>";
echo "<p>2209-a Kapsamında Bu Dönem Kocaeli Üniversitesinde Desktelenen Toplam 6 Projenin 4 Ü Bilgisayar Mühendisliği Öğrencileri Tarafından Hazırlanmıştır.</p>";
echo "</div>";
echo "</div>";

echo "</div>";

echo "<a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">";
echo "<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>";
echo "<span class=\"sr-only\">Previous</span> </a>";
echo "<a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">";
echo "<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>";
echo "<span class=\"sr-only\">Next</span></a>";

echo "</div>";


?>