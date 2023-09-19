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
        <h1>All New Client</h1>
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
                        <div class="text-center">
                            <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                        </div>
                        <table id="new_clients" class="table table-striped" style="width:100%">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_new_clients as $all_new_client) {
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
                                        <td>
                                            <i class="fa px-2 fa-trash btn btn-danger" onclick="delete_new_clinet(`<?= $all_new_client['id'] ?>`);"></i>
                                            <!-- <i class="fa px-2 fa-pencil-square-o btn btn-warning" onclick="edit_client(`<?= $all_new_client['id'] ?>`,`<?= $all_new_client['f_name'] ?>`);"></i> -->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
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
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->
<div class="modal fade" id="edit_client_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit team member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_new_client">
                <input name="" id="user_id" type="hidden">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">First Name</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_fname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Last Name</label>
                            <div class="col-sm-12">
                                <input type="number" id="edit_lname" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="sub_btn1" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once "includes/dashboard-footer.php" ?>
<script>
    function edit_client(id, fname) {
        $("#user_id").val(id);
        $("#edit_fname").val(fname);

        $("#edit_client_modal").modal('show');
    }
</script>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#new_clients').DataTable({
            // DataTable options
        });

        // Add event listener to the "Download CSV" button
        $('#download_csv').on('click', function() {
            // Get the data from the DataTable
            var data = table.data().toArray();

            // Convert the data to CSV format
            var csvContent = "data:text/csv;charset=utf-8,";

            // Add headers
            var headers = table.columns().header().toArray();
            var headerRow = headers.map(function(header) {
                return '"' + $(header).text() + '"';
            }).join(",");
            csvContent += headerRow + "\n";

            // Add data rows
            data.forEach(function(row) {
                var csvRow = row.map(function(cell) {
                    return '"' + cell + '"';
                }).join(",");
                csvContent += csvRow + "\n";
            });

            // Create a temporary link to trigger the download
            var encodedUri = encodeURI(csvContent);
            var link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "new_client.csv");
            document.body.appendChild(link);

            // Click the link to trigger the download
            link.click();

            // Clean up
            document.body.removeChild(link);
        });
    });
</script>