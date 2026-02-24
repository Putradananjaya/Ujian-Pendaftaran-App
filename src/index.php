<?php
// src/index.php
$start_time = microtime(true); // Mulai Profiling
require 'database.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Pendaftaran</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; max-width: 800px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .form-group { margin-bottom: 15px; }
    </style>
</head>
<body>
    <h2>Form Pendaftaran (Ujian RPL)</h2>
    <?php if(isset($_GET['pesan']) && $_GET['pesan'] == 'sukses') echo "<p style='color:green; font-weight:bold;'>Sistem mengatakan sukses, tapi coba cek di tabel bawah apakah datanya benar-benar masuk?</p>"; ?>
    
    <form action="proses.php" method="POST">
        <div class="form-group">
            <label>Nama:</label><br>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Daftar Sekarang</button>
    </form>

    <hr>
    <h2>Daftar Peserta (Terdapat Isu Skalabilitas!)</h2>
    
    <?php 
    // Bagian Profiling (Mencetak waktu eksekusi di bagian atas tabel)
    $end_time = microtime(true); 
    $durasi = number_format($end_time - $start_time, 4);
    echo "<p style='color:red;'><b>Waktu Muat Halaman (Profiling): {$durasi} detik</b></p>";
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        <?php
        // BUG 4 (Skalabilitas & SQL): N+1 Query Problem!
        // Mengambil ID dulu, lalu melakukan query lagi di dalam perulangan. Sangat lambat!
        $stmt = $db->query("SELECT id FROM peserta");
        $ids = $stmt->fetchAll(PDO::FETCH_COLUMN);

        foreach ($ids as $id) {
            // LOOP QUERY: Asesi harus menyatukan query ini menjadi SELECT * FROM peserta
            $detail = $db->query("SELECT * FROM peserta WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
            if ($detail) {
                echo "<tr>
                        <td>{$detail['id']}</td>
                        <td>{$detail['nama']}</td>
                        <td>{$detail['email']}</td>
                        <td>{$detail['status']}</td>
                      </tr>";
            }
        }
        ?>
    </table>
</body>
</html>