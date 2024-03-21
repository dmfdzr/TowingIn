<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/detail-pesanan.css') ?>">
</head>
<body>
    <div class="navbar">
        <div>TowingIn</div>
        <div class="logout">
            <a href="<?php echo site_url('auth/dashboard') ?>" class="logout-link">Home</a>
        </div>
    </div>
    <div class="logo">
        <img src="<?php echo base_url('assets/logo.png') ?>" alt="TowingIn Logo"> <!-- Ganti dengan URL logo Towingin -->
    </div>
    <div class="form-section">
    <form action="<?= site_url('pesanan/create') ?>" method="POST">
        <input type="text" name="nama_pengirim" placeholder="Pengirim" required>
        <input type="text" name="nama_penerima" placeholder="Penerima" required>
        <input type="tel" name="no_pengirim" placeholder="No. Pengirim" required>
        <input type="tel" name="no_penerima" placeholder="No. Penerima" required>
        <input type="text" name="alamat_pengambilan" placeholder="Alamat Pengambilan" required>
        <input type="text" name="alamat_tujuan" placeholder="Alamat Tujuan" required>
        <input type="text" name="plat_no" placeholder="Plat Nomor" required>
        <input type="text" name="biaya" placeholder="Biaya" required>
        <input type="text" name="pj" placeholder="Penanggung Jawab" required>
        <select name="status" id="status" required>
            <option value="Proses">Proses</option>
            <option value="Selesai">Selesai</option>
        </select>
        <button type="submit">Buat Pesanan</button>
    </form>
</div>
</body>
</html>