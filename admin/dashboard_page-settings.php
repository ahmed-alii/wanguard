<?php
include_once "includes/dashboard-header.php";
$func = new Functions();
$all_new_clients = $func->getAllClients();
$one_threes=$func->getAllOneThrees();
$all_new_clients=$func->getAllClients();
$Get_ALL_Lic_Names = $func->GetALLLicNames();
$Get_ALL_Net_Lic_Names = $func->GetALLNetLicNames();
$Get_ALL_one_three_Names = $func->GetALLOneThreeNames();

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
                                <input type="number" class="form-control mb-2" placeholder="LIC" id="lic">
                                <input type="text" class="form-control mb-2" placeholder="Net LIC" id="net_lic">
                                <input type="text" class="form-control mb-2" placeholder="1 / 300" id="one_300">
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
                                <input type="text" class="form-control mb-2" placeholder="Last Name" id="l_name-lic">
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
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($one_threes as $one_three){
                                    ?>
                                    <tr>
                                        <td><?= $one_three['name'] ?></td>
                                        <td>$<?= $one_three['number'] ?></td>
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
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($Get_ALL_Lic_Names as $Get_ALL_Lic_Name){
                                    ?>
                                    <tr>
                                        <td><?= $Get_ALL_Lic_Name['f_name'] ?></td>
                                        <td>$<?= $Get_ALL_Lic_Name['l_name'] ?></td>
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
                                    <button class="btn btn-primary" type="submit" id="one_three_name_btn">Submit</button>
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
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($Get_ALL_Net_Lic_Names as $Get_ALL_Net_Lic_Name){
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
                                foreach ($Get_ALL_one_three_Names as $Get_ALL_one_three_Name){
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
        </section>


    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>