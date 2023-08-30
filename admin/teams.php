<?php
include_once "includes/dashboard-header.php";
$team_members = $func->getAllTeamMembers();
?>
<style>
    .mce-notification {
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Teams</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Teams</li>
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
                            <button type="button btn-1" class="btn btn-primary my-2" data-bs-toggle="modal"
                                    data-bs-target="#add_team_modal"> Add New Team Member
                            </button>
                            <h5 class="card-title">All Team Members</h5>

                            <!-- Event Table rows -->
                            <div class="text-center">
                                <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                            </div>
                            <table id="team_members" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Earning</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($team_members as $team_member) {
                                    ?>
                                    <tr>
                                        <td><?= $team_member['name'] ?></td>
                                        <td><?= $team_member['level'] ?></td>
                                        <td><?= $team_member['rank'] ?></td>
                                        <td><?= $team_member['department'] ?></td>
                                        <td><?= $team_member['earning'] ?></td>
                                        <td>
                                            <a href="add-bio?bio_id=<?= $team_member['id'] ?>"> <i
                                                        class="fa fa-plus p-2 btn btn-success" title="Edit Bio"></i></a>
                                            <i class="fa fa-edit p-2 btn btn-primary" title="Edit team member"
                                               onclick="editTeamMember(`<?= $team_member['id'] ?>`,`<?= $team_member['name'] ?>`,`<?= $team_member['rank'] ?>`,`<?= $team_member['level'] ?>`,`<?= $team_member['department'] ?>`,`<?= $team_member['earning'] ?>`,`<?= $team_member['youtube_link'] ?>`, `<?= $team_member['linkedin_link'] ?>`,`<?= $team_member['twitter_link'] ?>`,`<?= $team_member['appointment_link'] ?>`)"></i>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete team member"
                                               onclick="deleteTeamMember(`<?= $team_member['id'] ?>`)"></i>

                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Rank</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Earning</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </tfoot>
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
<!-- Add Team member Modal -->
<div class="modal fade" id="add_team_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add team member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="add_team_member">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label"> Name</label>
                            <div class="col-sm-12">
                                <input type="text" required id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Level</label>
                            <div class="col-sm-12">
                                <input type="number" min="1" max="3" id="level" required name="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputDate" class="col-sm-12 col-form-label">Department</label>
                            <div class="col-sm-12">
                                <input type="text" id="department" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Earning</label>
                            <div class="col-sm-12">
                                <input type="number" id="earning" min="1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputNumber" class="col-sm-12 col-form-label">Rank</label>
                            <div class="col-sm-12">
                                <input class="form-control" required type="text" id="rank">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputNumber" class="col-sm-12 col-form-label">Picture Upload</label>
                            <div class="col-sm-12">
                                <input class="form-control" required type="file" id="update_profile_photo">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Facebook Link</label>
                            <div class="col-sm-12">
                                <input type="text" id="youtube_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">LinkedIn</label>
                            <div class="col-sm-12">
                                <input type="text" id="linkedin_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Instagram</label>
                            <div class="col-sm-12">
                                <input type="text" id="twitter_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Appointment Link</label>
                            <div class="col-sm-12">
                                <input type="text" id="appointment_link" class="form-control">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="sub_btn" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Team member Modal -->
<div class="modal fade" id="edit_team_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit team member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="edit_team_member">
                <input name="" id="team_id" type="hidden">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label"> Name</label>
                            <div class="col-sm-12">
                                <input type="text" required id="edit_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Level</label>
                            <div class="col-sm-12">
                                <input type="number" min="1" max="3" id="edit_level" required name=""
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputDate" class="col-sm-12 col-form-label">Department</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_department" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Earning</label>
                            <div class="col-sm-12">
                                <input type="number" id="edit_earning" min="1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputNumber" class="col-sm-12 col-form-label">Rank</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="text" id="edit_rank">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="inputNumber" class="col-sm-12 col-form-label">Picture Upload</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="edit_update_profile_photo">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Youtube Link</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_youtube_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">LinkedIn</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_linkedin_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Twitter</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_twitter_link" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputTime" class="col-sm-12 col-form-label">Appointment Link</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_appointment_link" class="form-control">
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

    function editTeamMember(id, name, rank, level, department, earning, youtube_link, linkedin_link, twitter_link, appointment_link) {

        $("#team_id").val(id);
        $("#edit_name").val(name);
        $("#edit_rank").val(rank);
        $("#edit_level").val(level);
        $("#edit_department").val(department);
        $("#edit_earning").val(earning);
        $("#edit_youtube_link").val(youtube_link);
        $("#edit_linkedin_link").val(linkedin_link);
        $("#edit_twitter_link").val(twitter_link);
        $("#edit_appointment_link").val(appointment_link);

        $("#edit_team_modal").modal('show');

    }

</script>
<script>
    var table = $('#team_members').DataTable({
        // DataTable options
    });
    $(document).ready(function() {
        // Add event listener to the "Download CSV" button
        $('#download_csv').on('click', function() {
            // Prepare the CSV content
            var csvContent = "";

            // Get the header row
            var headerRow = [];
            $('#team_members thead tr th').each(function(index) {
                if (index !== $('#team_members thead tr th').length - 1) {
                    headerRow.push('"' + $(this).text() + '"');
                }
            });
            csvContent += headerRow.join(',') + "\n";

            // Get the data rows
            $('#team_members tbody tr').each(function() {
                var rowData = [];
                $(this).find('td').each(function(index) {
                    if (index !== $('#team_members thead tr th').length - 1) {
                        rowData.push('"' + $(this).text() + '"');
                    }
                });
                csvContent += rowData.join(',') + "\n";
            });

            // Create a Blob object and a download link
            var blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });
            var link = document.createElement("a");
            link.setAttribute("href", URL.createObjectURL(blob));
            link.setAttribute("download", "team_members.csv");
            link.style.display = "none";
            document.body.appendChild(link);

            // Click the link to trigger the download
            link.click();

            // Clean up
            document.body.removeChild(link);
        });
    });
</script>
