<?php
$sql = $baglan->query("SELECT id,baslik,icerik,ekleyen,tarih FROM duyurutablosu WHERE kategori='genelduyurular' ORDER BY tarih DESC");

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