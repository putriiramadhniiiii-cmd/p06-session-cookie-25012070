<?php

require_once __DIR__ . '/bootstrap.php';

require_once __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';

require_once __DIR__ . '/components/header.php';

$message = pullFlash();

if ($message !== null) {
    echo '<div class="flash">💗 ' . e($message) . '</div>';
}

?>

<!-- =========================
     HERO
========================= -->

<div class="hero">

    <div>

        <div class="hero-icon">
            🛍️
        </div>

        <h1>
            Daftar Produk
        </h1>

        <p>
            Pilih produk favorit kamu dan tambahkan ke keranjang ♡
        </p>

    </div>

    <div class="hero-right">

        Belanja<br>
        Jadi Lebih<br>
        Mudah ♥

    </div>

</div>


<!-- =========================
     CART INFO
========================= -->

<div class="cart-info">

    🛒 Jumlah barang di keranjang:

    <span class="cart-number">

        <?php
        echo cartCount($_SESSION['cart']);
        ?>

    </span>

</div>


<!-- =========================
     PRODUCT
========================= -->

<div class="product-grid">

<?php foreach ($products as $id => $product) { ?>

    <div class="product-card">

        <!-- ICON PRODUK -->

        <div class="product-icon">

            <?php

            if ($id == 1) {
                echo '☕';
            } elseif ($id == 2) {
                echo '🍫';
            } else {
                echo '🍋';
            }

            ?>

        </div>


        <h3>

            <?php
            echo e($product['nama']);
            ?>

        </h3>


        <div class="price">

            Rp
            <?php
            echo number_format(
                $product['harga'],
                0,
                ',',
                '.'
            );
            ?>

        </div>


        <p class="description">

            <?php

            if ($id == 1) {

                echo 'Perpaduan kopi pilihan dengan susu yang lembut dan nikmat.';

            } elseif ($id == 2) {

                echo 'Roti lembut dengan rasa cokelat yang manis dan lezat.';

            } else {

                echo 'Kesegaran teh dengan rasa lemon yang menyegarkan.';

            }

            ?>

        </p>


        <!-- FORM TAMBAH -->

        <form
            action="actions.php"
            method="POST"
        >

            <input
                type="hidden"
                name="action"
                value="add"
            >

            <input
                type="hidden"
                name="id"
                value="<?php echo (int)$id; ?>"
            >

            <button
                type="submit"
                class="btn-pink"
            >

                ⊕ &nbsp; Tambah ke Keranjang

            </button>

        </form>

    </div>

<?php } ?>

</div>


<?php

require_once __DIR__ . '/components/footer.php';

?>