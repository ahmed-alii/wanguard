<?php
include_once "includes/dashboard-header.php";
$func=new Functions();
$all_business_partners=$func->getAllBusinessPartners();
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
                                    <th>Agent Id</th>
                                    <th>Start Date</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Resident State</th>
                                    <th>Recruiter</th>
                                    <th>Direct MD</th>
                                    <th>Direct SMD</th>
                                    <th>Licensed</th>
                                    <th>Contact No</th>
                                    <th>Date of Birth</th>
                                    <th>Email Address</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($all_business_partners as $all_business_partner){
                                    ?>
                                    <tr>
                                        <td><?= $all_business_partner['agent_id'] ?></td>
                                        <td><?= $all_business_partner['start_date'] ?></td>
                                        <td><?= $all_business_partner['f_name'] ?></td>
                                        <td><?= $all_business_partner['l-name'] ?></td>
                                        <td><?= $all_business_partner['resident_state'] ?></td>
                                        <td><?= $all_business_partner['recruiter'] ?></td>
                                        <td><?= $all_business_partner['direct_MD'] ?></td>
                                        <td><?= $all_business_partner['direct_SMD'] ?></td>
                                        <td><?= $all_business_partner['licensed'] ?></td>
                                        <td><?= $all_business_partner['contact_no'] ?></td>
                                        <td><?= $all_business_partner['birthdate'] ?></td>
                                        <td><?= $all_business_partner['email_address'] ?></td>
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