<?php
$pageTitle = 'DEW ORIGINS | Origins';
$pageCSS = 'origins.css';

include '../components/header.php';
?>

<!-- HERO SECTION -->

    <main>
        <section>
            <div class="heroOriginsSection">
                <div class="originsCoffeeBean">
                    <img src="../assets/favicon.png" alt="An icon of coffee beans">
                </div>
                <div class="heroOriginsText">
                    <h1>Coffee Origins</h1>
                    <div class="tagLineOrigins">
                        <h3>Your <strong>ethically</strong> sourced coffee</h3>
                    </div>
                    <button id="learnMoreBtn" class="learnMore">Learn More</button>
                </div>
                <div class="originsCoffeeCup">
                    <img src="../assets/coffeeCupThree.webp" alt="An image of a cup & coffee beans">
                </div>
            </div>
            <hr class="lineBreak">
        </section>

        <!-- ORIGINS -->

        <section class="theOrigins">
            <h2 class="theOriginsHeader">From the Ethiopian Highlands to Your Cup</h2>
            <div class="theOriginsContent">
                <div class="theOriginsParagraphs">
                    <p>Every morning when we start making drinks, we start with a story that begins
                        thousands of miles away in the birthplace of coffee. We source our beans directly
                        from family farms across the high-altitude regions of Ethiopia. For us, coffee is
                        a collaborative effort between dedicated growers and roasters. That is why we
                        prioritise ethical sourcing above everything else, ensuring our farming partners
                        receive compensation well above fair-trade market rates. These reliable wages
                        directly support local farms, community resources, and sustainable agriculture
                        that keep the soil healthy for generations to come.</p>
                    <p>The unique climate of Ethiopia gives our beans their distinct, tasty flavour
                        profile. Grown in nutrient-rich soil high above sea level, the coffee cherries
                        grow slowly, developing rich natural sugars. When we roast these beans in small
                        batches, it is a clean, vibrant taste that honours the incredible care put into
                        every single harvest.</p>
                </div>
                <div class="theOriginsImages">
                    <img src="../assets/farmers.jpg"
                         alt="Image of a two farmers">
                    <img src="../assets/makingEspresso.jpg"
                         alt="Image of a woman making coffee">
                </div>
            </div>
        </section>

        <hr class="lineBreakTwo">

        <section class="laMejorStory">
            <h2 class="laMejorHeader">The Story Behind La Mejor</h2>
            <div class="laMejorContent">
                <div class="laMejorImages">
                    <img src="../assets/coffeeCupTwo.webp" alt="Image of a two coffee cups">
                </div>
                <div class="laMejorParagraphs">
                    <p>That sourcing forms the foundation of our best-selling signature drink, La Mejor.
                        Named "The Best" for a reason, La Mejor was crafted to show off how our Ethiopian
                        espresso interacts with beautiful, tasty textures. We begin with a double shot of
                        our single-origin Ethiopian espresso, pulled precisely to bring out its bright,
                        fruity undertones.</p>
                    <p> We stir in a touch of house-infused spiced syrup, top it with
                        velvety steamed oat milk, and finish the cup with a light dusting of fresh Mexican
                        cinnamon. The result is a smooth, perfectly balanced drink where the sweetness of
                        the espresso shines through the warm spices.</p>
                    <p>When you order La Mejor at our counter, you are drinking more than just a house
                        special. You are taking part in a transparent chain of respect that stretches
                        from the rich soil of Ethiopia straight to your table.</p>

                </div>
            </div>
        </section>
        <hr class="lineBreakPage">
    </main>

<?php
include '../components/footer.php';
?>