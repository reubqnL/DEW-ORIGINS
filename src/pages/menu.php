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
                    <button id="preOrderBtn" class="preOrderBtn">Pre-order Now</button>
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
