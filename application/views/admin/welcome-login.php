<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
</head>
<body>
    <div class="container">
        <div class="right-section">
            <img class="logo" src="../assets/logo.png" alt="TowingIn Logo"> <!-- Ganti URL dengan URL logo aplikasi -->
            <form class="login-form" action="<?php echo site_url('auth/login') ?>" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Masuk</button>
            </form>
            <br>
            <a href="<?php echo site_url('auth/register') ?>">Belum Mendaftar?</a>
        </div>
    </div>
</body>
</html>