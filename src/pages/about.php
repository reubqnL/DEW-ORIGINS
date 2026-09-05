<?php
$pageTitle = 'DEW ORIGINS | About';
$pageCSS = 'about.css';

include '../components/header.php';
?>

<!-- HERO SECTION -->

    <main>
        <section>
            <div class="heroAboutSection">
                <div class="questionMarkAbout">
                    <img src="../assets/questionMark.png" alt="An image of a question mark">
                </div>
                <div class="heroAboutText">
                    <h1>About <i>Us</i></h1>
                    <div class="tagLineAbout">
                        <h3>Everything you need to know...</h3>
                    </div>
                    <button id="menuBtn">Our Menu</button>
                </div>
                <div class="coffeeFarming">
                    <img src="../assets/coffeeFarming.jpg" alt="An image of people's hands reaching into  harvested coffee beans">
                </div>
            </div>
            <hr class="lineBreak">
        </section>

        <!-- THE PROBLEM -->

        <section class="theProblem">
            <h2 class="problemHeader">The Problem</h2>
            <div class="problemContent">
                <div class="problemParagraphs">
                    <p>Most coffee shop sites show the address, opening hours, and menu, but do little to
                        help during busy periods. Generic ordering systems make transactions easier, but
                        often take away the details people care about, such as where your coffee comes
                        from, how the beans were roasted, and what makes your shop different. This website
                        does more than act as a checkout page.</p>
                    <p>The morning rush is one of the biggest problems. Customers face queues, unclear
                        wait times, and no simple way to schedule an order before arriving. A stronger
                        website gives customers the option to order ahead, select a collection time, and
                        track their order.</p>
                    <p>The menu also needs to provide better information. Real coffee drinkers care about
                        roast dates, origins, altitude and processing methods. Standard menus often leave
                        these details out. Customisation also creates problems when online forms become
                        confusing.</p>
                </div>
                <div class="problemImages">
                    <img src="../assets/problemOne.jpg"
                         alt="Image of a cosy coffee shop">
                    <img src="../assets/problemTwo.jpg"
                         alt="Image of a cosy coffee shop">
                </div>
            </div>
        </section>

        <hr class="lineBreakTwo">

        <!-- THE SOLUTION -->

        <section class="theSolution">
            <h2 class="solutionHeader">DEW ORIGINS: The Solution</h2>
            <div class="solutionContent">
                <div class="solutionImages">
                    <img src="../assets/theSolution.jpg" alt="Image of a waitress and customer">
                    <img src="../assets/solutionTwo.jpeg" alt="Group of people in a coffee shop">
                </div>
                <div class="solutionParagraphs">
                    <p>DEW ORIGINS is designed to remake the online coffee shop experience by bringing
                        convenience and details together in one platform. This platform combines real-time
                        pre-ordering with information about where each coffee comes from. Customers can
                        schedule their drinks in advance, helping them avoid long queues during busy
                        periods, while also learning more about the coffee they are ordering and the story
                        behind it.</p>
                    <p>A key part of the platform is its interactive coffee tracing feature, which gives
                        customers a look at where their coffee came from. Users can explore information
                        such as the country of origin, farm details, elevation, processing method, and
                        flavour profile. Soon to come, DEW ORIGINS will also include a visual custom drink
                        builder, allowing customers to easily adjust their order with different milk
                        options, shot counts, and temperature preferences. This will make the ordering
                        process more personal while keeping the experience simple and engaging.</p>
                    <p>To make the entire process clear and convenient, DEW ORIGINS includes a live order
                        status tracker that provides real-time updates as an order moves from Received, to
                        In Preparation, and finally to Ready for Pickup. Soon this platform will also be
                        designed with mobile use in mind, with a fully responsive interface that works
                        smoothly across devices. By combining practical ordering tools with a better
                        understanding of coffee origins, DEW ORIGINS creates a more connected and
                        informative experience for modern coffee shop customers.</p>
                </div>
            </div>
        </section>
        <hr class="lineBreakPage">

    </main>

<?php
include '../components/footer.php';
?>