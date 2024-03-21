<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard
    </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/profil.css') ?>">
</head>
<body>
<div class="navbar">
    <div class="logo">TowingIn</div>
    <div class="user">
    </div>
    <div class="logout">
        <a href="<?php echo site_url('auth/dashboard') ?>" class="logout-link">Home</a>
    </div>
</div>
    <div class="dashboard">
        <img class="profil" src="<?php echo base_url('assets/profil.png') ?>" alt="Profil">
        <div class="welcome-text">
            <?php echo $this->session->userdata('ses_nama') ?>
            <br>
            <?php echo $this->session->userdata('ses_email') ?>
            <br>
            <?php echo $this->session->userdata('ses_no') ?>
            <br>
            <?php echo $this->session->userdata('ses_status') ?>
        </div>
    </div>
</body>
</html>