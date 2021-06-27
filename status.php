<?php
// Jangan ubah-ubah bagian sini ya gan.😄
session_start();
if (!isset($_SESSION['status_login'])) {
    header("Location: ../login");
    return false;
} else if (!$_SESSION['status_login']) {
    header("Location: ../login");
    return false;
}
?>