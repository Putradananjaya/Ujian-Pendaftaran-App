<?php
// setup.php
// Script untuk menginisialisasi database SQLite dan mengisi 1000 data dummy

$dbPath = __DIR__ . '/data/pendaftaran.sqlite';

// Buat folder 'data' jika belum ada
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data');
}

try {
    $db = new PDO("sqlite:" . $dbPath);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Buat tabel
    $db->exec("CREATE TABLE IF NOT EXISTS peserta (
        id INTEGER PRIMARY KEY AUTOINCREMENT, 
        nama TEXT, 
        email TEXT, 
        status TEXT
    )");
    
    // Bersihkan data lama
    $db->exec("DELETE FROM peserta");
    
    // Insert 1000 data dummy untuk pengujian performa (Skalabilitas)
    echo "Sedang membuat 1000 data dummy...\n";
    $db->beginTransaction();
    for ($i = 1; $i <= 1000; $i++) {
        $db->exec("INSERT INTO peserta (nama, email, status) VALUES ('Peserta {$i}', 'user{$i}@test.com', 'Aktif')");
    }
    $db->commit();
    
    echo "SELESAI! Database pendaftaran.sqlite siap digunakan.\n";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>