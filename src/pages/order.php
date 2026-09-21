<?php
$pageTitle = 'DEW ORIGINS | Order';
$pageCSS = 'order.css';

include __DIR__ . '/../components/header.php';
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
                            <button id="placeOrderBtn" class="placeOrderBtn">Place Order</button>
                        </div>
                    </div>
        </section>

        <!-- MAP SECTION -->
        <section class="mapContainer">
            <div class="mapText">
                <h2>Pickup location</h2>
                <hr class="cardLB2">
                <p>Pickup location is assigned to your nearest DEW ORIGINS café. To check your order status,
                    please refer to 'Order Status' on the <u><a href="index.php">Home Page</a></u></p>
                <img src="../assets/makingEspresso.jpg" alt="Image of a woman making coffee">
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d42992373.606678054!2d-165.56626881111777!3d-48.876395036986054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDjCsDUyJzM2LjAiUyAxMjPCsDIzJzM2LjAiVw!5e0!3m2!1sen!2suk!4v1788777052130!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="false" loading="eager" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>
        </section>
    </main>
    <script src="../scripts/basket.js"></script>
<?php
include __DIR__ . '/../components/footer.php';
?>