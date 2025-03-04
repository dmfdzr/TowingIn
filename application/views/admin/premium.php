<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard
    </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/premium.css') ?>">
    <style>
        body 
        {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar 
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #FF3636;
            color: #fff;
        }
        .navbar .logo 
        {
            font-size: 1.5rem;
        }
        .navbar .user 
        {
            display: flex;
            align-items: center;
        }
        .navbar .user i 
        {
            margin-right: 5px;
        }
        .dashboard 
        {
            background-size: cover;
            background-position: center;
            height: 75vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            color: #fff;
            padding: 50px;
        }
        .logout 
        {
            margin-right: 20px;
        }
        .logout-link 
        {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            background-color: #FF3636;
            transition: background-color 0.3s ease;
        }
        .logout-link:hover 
        {
            background-color: #c82333;
        }
        .profil
        {
            width: 20x;
            height: 75px;
        }
        .dashboard h2 
        {
            font-size: 2rem;
            margin-bottom: 20px;
            color: black;
        }
        .dashboard .action-buttons 
        {
            display: flex;
            justify-content: center;
        }
        .dashboard .action-buttons button 
        {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            background-color: #FF3636;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .dashboard .action-buttons button:hover 
        {
            background-color: #c82333;
        }
        .dashboard .action-buttons a 
        {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
            background-color: #FF3636;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .dashboard .action-buttons a:hover
        {
            background-color: #c82333;
        }
        @media (max-width: 768px) 
        {
            .dashboard h2 {
                font-size: 0.5rem;
            }
            .dashboard .welcome-text {
                font-size: 0.2rem;
            }
        }
    </style>
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
        <img class="profil" src="<?php echo base_url('assets/logo.png') ?>" alt="Profil">
        <div class="welcome-text">
            <h2>
                Dengan Rp100.000/bulan fitur yang didapatkan, yaitu pemesanan 24/7 dan tidak ada
                batasan pesanan/bulan
            </h2>
        </div>
        <div class="action-buttons">
                <a target="_blank" href="https://wa.link/5xehtd">Berlangganan</a>
        </div>
    </div>
</body>
</html>