<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"/>

<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_database = "vtyazlab1proje1";


$baglan = new mysqli($db_host, $db_user, $db_password, $db_database);
if($baglan->connect_errno){
    echo "Bağlantı Hatası:".$con->connect_errno;
    exit;
}

$submit = $baglan->query("SET NAMES UTF8");
?>
