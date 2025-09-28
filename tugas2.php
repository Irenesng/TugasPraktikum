<?php
// Variabel JSON yang disesuaikan untuk Karyawan
$jsonString = '{"nama_lengkap":"Irene","usia":30,"divisi":"Marketing"}';

// Decode ke PHP Object (menggantikan $obj)
$karyawan_obj = json_decode($jsonString);

// Akses nilai dari PHP Object
echo "Akses dari Object: " . $karyawan_obj->nama_lengkap . " - " . $karyawan_obj->divisi . "<br>";

// Decode ke PHP Array (menggantikan $arr)
$karyawan_arr = json_decode($jsonString, true);

// Akses nilai dari PHP Array
echo "Akses dari Array: " . $karyawan_arr["nama_lengkap"] . " - " . $karyawan_arr["divisi"];
?>