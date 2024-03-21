<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Daftar
    </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/daftar.css') ?>">
</head>
<body>
    <div class="container">
        <div class="right-section">
            <img class="logo" src="<?php echo base_url('assets/logo.png') ?>" alt="TowingIn Logo"> <!-- Ganti URL dengan URL logo aplikasi -->
            <form class="register-form" action="<?php echo site_url('auth/create') ?>" method="POST">
                <input type="text" name="nama" placeholder="Nama Perusahaan" required>
                <input type="text" name="no" placeholder="Nomor HP" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Daftar</button>
            </form>
            <br>
            <a href="<?php echo site_url('auth') ?>">Sudah Mendaftar?</a>
        </div>
    </div>
</body>
</html>