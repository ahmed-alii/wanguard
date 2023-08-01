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
                        <div class="card-body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Policy Name</th>
                                    <th>Submitted Date</th>
                                    <th>Coverage</th>
                                    <th>Monthly Saving</th>
                                    <th>Estimated Points</th>
                                    <th>CWA</th>
                                    <th>Writing Agent</th>
                                    <th>Trainee</th>
                                    <th>Split</th>
                                    <th>Split Agent</th>
                                    <th>Agent Policy</th>
                                    <th>Product</th>
                                    <th>Provider</th>
                                    <th>Med Required</th>
                                    <th>Contact No</th>
                                    <th>Email Address</th>
                                    <th>Add Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($all_new_clients as $all_new_client){
                                    ?>
                                    <tr>

                                        <td><?= $all_new_client['f_name'] ?></td>
                                        <td><?= $all_new_client['l_name'] ?></td>
                                        <td><?= $all_new_client['policy_name'] ?></td>
                                        <td><?= $all_new_client['submitted_date'] ?></td>
                                        <td><?= $all_new_client['coverage'] ?></td>
                                        <td><?= $all_new_client['monthly_saving'] ?></td>
                                        <td><?= $all_new_client['estimated_points'] ?></td>
                                        <td><?= $all_new_client['CWA'] ?></td>
                                        <td><?= $all_new_client['writing_agent'] ?></td>
                                        <td><?= $all_new_client['trainee'] ?></td>
                                        <td><?= $all_new_client['split_option'] ?></td>
                                        <td><?= $all_new_client['split_agent'] ?></td>
                                        <td><?= $all_new_client['agent_policy'] ?></td>
                                        <td><?= $all_new_client['product'] ?></td>
                                        <td><?= $all_new_client['provider'] ?></td>
                                        <td><?= $all_new_client['med_required'] ?></td>
                                        <td><?= $all_new_client['contact_no'] ?></td>
                                        <td><?= $all_new_client['email_address'] ?></td>
                                        <td><?= $all_new_client['add_notes'] ?></td>
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