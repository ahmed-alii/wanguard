<?php
include_once "includes/dashboard-header.php";
$users = $func->getAllUser();
?>
<style>
    .mce-notification {
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->
    <section class="section dashboard">
        <div class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Registered users</h5>

                            <!-- Event Table rows -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <!--                                    <th scope="col">#</th>-->
                                        <!--                                    <th scope="col">Picture</th>-->
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Type</th>
                                        <th>Register date</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($users as $user) {
                                    ?>
                                        <tr>
                                            <td><?= $user['fname'] ?></td>
                                            <td><?= $user['lname'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td>
                                                <?php
                                                if ($user['status'] == 1) {
                                                ?>
                                                    <span class="badge rounded-pill bg-success">Active</span>

                                                <?php
                                                } else {
                                                ?>
                                                    <span class="badge rounded-pill bg-danger">Blocked</span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($user['user_type'] == 0) {
                                                ?>
                                                    <span class="badge rounded-pill bg-success">User</span>

                                                <?php
                                                } else if ($user['user_type'] == 2) {
                                                ?>
                                                    <span class="badge rounded-pill bg-secondary">Trainer</span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td><?= date('d F, Y', strtotime($user['create_date'])) ?></td>
                                            <td>
                                                <?php
                                                if ($user['user_type'] == 0) {
                                                ?>
                                                    <a class="btn btn-sm btn-success  my-1 " onclick="markastrainer(this.id)" id="<?= $user['id'] ?>" title="Mark as trainer"><i class="fa fa-check"></i></a>
                                                <?php
                                                } else if ($user['user_type'] == 2) {
                                                ?>
                                                    <a class="btn btn-sm btn-secondary my-1 " onclick="removefromtrainer(`<?= $user['id'] ?>`)" title="Remove from trainer"><i class="fa fa-times"></i></a>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if ($user['status'] == 1) {
                                                ?>
                                                    <a class="btn btn-sm btn-primary  my-1 " onclick="blockUser(this.id)" id="<?= $user['id'] ?>" title="Block User"><i class="fa fa-ban"></i></a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a class="btn btn-sm btn-success my-1 " onclick="activeUser(`<?= $user['id'] ?>`)" id="approve_btn<?= $user['id'] ?>" title="Activate User"><i class="fa fa-check"></i></a>
                                                <?php
                                                }
                                                ?>
                                                <a class="btn btn-sm btn-danger my-1 " onclick="deleteUser(<?= $user['id'] ?>)" title="Delete User"><i class="fa fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                            <!-- End Event Table rows -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<!-- End #main -->


<?php include_once "includes/dashboard-footer.php" ?>