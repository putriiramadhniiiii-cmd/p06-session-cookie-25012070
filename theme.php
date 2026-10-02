<?php

$allowedThemes = array('light', 'dark');

/* Ambil tema dari cookie */
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
} else {
    $theme = 'light';
}

/* Kalau cookie tidak valid, kembali ke light */
if (!in_array($theme, $allowedThemes)) {
    $theme = 'light';
}

/* Jika tombol tema ditekan */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['theme'])) {

    $candidate = $_POST['theme'];

    /* Hanya izinkan light atau dark */
    if (in_array($candidate, $allowedThemes)) {

        /*
         * Simpan cookie selama 30 hari
         */
        setcookie(
            'theme',
            $candidate,
            time() + (60 * 60 * 24 * 30),
            '/',
            '',
            false,
            true
        );

        /*
         * Refresh halaman agar cookie langsung terbaca
         */
        header('Location: index.php');
        exit;
    }
}
?>