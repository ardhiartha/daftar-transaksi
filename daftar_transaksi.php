<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4"><i class="bi bi-arrow-left-right"></i> Daftar Transaksi Peminjaman</h1>
        
        <?php
        // Inisialisasi variabel untuk statistik
        $total_transaksi = 0;
        $total_dipinjam = 0;
        $total_dikembalikan = 0;
        
        // Loop pertama untuk menghitung statistik (mensimulasikan data yang akan tampil)
        for ($i = 1; $i <= 10; $i++) {
            // Stop loop jika mencapai iterasi ke-8
            if ($i == 8) {
                break;
            }
            
            // Skip (lewati) iterasi jika angka genap
            if ($i % 2 == 0) {
                continue;
            }
            
            // Menentukan status transaksi
            $status = ($i % 3 == 0) ? "Dikembalikan" : "Dipinjam";
            
            // Kalkulasi statistik
            $total_transaksi++;
            if ($status == "Dikembalikan") {
                $total_dikembalikan++;
            } else {
                $total_dipinjam++;
            }
        }
        ?>
        
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card border-primary shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="text-primary"><?php echo $total_transaksi; ?></h3>
                        <p class="mb-0 fw-bold">Total Transaksi Ditampilkan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="text-warning"><?php echo $total_dipinjam; ?></h3>
                        <p class="mb-0 fw-bold">Masih Dipinjam</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="text-success"><?php echo $total_dikembalikan; ?></h3>
                        <p class="mb-0 fw-bold">Sudah Dikembalikan</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0"><i class="bi bi-table"></i> Riwayat Transaksi Aktif</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-3">No</th>
                                <th>ID Transaksi</th>
                                <th>Peminjam</th>
                                <th>Buku</th>
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                                <th>Lama Pinjam</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no_urut = 1;
                            
                            // Loop kedua untuk merender baris tabel
                            for ($i = 1; $i <= 10; $i++) {
                                // 1. Aturan BREAK: Hentikan loop di transaksi ke-8
                                if ($i == 8) {
                                    break;
                                }
                                
                                // 2. Aturan CONTINUE: Skip transaksi genap
                                if ($i % 2 == 0) {
                                    continue;
                                }
                                
                                // Generate data transaksi
                                $id_transaksi = "TRX-" . str_pad($i, 4, "0", STR_PAD_LEFT);
                                $nama_peminjam = "Anggota " . $i;
                                $judul_buku = "Buku Teknologi Vol. " . $i;
                                $tanggal_pinjam = date('Y-m-d', strtotime("-$i days"));
                                $tanggal_kembali = date('Y-m-d', strtotime("+7 days", strtotime($tanggal_pinjam)));
                                $status = ($i % 3 == 0) ? "Dikembalikan" : "Dipinjam";
                                
                                // Hitung jumlah hari sejak dipinjam
                                // Karena tanggal pinjam di-set -$i hari dari hari ini, lamanya adalah $i hari
                                $hari_berlalu = $i; 
                                
                                // Tentukan warna badge berdasarkan status
                                if ($status == "Dikembalikan") {
                                    $badge_color = "success";
                                    $icon = "check-circle";
                                } else {
                                    $badge_color = "warning text-dark";
                                    $icon = "hourglass-split";
                                }
                                ?>
                                
                                <tr>
                                    <td class="ps-3"><?php echo $no_urut++; ?></td>
                                    <td><code><?php echo $id_transaksi; ?></code></td>
                                    <td><?php echo $nama_peminjam; ?></td>
                                    <td><strong><?php echo $judul_buku; ?></strong></td>
                                    <td><?php echo date('d M Y', strtotime($tanggal_pinjam)); ?></td>
                                    <td><?php echo date('d M Y', strtotime($tanggal_kembali)); ?></td>
                                    <td><?php echo $hari_berlalu; ?> Hari</td>
                                    <td>
                                        <span class="badge bg-<?php echo $badge_color; ?>">
                                            <i class="bi bi-<?php echo $icon; ?>"></i> <?php echo $status; ?>
                                        </span>
                                    </td>
                                </tr>
                                
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-muted text-end">
                <em>*Catatan: Transaksi genap dilewati, dan riwayat dibatasi hingga transaksi ke-7.</em>
            </div>
        </div>
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>