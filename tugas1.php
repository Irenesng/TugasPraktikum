<?php
// Buat array (Menggantikan $mahasiswa)
$karyawan = [
    "nama_lengkap" => "Irene",
    "usia"          => 30,
    "divisi"        => "Marketing"
];

// Encode array ke JSON (Menggantikan $jsonData)
$jsonOutput = json_encode($karyawan);

echo "Hasil JSON: " . $jsonOutput;
?>