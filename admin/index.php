<?php
include_once "includes/dashboard-header.php";
include_once "../serverside/functions.php";


$func=new Functions();
$all_users=$func->getAllUser();
$events=$func->getAllEvents();
$team_members=$func->getAllTeamMembers();

?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total registered users</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class='bx bxs-user-check'></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=count($all_users)?></h6>
                                            <!--                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Registered team members</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class='bx bxs-user-check'></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=count($team_members)?></h6>
                                            <!--                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total events</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class='bx bxs-castle' ></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6><?=count($events)?></h6>
                                            <!--                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>-->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
                <!-- End Left side columns -->

            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>