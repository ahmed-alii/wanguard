<?php
include_once "includes/dashboard-header.php";
$func = new Functions();
$all_new_clients = $func->getAllClients();
?>
    <style>
        .mce-notification {
            display: none;
        }
    </style>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>All Request Trainer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">New Client</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-3">Setting</h4>
                            <ul class="py-3">
                                <li>NEW BUSINESS PARTNERS</li>
                                <li>FAMILIES HELPED</li>
                                <li>TOTAL SAVINGS</li>
                            </ul>
                            <div class="w-100 text-center">
                                <button id="reset" class="btn btn-primary" onclick="reset()">Reset All</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-3">Dashboard Page Stats</h4>
                            <form id="dashboard_stats">
                                <input type="number" class="form-control mb-2" placeholder="LIC" id="lic">
                                <input type="text" class="form-control mb-2" placeholder="Net LIC" id="net_lic">
                                <input type="text" class="form-control mb-2" placeholder="1 / 300" id="one_300">
                                <div class="w-100 text-center">
                                    <button class="btn btn-primary" type="submit" id="section_imgs_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>