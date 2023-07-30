<?php
include_once "includes/dashboard-header.php";
$users = $func->getAllUser();
$recruitment_tools = $func->getAllRecruitmetTools();
$client_tools = $func->getAllClientTools();
?>
    <style>
        .mce-notification {
            display: none;
        }
    </style>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>Trainers Page Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Trainers Page Settings</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5 class="card-title">Recruiting Tools</h5>
                                    <!-- Form Elements -->
                                    <form id="recruitment_tools">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label for="inputText" class="col col-form-label">Recruiting
                                                    Name</label>
                                                <input type="text" class="form-control" id="recruiting_tname" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="inputText" class="col col-form-label">Recruiting
                                                    Link</label>
                                                <input type="text" class="form-control" id="recruiting_tlink" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12 text-center pt-3">
                                                <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form Elements -->
                                </div>
                                <div class="col-lg-6">
                                    <h5 class="card-title">Client Tools</h5>

                                    <!-- Form Elements -->
                                    <form id="client_tools">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <label for="inputText" class="col col-form-label">Client Name</label>
                                                <input type="text" class="form-control" id="client_tname" required>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="inputText" class="col col-form-label">Client Link</label>
                                                <input type="text" class="form-control" id="client_tlink" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-12 text-center pt-3">
                                                <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                                </button>
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
                            <h5 class="card-title">All Recruiting Tools</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($recruitment_tools as $r_tools){
                                    ?>
                                    <tr>
                                        <td><?= $r_tools['recruitment_Name'] ?></td>
                                        <td><?= $r_tools['recruitment_link'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Recruiting Tools"
                                               onclick="delete_recruitment_tool(`<?= $r_tools['id'] ?>`)"
                                               id="recruitment_tools">
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
                            <h5 class="card-title">All Client Tools</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($client_tools as $c_tools){
                                    ?>
                                    <tr>
                                        <td><?= $c_tools['client_name'] ?></td>
                                        <td><?= $c_tools['client_link'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Recruiting Tools"
                                               onclick="delete_client_tool(`<?= $c_tools['id'] ?>`)"
                                               id="recruitment_tools">
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

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Recruiting Tools</h5>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($recruitment_tools as $r_tools){
                                    ?>
                                    <tr>
                                        <td><?= $r_tools['recruitment_Name'] ?></td>
                                        <td><?= $r_tools['recruitment_link'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Recruiting Tools"
                                               onclick="delete_recruitment_tool(`<?= $r_tools['id'] ?>`)"
                                               id="recruitment_tools">
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
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>