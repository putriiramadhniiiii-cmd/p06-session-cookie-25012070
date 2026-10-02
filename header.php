<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toko Kita ♥</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #fff7fb;
            color: #5a1745;
        }

        /* =========================
           HEADER
        ========================= */

        .top-header {
            background: linear-gradient(
                135deg,
                #ffb6d9,
                #ffd9eb
            );

            padding: 20px 7%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            box-shadow: 0 3px 15px rgba(220, 60, 130, 0.15);
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            color: #d81b75;
        }

        .logo span {
            color: #ff4f9a;
        }

        .nav-menu {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: #b41463;
            font-weight: bold;

            padding: 12px 20px;

            border-radius: 25px;

            transition: 0.3s;
        }

        .nav-menu a:hover {
            background: #ff4f9a;
            color: white;
        }

        .cart-nav {
            background: #ff4f9a;
            color: white !important;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 90%;
            max-width: 1200px;

            margin: 35px auto;

            min-height: 600px;
        }

        /* =========================
           JUDUL
        ========================= */

        .hero {
            background: linear-gradient(
                135deg,
                #ffe1ef,
                #ffd0e6
            );

            padding: 35px;

            border-radius: 25px;

            margin-bottom: 25px;

            box-shadow: 0 5px 20px rgba(225, 65, 140, 0.12);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hero-icon {
            font-size: 65px;
        }

        .hero h1 {
            margin: 0 0 10px;

            font-size: 38px;

            color: #d4146d;
        }

        .hero p {
            margin: 0;

            font-size: 17px;

            color: #8e426d;
        }

        .hero-right {
            font-size: 24px;

            font-weight: bold;

            color: #e83d8c;

            text-align: center;
        }

        /* =========================
           FLASH MESSAGE
        ========================= */

        .flash {
            background: #ffe1ef;

            border-left: 6px solid #ff4f9a;

            color: #a4135d;

            padding: 15px 20px;

            border-radius: 10px;

            margin-bottom: 25px;

            font-weight: bold;
        }

        /* =========================
           CART INFO
        ========================= */

        .cart-info {
            background: #ffe6f1;

            border: 1px solid #ffc1dd;

            padding: 18px 25px;

            border-radius: 18px;

            margin-bottom: 25px;

            font-size: 18px;

            font-weight: bold;

            color: #a4145e;
        }

        .cart-number {
            display: inline-block;

            background: #ff4f9a;

            color: white;

            padding: 7px 13px;

            border-radius: 50px;

            margin-left: 8px;
        }

        /* =========================
           PRODUK
        ========================= */

        .product-grid {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }

        .product-card {
            background: white;

            border: 2px solid #ffd5e7;

            border-radius: 22px;

            padding: 22px;

            box-shadow: 0 8px 25px rgba(220, 60, 130, 0.10);

            transition: 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);

            box-shadow: 0 12px 30px rgba(220, 60, 130, 0.18);
        }

        .product-icon {
            width: 100%;

            height: 170px;

            border-radius: 18px;

            background: linear-gradient(
                135deg,
                #ffe0ed,
                #ffc4dd
            );

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 75px;

            margin-bottom: 18px;
        }

        .product-card h3 {
            font-size: 23px;

            margin: 8px 0;

            color: #8f1457;
        }

        .price {
            display: inline-block;

            background: #ffe1ee;

            color: #e52b80;

            font-size: 19px;

            font-weight: bold;

            padding: 8px 13px;

            border-radius: 12px;

            margin: 8px 0 15px;
        }

        .description {
            color: #8b7181;

            line-height: 1.6;

            min-height: 70px;
        }

        /* =========================
           BUTTON
        ========================= */

        .btn-pink {
            width: 100%;

            border: none;

            background: linear-gradient(
                135deg,
                #ff4f9a,
                #ed2f7c
            );

            color: white;

            padding: 13px;

            border-radius: 14px;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }

        .btn-pink:hover {
            transform: scale(1.03);

            box-shadow: 0 5px 15px rgba(237, 47, 124, 0.3);
        }

        /* =========================
           CART
        ========================= */

        .cart-item {
            background: white;

            border: 2px solid #ffd5e7;

            padding: 20px;

            margin-bottom: 15px;

            border-radius: 18px;

            box-shadow: 0 5px 15px rgba(220, 60, 130, 0.08);
        }

        .cart-item h3 {
            color: #a4145e;

            margin-top: 0;
        }

        .cart-total {
            background: #ffe1ef;

            padding: 20px;

            border-radius: 18px;

            margin-top: 25px;

            color: #a4145e;
        }

        .cart-total h2 {
            margin: 0;
        }

        .btn-delete {
            background: #ff6b9f;

            color: white;

            border: none;

            padding: 10px 18px;

            border-radius: 10px;

            cursor: pointer;
        }

        .btn-delete:hover {
            background: #e83d7c;
        }

        .btn-clear {
            background: #d81b60;

            color: white;

            border: none;

            padding: 12px 20px;

            border-radius: 12px;

            cursor: pointer;

            font-weight: bold;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 60px;

            background: linear-gradient(
                135deg,
                #ffc5df,
                #ffddeb
            );

            padding: 30px;

            text-align: center;

            color: #9d356d;

            border-radius: 30px 30px 0 0;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 800px) {

            .product-grid {
                grid-template-columns: 1fr;
            }

            .top-header {
                flex-direction: column;

                gap: 15px;
            }

            .hero {
                flex-direction: column;

                text-align: center;

                gap: 20px;
            }

        }

    </style>

</head>

<body>

<header class="top-header">

    <div class="logo">
        🛒 Toko Kita <span>♥</span>
    </div>

    <nav class="nav-menu">

        <a href="index.php">
            🏠 Produk
        </a>

        <a href="cart.php" class="cart-nav">
            🛒 Keranjang
        </a>

    </nav>

</header>

<div class="container">