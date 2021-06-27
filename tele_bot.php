<?php
/*
Dibuat oleh : Ihsan Devs
Donate me : https://trakteer.id/ihsan.devs
Contact me : https://t.me/IhsanDevs
About : Ini adalah script sederhana bot telegram untuk menyambungkan database MySQL
        dan bot telegram. Silahkan ubah bagian token.
*/
require "db_conn.php";
$content = file_get_contents("php://input");

$table_users_name = "users_list"; // Nama table untuk list user. Silahkan sesuaikan.

$token = '1817618179:AAHPHmv51lbNCTywp-hbpwk44XAuc4VLtIY'; // Ubah token ini dengan token bot telegram kamu.

$apiLink = "https://api.telegram.org/bot$token/"; 
$update = json_decode($content, true);
if(!@$update["message"]) $val = $update['callback_query'];
else $val = $update;
$chat_id = $val['message']['chat']['id'];
$text = $val['message']['text'];
$update_id = $val['update_id'];
$sender = $val['message']['from'];
$first_name = $val['message']['from']['first_name'];
$username = $val['message']['from']['username'];
$date = date("Y-m-d H:i:s", $val['date']);

// Memasukkan data user ke database. Bagian ini tidak perlu diubah.
$tambah_data = mysqli_query($db_conn, "INSERT INTO `$table_users_name` (`id`, `user_id`, `user`, `username`, `text_message`, `date`) VALUES (NULL, '$chat_id', '$first_name', '$username', '$text', '$date')");
// Akhir tambah data.

/*
Check apakah data berhasil terkirim ke database.
Silahkan di comment jika tidak diperlukan lagi.
*/
if ($tambah_data) {
    $hasil_db = "Data berhasil terkirim ke database";
} else {
    $hasil_db = "Data gagal terkirim ke database";
}
file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=$hasil_db");
// End check

// Untuk command, Silahkkan menyesuaikan sendiri.
switch ($text) {
    case '/start':
        file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=Halo. Saya bot yang terintegrasi dengan database. Segala aktifitas kamu pada bot ini akan terekam. 😄");
        break;
    case '/donate':
        file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=klik link berikut untuk berdonasi. 😄https://trakteer.id/ihsan.devs");
        break;
    case '/about':
        file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=Ini hanyalah bot untuk percobaan bot yang terintegrasi dengan database MySQL. Kamu dapat melihat source code lengkapnya di: https://github.com/IhsanDevs");
        break;
    case '/version':
        file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=Versi bot saat ini: 1.0.0");
        break;
    default:
        file_get_contents($apiLink . "sendMessage?chat_id=$chat_id&text=Text yang kamu masukkan adalah $text");
        break;
}