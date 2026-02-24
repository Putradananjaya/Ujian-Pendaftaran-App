# Ujian Kompetensi Praktik: Rekayasa Perangkat Lunak

**SITUATION:** Anda sedang mengikuti uji kompetensi skema Rekayasa Perangkat Lunak. Anda menerima _source code_ aplikasi "Sistem Pendaftaran" [https://go.psti.undiknas.ac.id/AnalisProgram] yang belum selesai dari tim sebelumnya. Aplikasi ini memiliki masalah:

1. Data pendaftar gagal tersimpan ke database (ada error pada logika dan query).
2. Kodenya berantakan dan rentan terhadap serangan (_SQL Injection_).
3. Aplikasi sangat lambat (membutuhkan waktu lama saat memuat daftar ribuan pendaftar).
4. Belum ada pengujian (testing) dan dokumentasi sama sekali.

**TASK:** Dalam waktu **120 menit**, Anda diminta untuk mereviu dan memperbaiki bug, mengoptimalkan kecepatan muat datanya (skalabilitas), menguji performa, serta membuat dokumentasi kodenya.

**ACTION:**

1. Buka Terminal di Codespaces, ketik `composer install` lalu `php setup.php` untuk menyiapkan database.
2. Ketik `php -S localhost:8000 -t src/` di terminal untuk melihat tampilan aplikasi di _browser_.
3. Perbaiki _bug_ pada `src/proses.php` dan masalah performa pada `src/index.php`.
4. Jalankan pengujian di terminal dengan perintah `vendor/bin/phpunit tests/` sampai hasil menunjukkan tulisan hijau (PASSED).

---

## 📝 LAPORAN HASIL PEKERJAAN (Isi di bawah ini!)

**Nama:** [NAMA ANDA]  
**NIM:** [NIM ANDA]

### 1. Log Debugging & Algoritma (`proses.php`)

- _Jelaskan bug apa saja yang Anda temukan saat data gagal disimpan, dan bagaimana Anda memperbaikinya?_
- (Jawaban Anda di sini...)

### 2. SQL & Keamanan Basis Data

- _Bagaimana cara Anda mencegah SQL Injection pada `proses.php`? Tuliskan perbandingan query lama vs query baru Anda._
- (Jawaban Anda di sini...)

### 3. Profiling Program & Skalabilitas (`index.php`)

- **Waktu Muat Halaman Sebelum Diperbaiki:** ... detik
- **Waktu Muat Halaman Setelah Diperbaiki:** ... detik
- _Jelaskan secara logis, mengapa kueri awal (N+1 Query) sangat lambat dan berpotensi membuat server crash jika data pendaftar mencapai 100.000 orang?_
- (Jawaban Anda di sini...)

### 4. Dokumentasi Kode Program

- _Tuliskan dokumentasi singkat tentang alur kerja aplikasi ini dari saat user menekan tombol daftar, hingga data masuk ke database._
- (Jawaban Anda di sini...)
