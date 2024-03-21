<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        User Manual
    </title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/manual.css') ?>">
</head>
<body>
<div class="navbar">
    <div class="logo">TowingIn</div>
    <div class="user">
    </div>
    <div class="logout">
        <a href="<?php echo site_url('') ?>" class="logout-link">Landing Page</a>
    </div>
</div>
    <div class="dashboard">
        <div class="welcome-text">
            <h2>Panduan Pengguna</h2>
            <ol>
                <li>
                    Mendaftarkan Perusahaan
                    <p>
                        Klik tombol mulai pada halaman landing page. Setelah masuk ke halaman daftar
                        dapat mengisi kolom yang tersedia. Jika sudah selesai, klik tombol daftar. Maka
                        akan langsung menuju halaman login.
                    </p>
                </li>
                <li>
                    Login Akun Perusahaan
                    <p>
                        Masukkan email dan password yang sudah didaftarkan setelah itu klik tombol masuk.
                        Jika email dan password benar, maka pengguna akan diarahkan ke halaman utama.
                    </p>
                </li>
                <li>
                    Melihat Profil Perusahaan
                    <p>
                        Pada halaman utama terdapat tombol pemesanan dan riwayat pemesanan serta bar navigasi 
                        yang terdiri dari nama website, tombol profil, dan tombol logout. Klik tombol profil untuk 
                        menuju halaman profil perusahaan.
                    </p>
                </li>
                <li>
                    Membuat Pesanan
                    <p>
                        Klik tombol pemesanan pada halaman utama untuk membuat pesanan baru, pengguna akan diarahkan 
                        ke halaman pemesanan. Setelah itu isi kolom yang tersedia serta pilih proses pada kolom status.
                        Jika semua sudah diisi, klik tombol buat pesanan. Setelah pesanan berhasil dibuat akan langsung 
                        diarahkan ke halaman utama.
                    </p>
                </li>
                <li>
                    Melihat Riwayat Pesanan
                    <p>
                        Klik tombol riwayat pemesanan pada halaman utama untuk melihat pemesanan yang sudah dibuat.
                    </p>
                </li>
                <li>
                    Edit Riwayat Perusahaan
                    <p>
                        Klik tombol edit pada halaman riwayat pemesanan untuk melakukan perubahan pada kolom pemesanan yang 
                        dapat ingin diubah. Pada halaman edit kolom yang dapat diubah adalah penanggung jawab, status pemesanan, 
                        dan biaya. Klik tombol simpan untuk menyelesaikan perubahan pemesanan.
                    </p>
                </li>
                <li>
                    Logout Akun Perusahaan
                    <p>
                        Klik tombol logout pada halaman utama di bagian navigasi, maka pengguna akan keluar dari akun perusahaan 
                        dan diarahkan ke halaman login.
                    </p>
                </li>
            </ol>
        </div>
    </div>
</body>
</html>
