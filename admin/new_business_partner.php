<?php
include_once "includes/dashboard-header.php";

$business_partners_MDs = $func->getAllMD();
$business_partners_SMDs = $func->getAllSMD();
?>

<style>
    .mce-notification {
        display: none;
    }
</style>

<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>New Business Partner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">New Business Partner</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Business Partner Page Settings</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Form Elements -->
                                <form id="add_md">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Add MD</label>
                                            <input type="text" class="form-control" id="add_md_name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="sub-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Form Elements -->
                                <form id="add_smd">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Add SMD</label>
                                            <input type="text" class="form-control" id="add_smd_name" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="sub-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All MD</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Names</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($business_partners_MDs as $business_partners_MD){
                                ?>
                                <tr>
                                    <td><?= $business_partners_MD['md'] ?></td>
                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Business Partner"
                                           onclick="delete_business_partner_md(`<?= $business_partners_MD['id'] ?>`)">
                                        </i>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All SMD</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Names</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($business_partners_SMDs as $business_partners_SMD){
                                ?>
                                <tr>
                                    <td><?= $business_partners_SMD['add_smd'] ?></td>
                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Business Partner"
                                           onclick="delete_business_partner_smd(`<?= $business_partners_SMD['id'] ?>`)">
                                        </i>
                                    </td>
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
    </section>
</main>
<!-- End #main -->


<?php include_once "includes/dashboard-footer.php" ?>

