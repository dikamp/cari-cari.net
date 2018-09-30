<?php
/**
 * Namafile : config.php 
 * ----------------------------*/
$dbhost = 'mysql.dikamp.web.id'; 
$dbuser = 'dikampwe_admin';     // ini berlaku di xampp
$dbpass = 'dika_272727';         // ini berlaku di xampp
$dbname = 'dikampwe_user';
// melakukan koneksi ke database
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}