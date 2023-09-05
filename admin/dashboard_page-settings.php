<?php
include_once "includes/dashboard-header.php";
$func = new Functions();
$recruite_users = $func->getAllNewRecruite_count();
$dashboard_stats = $func->getDashboardStats();
$all_new_clients = $func->getAllClients();
$one_threes = $func->getAllOneThrees();
$all_new_clients = $func->getAllClients();
$Get_ALL_Lic_Names = $func->GetALLLicNames();
$Get_ALL_Net_Lic_Names = $func->GetALLNetLicNames();
$Get_ALL_one_three_Names = $func->GetALLOneThreeNames();
$Banner_Image = $func->GetBannerImage();
$Dashboard_Button_Links = $func->GetDashboardButtonLinks();
$Dashboard_Table_Data_Inputs = $func->GetDashboardTableDataInputs();

?>
<style>
    .mce-notification {
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Dashboard Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Dashboard Settings</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Setting</h4>
                        <ul class="py-3">
                            <li>NEW BUSINESS PARTNERS</li>
                            <li>FAMILIES HELPED</li>
                            <li>TOTAL SAVINGS</li>
                            <li>1 / $300 (Also Name & Number)</li>
                        </ul>
                        <div class="w-100 text-center">
                            <button id="reset" class="btn btn-primary" onclick="reset()">Reset All</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Dashboard Page Stats</h4>
                        <form id="dashboard_stats">
                            <label for="inputText" class="col-lg-12 col-form-label">LIC</label>
                            <input type="number" class="form-control mb-2" value="<?= $dashboard_stats[0]['lic'] ?>" placeholder="LIC" id="lic">

                            <label for="inputText" class="col-lg-12 col-form-label">Net LIC</label>
                            <input type="text" class="form-control mb-2" value="<?= $dashboard_stats[0]['net_lic'] ?>" placeholder="Net LIC" id="net_lic">

                            <label for="inputText" class="col-lg-12 col-form-label">1 / 300</label>
                            <input type="text" class="form-control mb-2" value="<?= $dashboard_stats[0]['one_300'] ?>" placeholder="1 / 300" id="one_300">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="section_imgs_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">1 / 300</h4>
                        <form class="py-3" id="one_three">
                            <input type="text" class="form-control mb-2" placeholder="Name" id="name">
                            <input type="number" class="form-control mb-2" placeholder="Number" id="number">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="one_three_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">LIC Name</h4>
                        <form class="py-3" id="lic_name">
                            <input type="text" class="form-control mb-2" placeholder="First Name" id="f_name_lic">
                            <input type="text" class="form-control mb-2" placeholder="Last Name" id="l_name_lic">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="lic_name_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">All 1 / 300</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Numbers</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($one_threes as $one_three) {
                                ?>
                                    <tr>
                                        <td><?= $one_three['name'] ?></td>
                                        <td>$<?= $one_three['number'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Names" onclick="deleteOneThreeInputNames(`<?= $one_three['id'] ?>`)"></i>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">All LIC Name</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($Get_ALL_Lic_Names as $Get_ALL_Lic_Name) {
                                ?>
                                    <tr>
                                        <td><?= $Get_ALL_Lic_Name['f_name'] ?></td>
                                        <td>$<?= $Get_ALL_Lic_Name['l_name'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Names" onclick="deleteLICInputNames(`<?= $Get_ALL_Lic_Name['id'] ?>`)"></i>
                                        </td>
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


    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Net LIC Name</h4>
                        <form class="py-3" id="net_lic_name">
                            <input type="text" class="form-control mb-2" placeholder="First Name" id="f_name_net">
                            <input type="text" class="form-control mb-2" placeholder="Last Name" id="l_name_net">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="net_lic_name_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">1 / 300 Name</h4>
                        <form class="py-3" id="one_three_name">
                            <input type="text" class="form-control mb-2" placeholder="First Name" id="f_name_one_three">
                            <input type="text" class="form-control mb-2" placeholder="Last Name" id="l_name_one_three">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="one_three_name_btn">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">All Net LIC Name</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($Get_ALL_Net_Lic_Names as $Get_ALL_Net_Lic_Name) {
                                ?>
                                    <tr>
                                        <td><?= $Get_ALL_Net_Lic_Name['f_name'] ?></td>
                                        <td><?= $Get_ALL_Net_Lic_Name['l_name'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Names" onclick="deleteNetLICInputNames(`<?= $Get_ALL_Net_Lic_Name['id'] ?>`)"></i>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">All 1 / 300 Name</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($Get_ALL_one_three_Names as $Get_ALL_one_three_Name) {
                                ?>
                                    <tr>
                                        <td><?= $Get_ALL_one_three_Name['f_name'] ?></td>
                                        <td><?= $Get_ALL_one_three_Name['l_name'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Names" onclick="deleteOneThreeInputNames(`<?= $Get_ALL_one_three_Name['id'] ?>`)"></i>
                                        </td>
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
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Banner Image Upload</h4>
                        <form class="py-3" id="banner_img">
                            <div class="row mb-3">
                                <div class="col-lg-6">
                                    <label for="inputText" class="col-lg-12 col-form-label">Banner Image</label>
                                    <input type="file" class="form-control" id="banner_img1" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="inputText" class="col-lg-12 col-form-label">Banner Image URL</label>
                                    <input type="text" class="form-control" id="banner_img_url" required>
                                </div>
                            </div>
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="banner_img_btn">Submit</button>
                            </div>
                        </form>
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <h4 class="mt-3">Banner Image</h4>
                                <?php
                                $image_path = $Banner_Image[0]['Image_path'];
                                ?>
                                <div class="text-center">
                                    <a href="<?= $Banner_Image[0]['image_url'] ?>" target="_blank">
                                        <img src="<?= $image_path ?>" alt="" class="img-fluid slider_image_size mx-auto">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Dashboard Button Link</h4>
                        <form id="dashboard_btns">
                            <div class="row">
                                <h5 class="fw-bold m-0 pt-3">Button ONE</h5>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">Button Name</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_one_name'] ?>" placeholder="Button ONE" id="btn_1_name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">URL</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_one_url'] ?>" placeholder="URL" id="btn_1_url">
                                </div>
                            </div>

                            <div class="row">
                                <h5 class="fw-bold m-0 pt-3">Button TWO</h5>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">Button Name</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_two_name'] ?>" placeholder="Button Name" id="btn_2_name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">URL</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_two_url'] ?>" placeholder="URL" id="btn_2_url">
                                </div>
                            </div>

                            <div class="row">
                                <h5 class="fw-bold m-0 pt-3">Button THREE</h5>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">Button Name</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_three_name'] ?>" placeholder="Button Name" id="btn_3_name">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="inputText" class="col-lg-12 col-form-label">URL</label>
                                    <input type="text" class="form-control mb-2" value="<?= $Dashboard_Button_Links[0]['button_three_url'] ?>" placeholder="URL" id="btn_3_url">
                                </div>
                            </div>


                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="dashboard_btns_sub_btn">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Dashboard Table Data</h4>
                        <form id="dashboard_table_inputs">
                            <input type="text" class="form-control mb-2" placeholder="First Name" id="f_name">
                            <input type="text" class="form-control mb-2" placeholder="Last Name" id="l_name">
                            <input type="text" class="form-control mb-2" placeholder="Agency / Team " id="agency_team">
                            <div class="w-100 text-center">
                                <button class="btn btn-primary" type="submit" id="dashboard_table_inputs_sub_btn">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-3">Dashboard Table Data</h4>
                        <!-- Event Table rows -->
                        <div class="text-center">
                            <button class="btn btn-secondary my-3" id="download_csv">Download CSV</button>
                        </div>
                        <table id="dashboard_inputs" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Agency / Team</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($Dashboard_Table_Data_Inputs as $Dashboard_Table_Data_Input) {
                                ?>
                                    <tr>
                                        <td><?= $Dashboard_Table_Data_Input['f_name'] ?></td>
                                        <td><?= $Dashboard_Table_Data_Input['l_name'] ?></td>
                                        <td><?= $Dashboard_Table_Data_Input['agency_team'] ?></td>
                                        <td>
                                            <i class="fa fa-edit p-2 btn btn-primary" title="Edit Dashboard Inputs" onclick="EditDashboardInputs(`<?= $Dashboard_Table_Data_Input['id'] ?>`,`<?= $Dashboard_Table_Data_Input['f_name'] ?>`,`<?= $Dashboard_Table_Data_Input['l_name'] ?>`,`<?= $Dashboard_Table_Data_Input['agency_team'] ?>`)"></i>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete team member" onclick="deleteDashboardInputs(`<?= $Dashboard_Table_Data_Input['id'] ?>`)"></i>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Agency / Team</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- End Event Table rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- End #main -->

<!-- Edit Team member Modal -->
<div class="modal fade" id="edit_dashboard_inputs_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Dashboard Inputs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="dashboard_input">
                <input name="" id="dashboard_input_id" type="hidden">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">First Name</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_f_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Last Name</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_l_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Agency / Team</label>
                            <div class="col-sm-12">
                                <input type="text" id="edit_agency_team" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" id="sub_btn" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once "includes/dashboard-footer.php" ?>

<script>
    function EditDashboardInputs(id, f_name, l_name, agency_team) {

        $("#dashboard_input_id").val(id);
        $("#edit_f_name").val(f_name);
        $("#edit_l_name").val(l_name);
        $("#edit_agency_team").val(agency_team);

        $("#edit_dashboard_inputs_modal").modal('show');
    }
</script>

<script>
    var table = $('#dashboard_inputs').DataTable({
        // DataTable options
    });
    $(document).ready(function() {
        // Add event listener to the "Download CSV" button
        $('#download_csv').on('click', function() {
            // Prepare the CSV content
            var csvContent = "";

            // Get the header row
            var headerRow = [];
            $('#dashboard_inputs thead tr th').each(function(index) {
                if (index !== $('#dashboard_inputs thead tr th').length - 1) {
                    headerRow.push('"' + $(this).text() + '"');
                }
            });
            csvContent += headerRow.join(',') + "\n";

            // Get the data rows
            $('#dashboard_inputs tbody tr').each(function() {
                var rowData = [];
                $(this).find('td').each(function(index) {
                    if (index !== $('#dashboard_inputs thead tr th').length - 1) {
                        rowData.push('"' + $(this).text() + '"');
                    }
                });
                csvContent += rowData.join(',') + "\n";
            });

            // Create a Blob object and a download link
            var blob = new Blob([csvContent], {
                type: "text/csv;charset=utf-8;"
            });
            var link = document.createElement("a");
            link.setAttribute("href", URL.createObjectURL(blob));
            link.setAttribute("download", "dashboard_inputs.csv");
            link.style.display = "none";
            document.body.appendChild(link);

            // Click the link to trigger the download
            link.click();

            // Clean up
            document.body.removeChild(link);
        });
    });
</script>