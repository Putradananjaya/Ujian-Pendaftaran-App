<?php
// src/proses.php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $status = "Aktif";

    // BUG 1 (Keamanan): Rentan SQL Injection (Gunakan Prepared Statement PDO!)
    // BUG 2 (Debugging): Typo 'INSER' seharusnya 'INSERT'
    $query = "INSER INTO peserta (nama, email, status) VALUES ('$nama', '$email', '$status')";

    // BUG 3 (Algoritma): Baris eksekusi query ke database ( $db->exec ) tidak ada! 
    // Sehingga data tidak akan pernah tersimpan.
    

    // Redirect kembali ke halaman utama
    header("Location: index.php?pesan=sukses");
    exit;
}
?>