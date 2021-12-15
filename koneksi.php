<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "15_perpustakaan_12rpl1";

$koneksi = mysqli_connect($server,$username,$password,$database);
if(!$koneksi){
    die("KONEKSI GAGAL <br>".mysqli_connect_erorr());
}else{
   // echo "KONEKSI BERHASIL";
}
?>

<?php
date_default_timezone_set("America/New_York");
echo date("d/m/y"). date("h:i");
?>