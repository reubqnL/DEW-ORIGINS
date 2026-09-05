<?php
$pageTitle = 'DEW ORIGINS | Home';
$pageCSS = 'index.css';

include '../components/header.php';
?>

<!-- HERO SECTION -->

<main>
    <section>
        <div class="heroSection">
            <div class="coffeeCupHome">
                <img src="../assets/largeMilkshake.png" alt="An image of a coffee cup">
            </div>
            <div class="heroText">
                <h1>Order Coffee<br>Ahead</h1>
                <div class="tagLine">
                    <h3>Make it better, do it faster</h3>
                </div>
                <button id="preOrderBtn" class="preOrder">Pre-order Now</button>
            </div>

            <!-- ORDER STATUS -->

            <section class="orderStatusContainer">
                <div class="timeline">
                    <div class="circle1">
                        <div class="step"></div>
                    </div>
                    <div class="circle2">
                        <div class="step"></div>
                    </div>
                    <div class="circle3">
                        <div class="step"></div>
                    </div>
                    <div class="circle4"></div>
                </div>
                <div class="orderSection">
                    <h2>Order Status</h2><br>
                    <h3 class="orderPlaced">Order Placed</h3><br>
                    <time class="orderPlacedTime">00:00 AM</time>
                    <h3 class="orderPreparing">Preparing</h3><br>
                    <time class="orderPreparingTime">00:00 AM</time>
                    <h3 class="orderReady">Ready for Pickup</h3><br>
                    <h3 class="orderCollected">Picked Up</h3><br>
                </div>
            </section>
        </div>
    </section>

    <!-- CARD GRID -->

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
                    <div class="circleBorder">
                        <img src="../assets/parcel.png" alt="An icon of a package">
                    </div>
                    <h2>Track Order</h2>
                    <p>Track your delivery / pickup order</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include '../components/footer.php';
?>