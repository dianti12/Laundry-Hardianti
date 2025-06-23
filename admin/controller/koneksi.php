<?php
$hostname     = "localhost";
$hostusername = "root";
$hostpassword = "";
$hostdatabase = "Laundry_1";
$config = mysqli_connect($hostname, $hostusername, $hostpassword, $hostdatabase);
if (!$config) {
    echo "Koneksi gagal";
}
