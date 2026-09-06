<?php
$pageTitle = 'DEW ORIGINS | Menu';
$pageCSS = 'menu.css';

include '../components/header.php';
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
                        <div class="circleBorder">
                            <img class="menu" src="../assets/menu.png" alt="An icon of a menu">
                        </div>
                        <h2>Our Menu</h2>
                        <p>View our world-famous drinks</p>
                    </div>
                </div>
                <div class="column">
                    <div class="card" id="originsCard">
                        <div class="circleBorder">
                            <img src="../assets/globe.png" alt="An icon of the Earth">
                        </div>
                        <h2>Coffee Origins</h2>
                        <p>Ethically sourced coffee beans</p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <a href="#top">
                            <div class="circleBorder">
                                <img src="../assets/parcel.png" alt="An icon of a package">
                            </div>
                            <h2>Track Order</h2>
                            <p>Track your delivery / pickup order</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php
include '../components/footer.php';
?>

<!--
To add:

Create a PHP array and append a value to it if a user selects add to basket, unset() if removed from basket
When user adds item to basket, href to order page with URL query: ../pages/order.php?item=hotChocolate
Store as a variable, example: $basket = ['hotChocolate']
Link prices to add a dynamic price changer in order page
-->
