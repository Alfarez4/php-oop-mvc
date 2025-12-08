<?php 
if( !session_id() ) session_start();

// Perhatikan besar/kecil huruf sesuai screenshot file Anda:

require_once '../app/core/App.php';        // Huruf 'A' besar
require_once '../app/core/Controller.php'; // Huruf 'C' besar
require_once '../app/core/Database.php';   // Huruf 'D' besar
require_once '../app/core/Flasher.php';    // Huruf 'F' besar

// Definisikan BASEURL di sini jika belum ada file config
if (!defined('BASEURL')) {
    // Ganti URL ini sesuai folder project Anda
    define('BASEURL', 'http://localhost/php-oop-mvc/Pertemuan-3/Modul-11/public');
}

// Jalankan Aplikasi
$app = new App;