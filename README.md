# LEMBAR TUGAS UJI KOMPETENSI: REKAYASA PERANGKAT LUNAK (SOFTWARE ENGINEERING)

## 📌 SITUATION (SITUASI)
Anda sedang mengikuti uji kompetensi untuk skema **Rekayasa Perangkat Lunak (*Software Engineering*)**. Anda ditugaskan untuk mengambil alih *source code* aplikasi **"Sistem Pendaftaran"** (tautan referensi proyek: [Ujian-Pendaftaran-App](https://go.psti.undiknas.ac.id/OkupasiAnalisProgram)) yang belum selesai dikembangkan oleh tim sebelumnya.

Saat ini, aplikasi tersebut memiliki beberapa masalah kritis:
* Data pendaftar gagal tersimpan ke *database* (terdapat *error* pada logika dan *query*).
* Penulisan kode berantakan, rentan terhadap celah keamanan (*SQL Injection*), dan sulit dibaca.
* Aplikasi mengalami *bottleneck* performa (sangat lambat saat memuat daftar ribuan pendaftar).
* Belum ada implementasi pengujian (*testing*) dan dokumentasi teknis sama sekali.

---

## 🎯 TASK (TUGAS)
Dalam batas waktu **120 menit**, Anda diminta untuk mereviu dan memperbaiki *bug*, memastikan sistem terhubung ke *database* dengan aman, menguji alur kerja aplikasi secara otomatis, mengoptimalkan kecepatan muat data, serta menyusun dokumentasi kodenya.

---

## 🛠️ ACTION (TINDAKAN)

### Fasilitas & Akses:
Anda diberikan akses penuh menuju:
1. **Tautan Repository GitHub "Sistem Pendaftaran"** (menggunakan fitur *GitHub Template*) yang berisi *source code* awal dan *database* sampel.
2. **Lingkungan kerja awan GitHub Codespaces** yang sudah dilengkapi dengan IDE (*Visual Studio Code*), *Visual Debugger*, dan terminal terintegrasi untuk proses *Profiling*.
3. **Daftar skenario Unit Test dan Integration Test** yang telah disiapkan dan dapat dieksekusi langsung melalui terminal.

### Langkah Pengerjaan (Mencakup 10 Unit Kompetensi):
* **(Code Review):** Membaca, menganalisis, dan merapikan *source code* awal yang penulisan sintaksnya belum standar.
* **(Algoritma & Debugging):** Mencari penyebab kegagalan saat proses simpan data dan memperbaiki logika algoritmanya.
* **(SQL & Akses Basis Data):** Memperbaiki perintah SQL agar aman dari injeksi dan memastikan aplikasi berhasil melakukan operasi baca/tulis ke *database*.
* **(Unit & Integrasi Program):** Menjalankan dan meluluskan pengujian per modul (fungsi simpan data) serta pengujian integrasi (alur pendaftaran dari form HTML hingga tampil di tabel data).
* **(Profiling & Skalabilitas):** Menggunakan alat ukur waktu eksekusi untuk menemukan penyebab lambatnya aplikasi, melakukan optimasi kueri, dan menuliskan rekomendasi teknis agar aplikasi tidak *crash* ketika diakses pengguna secara masif.
* **(Dokumen Kode):** Menambahkan blok komentar/penjelasan pada *source code* agar alurnya mudah dipahami oleh *developer* selanjutnya.

---

## 🏆 RESULT (HASIL AKHIR)
Pada akhir sesi, Anda diwajibkan untuk mendemonstrasikan dan menyerahkan hasil berikut kepada Asesor:

1. **Aplikasi Berjalan Lancar:** Mendemonstrasikan secara langsung bahwa sistem telah mampu menyimpan data baru secara valid dan memuat daftar peserta dengan kecepatan optimal.
2. **Bukti Pengujian:** Menyerahkan laporan (*screenshot* terminal) yang membuktikan seluruh Uji Unit dan Uji Integrasi berstatus **Passed/Berhasil** (hijau).
3. **Laporan Performa & Skalabilitas:** Menyusun dokumen ringkas (di dalam file `README.md` pada bagian laporan asesi) yang memuat data perbandingan kecepatan muat aplikasi (sebelum vs. sesudah optimasi) dan analisis ketahanan sistem.
4. **Source Code Terdokumentasi:** Menyerahkan tautan repositori berisi *file* kode final yang rapi, aman, dan memuat dokumentasi/komentar teknis.
