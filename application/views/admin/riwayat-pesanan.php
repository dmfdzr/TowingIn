<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/riwayat-pesanan.css') ?>">
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
            <thead>
                <tr>
                    <th>Pengirim</th>
                    <th>Penerima</th>
                    <th>No. Pengirim</th>
                    <th>No. Penerima</th>
                    <th>Plat Nomor</th>
                    <th>Penanggung Jawab</th>
                    <th>Biaya</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pesanan as $p) { ?>
                <tr>
                    <td><?php echo $p->nama_pengirim; ?> - <?php echo $p->alamat_pengambilan; ?></td>
                    <td><?php echo $p->nama_penerima; ?> - <?php echo $p->alamat_tujuan; ?></td>
                    <td><?php echo $p->no_pengirim; ?></td>
                    <td><?php echo $p->no_penerima; ?></td>
                    <td><?php echo $p->plat_no; ?></td>
                    <td><?php echo $p->pj; ?></td>
                    <td>Rp<?php echo $p->biaya; ?></td>
                    <td><?php echo $p->tanggal; ?></td>
                    <td><?php echo $p->status; ?></td>
                    <td class="action-buttons">
                        <a href="<?php echo site_url('pesanan/edit/'.$p->id_pesanan); ?>" class="edit">Edit</a>
                        <a href="<?php echo site_url('pesanan/delete/'.$p->id_pesanan); ?>" class="delete">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>