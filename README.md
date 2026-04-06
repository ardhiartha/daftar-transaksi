# Loop Daftar Transaksi Peminjaman

Proyek ini adalah implementasi PHP untuk men-generate dan menampilkan simulasi riwayat transaksi peminjaman perpustakaan. Data disajikan dalam bentuk tabel yang interaktif serta dilengkapi dengan papan statistik menggunakan **Bootstrap 5**.

## Deskripsi Tugas
Script `daftar_transaksi.php` berfokus pada penggunaan struktur kontrol perulangan (Looping) di dalam PHP untuk membuat data dummy transaksi secara otomatis, memanipulasi tanggal, serta menerapkan kondisi khusus dalam perulangan tersebut.

## Fitur & Logika Pemrograman
Materi utama yang diterapkan pada tugas ini meliputi:

1. **Perulangan `FOR Loop`**:
   - Men-generate 10 data transaksi peminjaman buku secara berurutan.
2. **Kontrol `CONTINUE`**:
   - Melewati (skip) proses render untuk transaksi dengan urutan genap sehingga tidak tampil di dalam tabel dan perhitungan.
3. **Kontrol `BREAK`**:
   - Menghentikan proses loop secara paksa saat mencapai urutan transaksi ke-8.
4. **Manipulasi Tanggal PHP**:
   - Menggunakan `date()` dan `strtotime()` untuk menghitung tanggal pinjam, batas tanggal kembali, dan lama waktu peminjaman.
5. **Perhitungan Statistik Dinamis**:
   - Menghitung secara real-time jumlah total transaksi yang tampil, jumlah buku yang masih dipinjam, dan yang sudah dikembalikan.

## Cara Menjalankan
1. Pastikan Anda memiliki web server lokal seperti XAMPP, Laragon, atau MAMP.
2. Letakkan file `daftar_transaksi.php` di dalam folder root dokumen server (misal: `htdocs` untuk XAMPP).
3. Buka browser dan akses URL: `http://localhost/nama_folder/daftar_transaksi.php`
