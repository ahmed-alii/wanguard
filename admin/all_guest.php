<?php
include_once "includes/dashboard-header.php";
$func=new Functions();
$all_guests=$func->getAllGuests();
?>
    <style>
        .mce-notification {
            display: none;
        }
    </style>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>Guests</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">All Guests</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Events</th>
                                    <th>Guest Name</th>
                                    <th>They are</th>
                                    <th>Guest of</th>
                                    <th>Contact Number</th>
                                    <th>Guest Mail</th>
                                    <th>Guest App Confirmation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($all_guests as $all_guest){
                                    ?>
                                    <tr>
                                        <td><?= $all_guest['events'] ?></td>
                                        <td><?= $all_guest['guest_name'] ?></td>
                                        <td><?= $all_guest['they_are'] ?></td>
                                        <td><?= $all_guest['guest_of'] ?></td>
                                        <td><?= $all_guest['contact_number'] ?></td>
                                        <td><?= $all_guest['guest_mail'] ?></td>
                                        <td><?= $all_guest['guest_app_confirm'] ?></td>
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