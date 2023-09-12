<?php
include_once "includes/header.php";
include_once "serverside/functions.php";

if (!isset($_SESSION['user_id'])) {
?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
<?php
    exit();
}

$func = new Functions();
$recruite_users = $func->getAllNewRecruite_count();
$client_users = $func->getAllFamilyClient_count();
$dashboard_stats = $func->getDashboardStats();
$one_threes = $func->getAllOneThrees();
$all_new_clients = $func->getAllClients();
$Get_ALL_Lic_Names = $func->GetALLLicNames();
$Get_ALL_Net_Lic_Names = $func->GetALLNetLicNames();
$Get_ALL_one_three_Names = $func->GetALLOneThreeNames();
$Banner_Image = $func->GetBannerImage();
$Dashboard_Button_Links = $func->GetDashboardButtonLinks();
$Dashboard_Table_Data_Inputs = $func->GetDashboardTableDataInputs();

?>


<section class="bg-black" id="section1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12  text-center">
                <div class="py-5">
                    <img src="assets/images/logo3.png" class="img-fluid">
                </div>
                <div class="py-3">
                    <h1 class="py-3">AGENCY DASHBOARD</h1>
                    <!--                    <p>CHALLENGES FACING AMERICANS TODAY</p>-->
                </div>
                <div class="map pb-5">
                    <div class="map-item">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" class="brz-icon-svg align-[initial]" data-type="glyph" data-name="circle-down-40">
                            <g class="nc-icon-wrapper">
                                <path fill="inherit" d="M24,12c0-6.617-5.383-12-12-12S0,5.383,0,12s5.383,12,12,12S24,18.617,24,12z M6.586,10L8,8.586l4,4l4-4 L17.414,10L12,15.414L6.586,10z"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">-->
<!--    <path fill="#000000" fill-opacity="1" d="M0,288L1440,160L1440,0L0,0Z"></path>-->
<!--</svg>-->
<div class="custom-shape-divider-top-1692952036">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
<section id="section2" class="pt-5">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-1">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"> <?= count($recruite_users) ?> </span>
                    </p>
                    <span class="fs-2 fw-bold">BUSINESS PARTNERS</span>
                    <p class="py-2">Agency Expansion for the current month! Our goal is always a minimum of 20</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-2">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span>
                    </p>
                    <span class="fs-2 fw-bold">FAMILIES HELPED</span>
                    <p class="py-2">Total number of families we have helped on the path to financial freedom</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-3">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">
                        <span class="count"><?= count($client_users) ?></span>
                    </p>
                    <span class="fs-2 fw-bold">TOTAL SAVINGS</span>
                    <p class="py-2">Total Savings for the current month</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-4">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count"><?= $dashboard_stats[0]['lic'] ?></span></p>
                    <span class="fs-2 fw-bold">LIC</span>
                    <p class="py-2">Number of licensed agents in Vanguard</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-5">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"> <span class="count2"><?= $dashboard_stats[0]['net_lic'] ?></span></p>
                    <span class="fs-2 fw-bold">NET LIC.</span>
                    <p class="py-2">Current number of agents who earned $1000</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <div class="py-5 mx-5" data-bs-toggle="modal" data-bs-target="#modal-6">
                    <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count3"><?= $dashboard_stats[0]['one_300'] ?></span></p>
                    <span class="fs-2 fw-bold">1-$300</span>
                    <p class="py-2">Key metric in our business that drives activity & profitability!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-4 text-center">
                    <!-- <h3 class="mt-3 fw-bolder">Banner Image</h3> -->
                </div>
                <?php
                $image_path = substr($Banner_Image[0]['Image_path'], 3);
                ?>
                <div class="text-center">
                    <a href="<?= $Banner_Image[0]['image_url'] ?>" target="_blank">
                        <img src="<?= $image_path ?>" alt="" class="img-fluid slider_image_size slider_image_size1 mx-auto">
                    </a>
                </div>
            </div>

            <div class="text-center pt-4">
                <a class="text-decoration-none" href="<?= $Dashboard_Button_Links[0]['button_one_url'] ?>">
                    <button class="btn btn-primary px-5 py-2"><?= $Dashboard_Button_Links[0]['button_one_name'] ?></button>
                </a>
                <a class="text-decoration-none" href="<?= $Dashboard_Button_Links[0]['button_two_url'] ?>">
                    <button class="btn btn-primary px-5 py-2"><?= $Dashboard_Button_Links[0]['button_two_name'] ?></button>
                </a>
                <a class="text-decoration-none" href="<?= $Dashboard_Button_Links[0]['button_three_url'] ?>">
                    <button class="btn btn-primary px-5 py-2"><?= $Dashboard_Button_Links[0]['button_three_name'] ?></button>
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="py-4 text-center">
                    <!-- <h3 class="mt-3 fw-bolder">Table Data</h3> -->
                </div>
                <div class="card">
                    <div class="card-body">

                        <!-- Event Table rows -->
                        <table id="dashboard_inputs" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Agency / Team</th>
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


<!--Modal-1 -->
<div class="modal fade" id="modal-1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map">
                <table class="table">
                    <thead>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($recruite_users as $recruite_user) {
                        ?>
                            <tr>
                                <!-- <th scope="row"><?= $recruite_user['id'] ?></th> -->


                                <td><?= $recruite_user['f_name'] ?></td>


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

<!--Modal-2 -->
<div class="modal fade" id="modal-2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Split Agent</th>
                            <th scope="col">Writing Agent</th>
                            <th scope="col">Families Helped</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($all_new_clients as $all_new_client) {
                        ?>
                            <tr>
                                <td><?= $all_new_client['trainee'] ?></td>
                                <td><?= $all_new_client['writing_agent'] ?></td>
                                <td><?= $all_new_client['count'] ?></td>
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

<!--Modal-3 -->
<div class="modal fade" id="modal-3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Monthly Saving</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php
                                foreach ($all_new_clients as $all_new_client) {
                                ?>
                            <tr>
                                <td><?= $all_new_client['writing_agent'] ?></td>
                                <td>$<?= $all_new_client['monthly_saving'] ?></td>
                            </tr><?php } ?> -->



                        <?php
                        $uniqueNames = array();

                        foreach ($all_new_clients as $all_new_client) {
                            $name = $all_new_client['writing_agent'];
                            $monthlySaving = (float)str_replace('$', '', $all_new_client['monthly_saving']);

                            if (array_key_exists($name, $uniqueNames)) {
                                $uniqueNames[$name] += $monthlySaving;
                            } else {
                                $uniqueNames[$name] = $monthlySaving;
                            }
                        }
                        ?>
                        <?php foreach ($uniqueNames as $name => $totalSaving) { ?>
                            <tr>
                                <td><?= $name ?></td>
                                <td>$<?= number_format($totalSaving, 2) ?></td>
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

<!--Modal-4 -->
<div class="modal fade" id="modal-4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Get_ALL_Lic_Names as $Get_ALL_Lic_Name) {
                        ?>
                            <tr>
                                <td><?= $Get_ALL_Lic_Name['f_name'] ?></td>
                                <td><?= $Get_ALL_Lic_Name['l_name'] ?></td>
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

<!--Modal-5 -->
<div class="modal fade" id="modal-5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Get_ALL_Net_Lic_Names as $Get_ALL_Net_Lic_Name) {
                        ?>
                            <tr>
                                <td><?= $Get_ALL_Net_Lic_Name['f_name'] ?></td>
                                <td><?= $Get_ALL_Net_Lic_Name['l_name'] ?></td>
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

<!--Modal-6 -->
<div class="modal fade" id="modal-6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Numbers</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Get_ALL_one_three_Names as $Get_ALL_one_three_Name) {
                        ?>
                            <tr>
                                <td><?= $Get_ALL_one_three_Name['f_name'] ?></td>
                                <td><?= $Get_ALL_one_three_Name['l_name'] ?></td>
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

<?php include_once "includes/footer.php" ?>
<script>
    var table = $('#dashboard_inputs').DataTable({
        // DataTable options
    });
</script>