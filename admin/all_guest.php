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
                            <div class="text-center">
                                <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                            </div>
                            <table id="all_guests" class="table table-striped" style="width:100%">
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
                                <tfoot>
                                <tr>
                                    <th>Events</th>
                                    <th>Guest Name</th>
                                    <th>They are</th>
                                    <th>Guest of</th>
                                    <th>Contact Number</th>
                                    <th>Guest Mail</th>
                                    <th>Guest App Confirmation</th>
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

<?php include_once "includes/dashboard-footer.php" ?>
<script>
    $(document).ready(function() {
        // Initialize DataTable
        var table = $('#all_guests').DataTable({
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
