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
                            <div class="text-center">
                                <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                            </div>
                            <table id="business_partner" class="table table-striped" style="width:100%">
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
                                        <td><?= $all_business_partner['l_name'] ?></td>
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
                                <tfoot>
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
                                </tfoot>
                            </table>

                            <table class="table table-striped">
                                <thead>

                                </thead>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#business_partner').DataTable({
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
            link.setAttribute("download", "team_members.csv");
            document.body.appendChild(link);

            // Click the link to trigger the download
            link.click();

            // Clean up
            document.body.removeChild(link);
        });
    });

</script>
