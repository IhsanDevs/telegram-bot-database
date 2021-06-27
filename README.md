# Telegram Bot Database Integration
Ini adalah source code bot telegram yang terintegrasi dengan database serta ditambah dengan halaman admin.

## Demo
Dibawah ini adalah pratinjau demo untuk bot serta halaman admin.
![Demo](https://github.com/IhsanDevs/telegram-bot-database/raw/main/demo/demo-001.gif)

Demo bot telegram : @[DemoDb_bot](https://t.me/DemoDb_bot)
Demo admin page : [Demo](https://db-tele-bot-demo.herokuapp.com/)

Auth:

 - Username: **admin**
 - Password: **admin**

## Fitur
Fitur yang ada pada source code ini adalah :

 1. Merekam semua inputan yang diambil dari user bot.
 2. Menghapus data user yang terekam.
 3. Halaman login admin.
 4. Halaman setting webhook.
 5. Source code sudah disertai panduan instalasi.
 
 ## Instalasi
 Silahkan ikuti instruksi dibawah ini untuk tata cara instalasi bot telegram ini :
 
 6. Siapkan database pilihan kamu. Disini saya memakai [Remote MySQL](https://remotemysql.com).
 7. Jika sudah, silahkan buka PHP MyAdmin kamu.
 8. Kemudian import file [db.sql](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/db.sql) yang sudah saya siapkan.
 9. Jika sudah, silahkan buka source code ini di code editor kamu. Disini saya akan memakai vs code. Tidak masalah jika kamu memakai code editor yang lain.
 10. Buka file [db_conn.php](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/db_conn.php).
 11. Edit pada bagian yang sudah [ditandai ini](https://github.com/IhsanDevs/telegram-bot-database/blob/main/db_conn.php#L19).
12. Jika semua langkah diatas sudah dilakukan, silahkan buka file [tele_bot.php](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/tele_bot.php). Kemudian edit pada bagian [token bot](https://github.com/IhsanDevs/telegram-bot-database/blob/main/tele_bot.php#L14) dengan token bot telegram yang kamu miliki.
13. Jika sudah, silahkan upload semua source code yang sudah kamu edit tersebut ke web hosting kamu.
14. Lalu jalankan file [webhook.php](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/webhook.php) di website kamu.
![Preview Webhook Setting](https://github.com/IhsanDevs/telegram-bot-database/raw/main/demo/webhook_php.png)
15. Kemudian isi kolom **Token bot** dengan token bot yang kamu miliki dan isi kolom **URL Webhook** dengan link yang mengarah kehalaman [tele_bot.php](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/tele_bot.php).
16. Jika sudah, silahkan sesuaikan command bot pada halaman [tele_bot.php](https://raw.githubusercontent.com/IhsanDevs/telegram-bot-database/main/tele_bot.php) pada [bagian ini](https://github.com/IhsanDevs/telegram-bot-database/blob/main/tele_bot.php#L44).
17. SELESAI. Tinggal jalankan bot telegram kamu. 😇

## Note

 1. Website yang akan kamu jadikan link webhook harus sudah SSL atau https!.
 2. Jangan mengubah-ubah data yang ada didalam database demo agar yang lain juga dapat belajar.
 3. Dilarang memperjualbelikan source code ini.
## Donate
Donasi Anda sangat memotivasi saya dalam membuat project lainnya. [klik disini](https://trakteer.id/ihsan.devs) untuk berdonasi.
