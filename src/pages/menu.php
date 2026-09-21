<?php
$pageTitle = 'DEW ORIGINS | Menu';
$pageCSS = 'menu.css';

include __DIR__ . '/../components/header.php';
?>

<!-- HERO SECTION -->

    <main>
        <section>
            <div class="heroMenuSection">
                <div class="coffeeCupMenu">
                    <img src="../assets/largeCoffeeCup.png" alt="An image of a coffee cup">
                </div>
                <div class="heroMenuText">
                    <h1>Browse our menu</h1>
                    <div class="tagLineMenu">
                        <h3>Fresh ingredients, unforgettable taste.</h3>
                    </div>
                    <button id="preOrderBtn" class="preOrderBtn">Pre-order Now</button>
                </div>
                <div class="coffeeCups">
                    <img src="../assets/coffeeCups.jpg" alt="An image of two coffee cups">
                </div>
        </section>

        <!-- CARD ITEMS -->

        <section class="cardGrid">
            <div class="row">
                <div class="column">
                    <div class="card">
                            <img class="espresso" src="../assets/menu/espresso.jpeg" alt="An image of an espresso">
                        <h2>Espresso</h2>
                        <p class="tagLineCard">Pure, concentrated energy in a bold, rich shot.</p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=espresso">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                            <img src="../assets/menu/cappuccino.jpg" alt="An image of a cappuccino">
                        <h2>Cappuccino</h2>
                        <p class="tagLineCard">Perfectly balanced espresso topped with velvety steamed milk and airy foam.</p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=cappuccino">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/menu/hotChoc.jpg" alt="An image of a hot chocolate">
                        <h2>Hot Chocolate</h2>
                        <p class="tagLineCard">A rich, comforting classic crafted with decadent cocoa warmth.</p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=hotChocolate">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="../assets/menu/latte.jpeg" alt="An image of a latte">
                        <h2>Latte</h2>
                        <p class="tagLineCard">Smooth espresso poured over silky, micro-steamed milk for a gentle, balanced flavor.</p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=latte">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/menu/whiteHotChoc.jpg" alt="An image of a white hot chocolate">
                        <h2>White Hot Chocolate</h2>
                        <p class="tagLineCard">Pure chemicals but <strong>DELICIOUS</strong></p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=whiteHotChocolate">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <img src="../assets/coffeeCupTwo.webp" alt="An image of two coffee cups">
                        <h2>La Mejor</h2>
                        <p class="tagLineCard">Our signature house drink - true to its name, the best craft blend in every cup.</p>
                        <hr class="cardLB">
                        <a href="../pages/order.php?item=laMejor">
                            <p><strong>Click to add / remove from basket</strong></p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
include __DIR__ . '/../components/footer.php';
?>