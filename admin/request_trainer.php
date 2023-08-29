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
                            <div class="text-center">
                                <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                            </div>
                            <table id="request_trainers" class="table table-striped" style="width:100%">
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
                                <tfoot>
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
        var table = $('#request_trainers').DataTable({
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
