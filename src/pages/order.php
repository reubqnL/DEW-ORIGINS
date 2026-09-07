<?php
$pageTitle = 'DEW ORIGINS | Order';
$pageCSS = 'order.css';

include '../components/header.php';
?>

<!-- HERO SECTION -->

    <main>
        <section>
            <div class="heroOrderSection">
                <div class="shoppingBasketOrder">
                    <img src="../assets/shoppingBasket.png" alt="An icon of a shopping basket">
                </div>
                <div class="heroOrderText">
                    <h1>Coffee made for<br><i>you</i></h1>
                    <button id="menuBtn" class="menuBtn">Our Menu</button>

                    <!-- BASKET -->

                    <div class="basketContainer">
                        <div class="basket">
                            <h2>Basket</h2>
                            <hr class="cardLB">
                            <?php
                            $basketItems = [];
                            if (!empty($_GET['item'])) {
                                $basketItems = [$_GET['item']];
                                foreach ($basketItems as $item) {
                                    echo "<div class='basketItem'>1x $item</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
    </main>
<?php
include '../components/footer.php';
?>