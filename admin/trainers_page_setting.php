<?php
include_once "includes/dashboard-header.php";
$users = $func->getAllUser();
$recruitment_tools = $func->getAllRecruitmetTools();
$Allsections = $func->getAllsections();
$AllsectionsImages = $func->getAllsectionsImages();
$client_tools = $func->getAllClientTools();
?>
<style>
    .mce-notification {
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Trainers Page Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Trainers Page Settings</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Recruiting Tools</h5>
                                <!-- Form Elements -->
                                <form id="recruitment_tools">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Recruiting
                                                Name</label>
                                            <input type="text" class="form-control" id="recruiting_tname" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Recruiting
                                                Link</label>
                                            <input type="text" class="form-control" id="recruiting_tlink" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                            <div class="col-lg-6">
                                <h5 class="card-title">Client Tools</h5>

                                <!-- Form Elements -->
                                <form id="client_tools">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Client Name</label>
                                            <input type="text" class="form-control" id="client_tname" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Client Link</label>
                                            <input type="text" class="form-control" id="client_tlink" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                        </div>
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
                        <h5 class="card-title">All Recruiting Tools</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($recruitment_tools as $r_tools){
                                    ?>
                                    <tr>
                                        <td><?= $r_tools['recruitment_Name'] ?></td>
                                        <td><?= $r_tools['recruitment_link'] ?></td>
                                        <td>
                                            <i class="fa fa-trash p-2 btn btn-danger" title="Delete Recruiting Tools"
                                            onclick="delete_recruitment_tool(`<?= $r_tools['id'] ?>`)"
                                            id="recruitment_tools">
                                        </i>
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
                <div class="card-body table-responsive">
                    <h5 class="card-title">All Client Tools</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($client_tools as $c_tools){
                                ?>
                                <tr>
                                    <td><?= $c_tools['client_name'] ?></td>
                                    <td><?= $c_tools['client_link'] ?></td>
                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Recruiting Tools"
                                        onclick="delete_client_tool(`<?= $c_tools['id'] ?>`)"
                                        >
                                    </i>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Create new section</h5>
                                <!-- Form Elements -->
                                <form id="section_form">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">
                                                Section Title</label>
                                            <input type="text" class="form-control" id="main_title" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Sub title</label>
                                            <input type="text" class="form-control" id="sub_title" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                            <div class="col-lg-6">
                                <h5 class="card-title">Add Presentations into the section</h5>
                                <!-- Form Elements -->
                                <form id="section_form_image" accept="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">
                                                Select Section</label>
                                            <select class="form-select" id="sectionid">
                                                <option value="" selected disabled>select section</option>
                                                <?php
                                                foreach ($Allsections as $section){
                                                    ?>
                                                    <option value="<?=$section['id']?>"><?=$section['main_heading']?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">URL</label>
                                            <input type="url" class="form-control" id="url" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Upload Thumbnail</label>
                                            <!-- <input type="file" class="form-control" id="images" required> -->
                                            <input type="file" required id="images" placeholder="Picture" class="form-control mb-2">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="section_imgs_btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                        </div>
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
                        <h5 class="card-title">All Create New Section</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Main Heading</th>
                                <th>Sub Heading</th>
                                <th>Add images</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($Allsections as $section){
                                ?>
                                <tr>
                                    <td><?= $section['id'] ?></td>
                                    <td><?= $section['main_heading'] ?></td>
                                    <td><?= $section['sub_heading'] ?></td>

                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Section"
                                           onclick="deletesection(`<?= $section['id'] ?>`)"
                                        >
                                        </i>
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
                    <div class="card-body table-responsive">
                        <h5 class="card-title">All Presentations into the Section Videos</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Section Main Heading</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($AllsectionsImages as $section){
                                ?>
                                <tr>
                                    <td><?= $section['main_heading'] ?></td>
                                    <td><img src="<?= $section['image_path'] ?>" style="max-width: 50px;"></td>

                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Section"
                                           onclick="deleteimage(`<?= $section['id'] ?>`)"
                                        >
                                        </i>
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
</main>
<!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>