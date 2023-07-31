<?php
include_once "includes/dashboard-header.php";
$func=new Functions();
$all_appointments=$func->getAllAppointments();
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
                    <li class="breadcrumb-item active">All Request Trainer</li>
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
                                    <th>Trainee or Agent scheduling appointment</th>
                                    <th>Appointment Type</th>
                                    <th>Who are we seeing?</th>
                                    <th>Date of Appointment </th>
                                    <th>TimeZone</th>
                                    <th>Match-Up Requested</th>
                                    <th>They are</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($all_appointments as $all_appointment){
                                    ?>
                                    <tr>
                                        <td><?= $all_appointment['traine_appointment'] ?></td>
                                        <td><?= $all_appointment['appointment_type'] ?></td>
                                        <td><?= $all_appointment['who_seeing'] ?></td>
                                        <td><?= $all_appointment['appointment_date'] ?></td>
                                        <td><?= $all_appointment['time'] ?></td>
                                        <td><?= $all_appointment['match_up'] ?></td>
                                        <td><?= $all_appointment['they_are'] ?></td>
                                        <td><?= $all_appointment['description'] ?></td>
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