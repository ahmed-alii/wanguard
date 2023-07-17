<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id'])){
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}
include_once "serverside/functions.php";
$func=new Functions();
$events=$func->getAllEvents();

?>
    <section class="bg-black hero-section">
        <div class="container py-5">
            <div class="img-wrapper text-center">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="assets/images/logo2.png" class="img-fluid hero-logo">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 my-5">
                        <h1 class="display-5 fw-bold text-primary text-uppercase">The VANGUARD Wealth Builders</h1>
                        <span class="line-20"></span>
                            <h4 class="text-white fw-light">Our mission is to build the largest financial services company
                                with 250,000 licensed agents, create 1,000 millionaires, and help 10 million families
                                pursue financial independence.</h4>
                    </div>
                </div>
                <video width="620" height="360" controls class="mw-100">
                    <source src="https://www.youtube.com/watch?v=O3DPVlynUM0&ab_channel=GeoNews"
                            type="video/mp4">
                </video>
            </div>
        </div>
    </section>


    <section class="section3-wrapper py-5">
        <div class="container">
            <div class="row px-5">
                <div class="col-lg-7 col-12 py-3">
                    <div class="card h-100 bg-light calender-wrapper">
                        <div class="card-header bg-secondary text-center">
                            <h5 class="text-black">
<!--                                <i class="text-dark fa fa-calendar px-3"></i>-->
                                The Vanguard Wealth Builders Calendar</h5>
                        </div>
                        <div class="card-body table-container" style="overflow-y: auto;">
                            <div id="myTable">
                            <?php
                            foreach ($events as $event){
                                ?>
                                <a target="" class="text-decoration-none " href="<?=$event['event_link']?>"><p class="text-primary fw-bold p-0 m-0"><?=$event['name']?></p></a>
                                <p class="m-0 py-1 calender-location"><i class="fa fa-map-marker"></i> <?=$event['location']?></p>
                                <p class="m-0 py-1 calender-description"><?=$event['description']?></p>
                                <a class="m-0 py-1 text-decoration-none calender-description" href="<?=$event['event_link']?>"><?=$event['event_link']?></a>
                                <p class="m-0 py-1 calender-time"><i class="fa fa-clock-o"></i> <?=date('F d Y',strtotime($event['date'])) ." ".date('H:i A',strtotime($event['time']))?></p>
                                <hr>
                                <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="wrapper3">
                        <h3 class="fw-bold">
                            IN BUSINESS FOR YOURSELF, BUT NEVER BY YOURSELF.
                        </h3>
                        <p class="py-4">Trainings are endless and ongoing. There's a training for everything. Want to
                            learn
                            about a
                            product?
                            There's a training for that. Need to learn about our system? There's a training for that.
                            Looking to
                            improve your leadership skills? There's a training for that. You will not fail here for lack
                            of
                            resources. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" height="25px" width="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="contacts-44"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path
                                            d="M9,12c2.757,0,5-2.243,5-5V5c0-2.757-2.243-5-5-5S4,2.243,4,5v2C4,9.757,6.243,12,9,12z"></path>
                                    <path
                                            d="M15.423,15.145C14.042,14.622,11.806,14,9,14s-5.042,0.622-6.424,1.146C1.035,15.729,0,17.233,0,18.886V24 h18v-5.114C18,17.233,16.965,15.729,15.423,15.145z"></path>
                                    <rect data-color="color-2" x="16" y="3" width="8" height="2"></rect>
                                    <rect data-color="color-2" x="16" y="8" width="8" height="2"></rect>
                                    <rect data-color="color-2" x="19" y="13" width="5"
                                          height="2"></rect>
                                </g></svg>
                            AGENT TRAINING
                        </h5>
                        <p class="py-2">Weekly trainings available covering the A's to Z's of our business and
                            system. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" width="25px" height="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="hotel"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path data-color="color-2"
                                          d="M22,24h1c0.6,0,1-0.4,1-1v-9c0-0.6-0.4-1-1-1h-1v10V24z"></path>
                                    <path data-color="color-2"
                                          d="M2,23V13H1c-0.6,0-1,0.4-1,1v9c0,0.6,0.4,1,1,1h1V23z"></path>
                                    <path
                                            d="M19,0H5C4.4,0,4,0.4,4,1v22c0,0.6,0.4,1,1,1h6v-4h2v4h6c0.6,0,1-0.4,1-1V1C20,0.4,19.6,0,19,0z M10,17H7v-2 h3V17z M10,13H7v-2h3V13z M10,9H7V7h3V9z M10,5H7V3h3V5z M17,17h-3v-2h3V17z M17,13h-3v-2h3V13z M17,9h-3V7h3V9z M17,5h-3V3h3V5z"></path>
                                </g></svg>
                            COMPANY OVERVIEWS
                        </h5>
                        <p class="py-2">These type of events, wether on Zoom or in person are designed to help you
                            market
                            our products, services and opportunity. These are great resources to leverage a group of
                            people
                            who want to learn more about who we are and what we do. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" width="25px" height="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="trend-up"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path
                                            d="M23,6H13l4.503,4.503l-4.541,5.045l-5.255-5.255c-0.391-0.391-1.023-0.391-1.414,0l-5,5 c-0.391,0.391-0.391,1.023,0,1.414s1.023,0.391,1.414,0L7,12.414l5.293,5.293C12.48,17.895,12.735,18,13,18 c0.286,0,0.555-0.122,0.743-0.331l5.175-5.75L23,16V6z"></path>
                                </g></svg>
                            PRODUCT TRAINING
                        </h5>
                        <p class="py-2">Learn the ins and outs of the products and services we provide. Every provider
                            and
                            company we represent has continuous and ongoing training. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include_once "includes/footer.php" ?>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var table = document.getElementById('myTable');
        var container = document.querySelector('.table-container');

        // Set the desired scroll speed (in pixels per second)
        var scrollSpeed = 50;

        // Set the scroll direction ('up' or 'down')
        var scrollDirection = 'down';

        var scrollInterval;

        function startScroll() {
            scrollInterval = setInterval(function() {
                var scrollAmount = scrollSpeed / 60; // Divide by 60 to get per-frame scroll amount

                if (scrollDirection === 'up') {
                    container.scrollTop -= scrollAmount;
                } else {
                    container.scrollTop += scrollAmount;
                }

                // Check if we have reached the top or bottom of the container
                if (scrollDirection === 'up' && container.scrollTop <= 0) {
                    container.scrollTop = container.scrollHeight;
                } else if (scrollDirection === 'down' && container.scrollTop + container.clientHeight >= container.scrollHeight) {
                    container.scrollTop = 0;
                }
            }, 1000 / 60); // Run the scroll every frame (60 frames per second)
        }

        // Start the initial scroll
        startScroll();

        // Stop the scroll when the user hovers over the container
        container.addEventListener('mouseover', function() {
            clearInterval(scrollInterval);
        });

        // Resume the scroll when the user moves the mouse out of the container
        container.addEventListener('mouseout', function() {
            startScroll();
        });
    });


</script>

