<!DOCTYPE html>
<html lang="en-GB">

<!-- SEO & TITLE -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DEW ORIGINS | Home</title>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.png">
    <meta name="author" content="Reuben Cheetham">
    <meta name="description" content="A coffee shop that promotes transparency, drink customisation and putting you at the front of the queue">
    <meta name="keywords" content="coffee, shop, local, business, cheap, relax, cosy, budget, family, warm, summer, winter, comfort, dew, costa, starbucks, offer">
    <meta name="topic" content="Coffee Shop">
    <meta name="summary" content="A small local coffee shop which offers speedy and cheap ordering on this web application">
</head>

<!-- NAVIGATION BAR -->

<body>
<div class="pageWrap">
<header class="navBar">
    <a href="../pages/index.php" class="logoLink">
        <h2 class="logo">DEW ORIGINS</h2>
        <img src="../assets/favicon.png" alt="Coffee Bean logo" class="imgLogo">
    </a>
    <ul class="navLinks">
        <li><a href="../pages/index.php">Home</a></li>
        <li><a href="../pages/about.php">About</a></li>
        <li><a href="../pages/origins.php">Origins</a></li>
        <li><a href="../pages/order.php">Order</a></li>
    </ul>
</header>

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

<!-- FOOTER -->

<footer class="siteFooter">
    <div class="footerContent">

        <!-- COLUMN 1: OPENING TIMES -->
        <div class="openingTimes">
            <h3>Opening Times</h3>
            <p class="footerItem"><strong>Monday</strong> &bull; <time>9am - 5pm</time></p>
            <p class="footerItem"><strong>Tuesday</strong> &bull; <time>9am - 5pm</time></p>
            <p class="footerItem"><strong>Wednesday</strong> &bull; <time>9am - 5pm</time></p>
            <p class="footerItem"><strong>Thursday</strong> &bull; <time>9am - 5pm</time></p>
            <p class="footerItem"><strong>Friday</strong> &bull; <time>9am - 5pm</time></p>
        </div>

        <!-- COLUMN 2: CONTACT DETAILS -->
        <div class="contactDetails">
            <h3>Contact Details</h3>
            <p class="footerItem">Find us at <strong>21 Savage Road</strong></p>
            <p class="footerItem">
                <a href="mailto:example@gmail.com">example@gmail.com</a> &bull;
                <a href="tel:07000000000">07??? ??? ???</a>
            </p>
        </div>

        <!-- COLUMN 3: LEGAL -->
        <div class="legalDetails">
            <h3>Legal</h3>
            <p class="footerItem"><a href="../pages/cookies.php">Cookie Policy</a></p>
            <p class="footerItem"><a href="../pages/privacy.php">Privacy Policy</a></p>
        </div>

        <!-- BOTTOM ROW: COPYRIGHT -->
        <div class="footerBottom">
            <p class="footerCopyright">&copy; Copyright DEW ORIGINS 2026. External images belong to their
                respective owners.</p>
        </div>
    </div>
</footer>
</div>
</body>
<script src="../scripts/scroll.js"></script>
<script src="../scripts/buttons.js"></script>
</html>