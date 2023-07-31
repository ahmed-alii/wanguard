<?php
include_once "includes/dashboard-header.php";
$func=new Functions();
$all_new_clients=$func->getAllClients();
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
                <div class="col-lg-12">
                    <div class="card">
                        <form id="dashboard_stats">
                        <input type="number" id="lic">
                        <input type="text" id="net_lic">
                        <input type="text" id="one_300">
                            <button class="btn" type="submit" id="section_imgs_btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>