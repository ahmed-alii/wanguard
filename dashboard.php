<?php
include_once "includes/header.php";
include_once "serverside/functions.php";

if (!isset($_SESSION['user_id'])){
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}

$func = new Functions();
$recruite_users = $func->getAllNewRecruite_count();
$client_users = $func->getAllFamilyClient_count();
$dashboard_stats=$func->getDashboardStats();
$one_threes=$func->getAllOneThrees();
$all_new_clients=$func->getAllClients();

?>


<section class="bg-black" id="section1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  text-center">
                <div class="py-5">
                    <img src="assets/images/logo3.png" class="img-fluid">
                </div>
                <div class="py-3">
                    <h1 class="py-3">AGENCY DASHBOARD</h1>
                    <!--                    <p>CHALLENGES FACING AMERICANS TODAY</p>-->
                </div>
                <div class="map pb-5">
                    <div class="map-item">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"
                             class="brz-icon-svg align-[initial]"
                             data-type="glyph" data-name="circle-down-40"><g class="nc-icon-wrapper">
                                <path fill="inherit"
                                      d="M24,12c0-6.617-5.383-12-12-12S0,5.383,0,12s5.383,12,12,12S24,18.617,24,12z M6.586,10L8,8.586l4,4l4-4 L17.414,10L12,15.414L6.586,10z"></path>
                            </g></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
<!--    <path fill="#000000" fill-opacity="1" d="M0,288L1440,160L1440,0L0,0Z"></path>-->
<!--</svg>-->
<div class="custom-shape-divider-top-1692952036">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
<section id="section2" class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-1">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"> <?= count($recruite_users) ?> </span></p>
                    <span class="fs-2 fw-bold">THE RECRUITER NAME</span>
                    <p class="py-2">Agency Expansion for the current month! Our goal is always a minimum of 20</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-2">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span></p>
                    <span class="fs-2 fw-bold">FAMILIES HELPED</span>
                    <p class="py-2">Total number of families we have helped on the path to financial freedom</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-3">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span></p>
                    <span class="fs-2 fw-bold">TOTAL SAVINGS</span>
                    <p class="py-2">Total Savings for the current month</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-4">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count"><?=$dashboard_stats[0]['lic']?></span> %</p>
                    <span class="fs-2 fw-bold">LIC</span>
                    <p class="py-2">Number of licensed agents in Vanguard</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-5">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><?=$dashboard_stats[0]['net_lic']?></p>
                    <span class="fs-2 fw-bold">NET LIC.</span>
                    <p class="py-2">Current number of agents who earned $1000</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-6">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><?=$dashboard_stats[0]['one_300']?></p>
                    <span class="fs-2 fw-bold">1-$300</span>
                    <p class="py-2">Key metric in our business that drives activity & profitability!</p>
                </div>
            </div>
        </div>
    </div>

</section>


<!--Modal-1 -->
<div class="modal fade" id="modal-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($recruite_users as $recruite_user) {
                    ?>
                    <tr>
                        <th scope="row"><?= $recruite_user['id'] ?></th>


                            <td><?= $recruite_user['f_name'] ?></td>


                    </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Modal-2 -->
<div class="modal fade" id="modal-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Agent</th>
                        <th scope="col">Writing Agent</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($all_new_clients as $all_new_client){
                        ?>
                        <tr>
                            <td><?= $all_new_client['f_name'] ?></td>
                            <td><?= $all_new_client['writing_agent'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--Modal-3 -->
<div class="modal fade" id="modal-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Monthly Saving</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($all_new_clients as $all_new_client){
                        ?>
                        <tr>
                            <td><?= $all_new_client['f_name'] ?></td>
                            <td>$<?= $all_new_client['monthly_saving'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!--Modal-4 -->
<!--<div class="modal fade" id="modal-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
<!--     aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-dialog-centered modal-md">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th scope="col">#</th>-->
<!--                        <th scope="col">Name</th>-->
<!--                        <th scope="col">Users</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <th scope="row">1</th>-->
<!--                        <td>Mark</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <th scope="row">2</th>-->
<!--                        <td>Jacob</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!---->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <th scope="row">3</th>-->
<!--                        <td>Larry the Bird</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!---->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--Modal-5 -->
<!--<div class="modal fade" id="modal-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
<!--     aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--    <div class="modal-dialog modal-dialog-centered modal-md">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <table class="table">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th scope="col">#</th>-->
<!--                        <th scope="col">Name</th>-->
<!--                        <th scope="col">Users</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <th scope="row">1</th>-->
<!--                        <td>Mark</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <th scope="row">2</th>-->
<!--                        <td>Jacob</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!---->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <th scope="row">3</th>-->
<!--                        <td>Larry the Bird</td>-->
<!--                        <td><span class="badge activity-badge bg-black">23</span></td>-->
<!---->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--Modal-6 -->
<div class="modal fade" id="modal-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Numbers</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($one_threes as $one_three) {
                        ?>
                        <tr>
                            <th scope="row"><?= $one_three['id'] ?></th>
                            <td><?= $one_three['name'] ?></td>
                            <td><?= $one_three['number'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once "includes/footer.php" ?>
