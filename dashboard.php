<?php
include_once "includes/header.php";

include_once "serverside/functions.php";
$func = new Functions();
$recruite_users = $func->getAllNewRecruite_count();
$client_users = $func->getAllFamilyClient_count();
$dashboard_stats=$func->getDashboardStats();
?>


<section class="bg-black" id="section1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  text-center">
                <div class="py-5">
                    <img src="assets/images/logo3.png" class="img-fluid">
                </div>
                <div class="py-3">
                    <h2 class="py-3">AGENCY DASHBOARD</h2>
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
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1" d="M0,288L1440,160L1440,0L0,0Z"></path>
</svg>
<section id="section2" class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-1">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"> <?= count($recruite_users) ?> </span></p>
                    <span class="fs-2 fw-bold">NEW BUSINESS PARTNERS</span>
                    <p class="py-2">78% of American's live paycheck to paycheck and of those that are working 85% hate
                        their job.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-2">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span></p>
                    <span class="fs-2 fw-bold">FAMILIES HELPED</span>
                    <p class="py-2">52% of households in America have credit card debt. Totaling over $998B in credit
                        card debt in 2021.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-3">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span></p>
                    <span class="fs-2 fw-bold">TOTAL SAVINGS</span>
                    <p class="py-2">44% of Americans can’t cover a $400 emergency.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-4">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count"><?=$dashboard_stats[0]['lic']?></span> %</p>
                    <span class="fs-2 fw-bold">LIC</span>
                    <p class="py-2">51% of American adults have little to nothing saved for retirement.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-5">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><?=$dashboard_stats[0]['net_lic']?></p>
                    <span class="fs-2 fw-bold">NET LIC.</span>
                    <p class="py-2">4 out of 10 households are uninsured. Approximately 158 million people are battling
                        with a chronic disease.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-6">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><?=$dashboard_stats[0]['one_300']?></p>
                    <span class="fs-2 fw-bold">1-$300</span>
                    <p class="py-2">Only 6 of the 50 states require a stand alone course in personal finance to graduate
                        from high school.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <button id="reset" class="btn btn-primary" onclick="reset()">Reset</button>

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
<!--<div class="modal fade" id="modal-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
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
                        <th scope="col">#</th>
                        <th scope="col">Writing Agent</th>
                        <th scope="col">Trainee</th>
                        <th scope="col">Monthly Saving</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($client_users as $client_user) {
                        ?>
                        <tr>
                            <th scope="row"><?= $client_user['id'] ?></th>
                            <td><?= $client_user['writing_agent'] ?></td>
                            <td><?= $client_user['trainee'] ?></td>
                            <td><?= $client_user['monthly_saving'] ?></td>
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
<!--<div class="modal fade" id="modal-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"-->
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


<?php include_once "includes/footer.php" ?>
