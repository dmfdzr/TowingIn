<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan - TowingIn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/edit-pesanan.css') ?>">
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
    <form action="<?= site_url('pesanan/update') ?>" method="POST">
        <input type="hidden" name="id_pesanan" value="<?= $pesanan->id_pesanan ?>">
        <input type="text" name="pj" placeholder="Penanggung Jawab" value="<?= $pesanan->pj ?>" required>
        <select name="status" id="status" required>
            <option value="Proses" <?= $pesanan->status == 'Proses' ? 'selected' : '' ?>>Proses</option>
            <option value="Selesai" <?= $pesanan->status == 'Selesai' ? 'selected' : '' ?>>Selesai</option>
        </select>
        <input type="text" name="biaya" placeholder="Biaya" value="<?= $pesanan->biaya ?>" required>
        <button type="submit">Simpan</button>
    </form>
</div>

</body>

</html>
