<?php

require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$action = isset($_POST['action']) ? $_POST['action'] : '';

$id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

if ($action === 'add' && isset($products[$id])) {

    if (!isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] = 0;
    }

    $_SESSION['cart'][$id]++;

    setFlash('Produk ditambahkan ke keranjang.');

} elseif ($action === 'remove'
    && isset($_SESSION['cart'][$id])) {

    unset($_SESSION['cart'][$id]);

    setFlash('Produk dihapus dari keranjang.');

} elseif ($action === 'clear') {

    $_SESSION['cart'] = array();

    setFlash('Keranjang dikosongkan.');

} else {

    setFlash('Permintaan tidak valid.');
}

if ($action === 'add') {
    header('Location: index.php');
} else {
    header('Location: cart.php');
}

exit;