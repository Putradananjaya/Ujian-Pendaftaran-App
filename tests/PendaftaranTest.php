<?php
// tests/PendaftaranTest.php
use PHPUnit\Framework\TestCase;

class PendaftaranTest extends TestCase
{
    protected $db;

    protected function setUp(): void
    {
        $dbPath = __DIR__ . '/../data/pendaftaran.sqlite';
        $this->db = new PDO("sqlite:" . $dbPath);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function testPerformaQueryDanSkalabilitas()
    {
        $start_time = microtime(true);
        
        // Asesi akan gagal di tes ini jika mereka tidak memperbaiki file index.php
        $stmt = $this->db->query("SELECT id FROM peserta");
        $ids = $stmt->fetchAll(PDO::FETCH_COLUMN);

        $data = [];
        foreach ($ids as $id) {
            $data[] = $this->db->query("SELECT * FROM peserta WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
        }
        
        $end_time = microtime(true);
        $durasi = $end_time - $start_time;

        $this->assertGreaterThan(0, count($data), "Data peserta kosong di database!");
        
        // TARGET PERFORMA: Kueri tidak boleh lebih dari 0.05 detik
        $this->assertLessThan(0.05, $durasi, "GAGAL SKALABILITAS: Waktu kueri {$durasi} detik! Masih terjadi N+1 Query. Ubah menjadi 1 baris SELECT saja.");
    }
}