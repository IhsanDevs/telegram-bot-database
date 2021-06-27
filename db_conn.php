<?php
/*
Author : Ihsan Devs
Contact : https://t.me/IhsanDevs
License : Free
Donate : https://trakteer.id/ihsan.devs


Silahkan buat akun di https://remotemysql.com. Jika sudah, silahkan isi survey terlebih dahulu
agar dapat membuat database baru. Jika sudah berhasil membuat database baru, silahkan menyesuaikan
data-data dibawah yang sudah ditandai. Data-data dibawah ini hanya sebagai contoh bahan belajar. Jangan
mengubah-ubah data di server agar yang lain juga dapat memakai.
*/


$host = "remotemysql.com";
$port = 3306;

// Ubah data ini sesuai data di akun https://remotemysql.com kamu.
$username = "JVdpXed0NC"; // Username database
$password = "K7IKyQStwD"; // Password database
$db_name = "JVdpXed0NC"; // Nama database

$db_conn = mysqli_connect("$host:$port", $username, $password);

// Kondisi jika gagal terkoneksi ke host.
if (!$db_conn) {
    die("Gagal terkoneksi ke host: $host<br>");
    return false;
}

// Jika berhasil terkoneksi ke host, maka lanjutkan koneksi dengan memilih database [$db_name]
$db_select = mysqli_select_db($db_conn, $db_name);

// Kondisi jika gagal terkoneksi ke database.
if (!$db_select) {
    die("Gagal terkoneksi ke database: $db_name<br>");
    return false;
}

/*
Silahkan lanjutkan pada file login.php.😄
*/