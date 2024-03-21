<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard
    </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/halaman-utama.css') ?>">
</head>
<body>
<div class="navbar">
    <div class="logo">TowingIn</div>
    <div class="user">
    </div>
    <div class="logout">
        <a href="<?php echo site_url('auth/premium') ?>" class="logout-link">Premium</a>
        <a href="<?php echo site_url('pendapatan') ?>" class="logout-link">Pendapatan</a>
        <a href="<?php echo site_url('auth/profil') ?>" class="logout-link">Profil</a>
        <a href="<?php echo site_url('auth/logout') ?>" class="logout-link">Logout</a>
    </div>
</div>
    <div class="dashboard">
        <div class="welcome-text">
            <h2>Selamat Datang <br> <?php echo $this->session->userdata('ses_nama') ?>!</h2>
        </div>
        <div class="action-buttons">
            <a href="<?php echo site_url('pesanan/addpesanan') ?>">Pemesanan</a>
            <a href="<?php echo site_url('pesanan') ?>">Riwayat Pemesanan</a>
        </div>
    </div>
</body>
</html>