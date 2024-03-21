<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendapatan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/pendapatan.css') ?>">
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
    <div class="table-section">
        <table>
            <button onclick="window.print()">
                Cetak   
            </button>
            <thead>
                <tr>
                    <th>Penanggung Jawab</th>
                    <th>Tanggal</th>
                    <th>Pendapatan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pesanan as $p) { ?>
                <tr>
                    <td><?php echo $p->pj; ?></td>
                    <td><?php echo $p->tanggal; ?></td>
                    <td>Rp<?php echo $p->biaya; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>