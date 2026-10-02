<?php

require_once __DIR__ . '/bootstrap.php';

require_once __DIR__ . '/functions.php';

$products = require __DIR__ . '/data/products.php';

require_once __DIR__ . '/components/header.php';

$message = pullFlash();

if ($message !== null) {

    echo '<div class="flash">💗 '
        . e($message)
        . '</div>';
}

$total = 0;

?>

<div class="hero">

    <div>

        <div class="hero-icon">
            🛒
        </div>

        <h1>
            Keranjang Belanja
        </h1>

        <p>
            Produk pilihan kamu ada di sini ♥
        </p>

    </div>

</div>


<?php if (empty($_SESSION['cart'])) { ?>

    <div class="cart-item">

        <h3>
            🥺 Keranjang masih kosong
        </h3>

        <p>
            Yuk pilih produk favorit kamu terlebih dahulu.
        </p>

        <a href="index.php">
            ← Kembali ke Produk
        </a>

    </div>

<?php } else { ?>


    <?php foreach ($_SESSION['cart'] as $id => $jumlah) { ?>

        <?php if (isset($products[$id])) { ?>

            <?php

            $product = $products[$id];

            $subtotal =
                $product['harga'] * $jumlah;

            $total += $subtotal;

            ?>


            <div class="cart-item">

                <h3>

                    <?php
                    echo e($product['nama']);
                    ?>

                </h3>


                <p>

                    Harga:

                    <strong>
                        Rp
                        <?php
                        echo number_format(
                            $product['harga'],
                            0,
                            ',',
                            '.'
                        );
                        ?>
                    </strong>

                </p>


                <p>

                    Jumlah:

                    <strong>
                        <?php
                        echo (int)$jumlah;
                        ?>
                    </strong>

                </p>


                <p>

                    Subtotal:

                    <strong>

                        Rp
                        <?php
                        echo number_format(
                            $subtotal,
                            0,
                            ',',
                            '.'
                        );
                        ?>

                    </strong>

                </p>


                <form
                    action="actions.php"
                    method="POST"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="remove"
                    >

                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo (int)$id; ?>"
                    >

                    <button
                        type="submit"
                        class="btn-delete"
                    >

                        🗑️ Hapus Produk

                    </button>

                </form>

            </div>


        <?php } ?>

    <?php } ?>


    <div class="cart-total">

        <h2>

            💗 Total Belanja:

            Rp
            <?php
            echo number_format(
                $total,
                0,
                ',',
                '.'
            );
            ?>

        </h2>

    </div>


    <br>


    <form
        action="actions.php"
        method="POST"
    >

        <input
            type="hidden"
            name="action"
            value="clear"
        >

        <button
            type="submit"
            class="btn-clear"
        >

            🗑️ Kosongkan Keranjang

        </button>

    </form>


<?php } ?>


<br><br>


<a href="index.php">

    ← Kembali ke Produk

</a>


<?php

require_once __DIR__ . '/components/footer.php';

?>