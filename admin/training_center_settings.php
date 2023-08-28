<?php include_once "includes/dashboard-header.php";
$func = new Functions();
$welcomeVideoPath = $func->FeaturedVideo();
$AllSectionsTraining = $func->getAllSectionsTraining();
$AllSectionsTrainingImages = $func->getAllSectionsTrainingImages();

?>

<style>
    .mce-notification {
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Training Center Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Training Center Setting</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Featured Video URL</h5>
                        <form id="featured_video">
                            <label for="inputText" class="col col-form-label">URL</label>
                            <input type="file" class="form-control" id="featured_video_url" required>
                            <div class="row">
                                <div class="col-sm-12 text-center pt-3">
                                    <button type="submit" class="btn btn-primary" id="sub_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="pt-3">
                            <video src="<?= $welcomeVideoPath[0]["video_file"] ?>" controls class="img-fluid"
                                   style="height: 300px;"></video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Button Links</h5>
                        <form id="training_btn_links">
                            <label for="inputText" class="col col-form-label">Link</label>
                            <input type="text" class="form-control mb-2" placeholder="Faith" id="faith">
                            <input type="text" class="form-control mb-2" placeholder="Family" id="family">
                            <input type="text" class="form-control mb-2" placeholder="Fitness" id="fitness">
                            <input type="text" class="form-control mb-2" placeholder="Fun" id="fun">
                            <input type="text" class="form-control mb-2" placeholder="Finance" id="finance">
                            <div class="row">
                                <div class="col-sm-12 text-center pt-3">
                                    <button type="submit" class="btn btn-primary" id="sub_btn">Submit</button>
                                </div>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="card-title">Create Training Center New Section</h5>
                                <!-- Form Elements -->
                                <form id="training_section_form">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">
                                                Section Title</label>
                                            <input type="text" class="form-control" id="training_main_title"
                                                   required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Sub title</label>
                                            <input type="text" class="form-control" id="training_sub_title">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary" id="tra_sec_btn">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Form Elements -->
                            </div>
                            <div class="col-lg-6">
                                <h5 class="card-title">Add Presentations into the Training Section</h5>
                                <!-- Form Elements -->
                                <form id="training_section_form_image" accept="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">
                                                Select Section</label>
                                            <select class="form-select" id="training_section_id">
                                                <option value="" selected disabled>Select Training Section</option>
                                                <?php
                                                foreach ($AllSectionsTraining as $Section_Names) {
                                                    ?>
                                                    <option value="<?= $Section_Names['id'] ?>"><?= $Section_Names['main_heading'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">URL</label>
                                            <input type="url" class="form-control" id="training_url" required>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="inputText" class="col col-form-label">Upload
                                                Thumbnail</label>
                                            <!-- <input type="file" class="form-control" id="images" required> -->
                                            <input type="file" required id="training_images" placeholder="Picture"
                                                   class="form-control mb-2">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center pt-3">
                                            <button type="submit" class="btn btn-primary"
                                                    id="_training_section_imgs_btn">
                                                Submit
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
                        <h5 class="card-title">All Create New Training Section</h5>
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
                            foreach ($AllSectionsTraining as $Training_Section_Headings) {
                                ?>
                                <tr>
                                    <td><?= $Training_Section_Headings['id'] ?></td>
                                    <td><?= $Training_Section_Headings['main_heading'] ?></td>
                                    <td><?= $Training_Section_Headings['sub_heading'] ?></td>
                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Section"
                                           onclick="DeleteTrainingSection(`<?= $Training_Section_Headings['id'] ?>//`)">
                                        </i>
                                        <i class="fa fa-edit btn btn-secondary p-2" title="Update Section"
                                           onclick="UpdateTrainingName(`<?= $Training_Section_Headings['id'] ?>`,`<?= $Training_Section_Headings['main_heading'] ?>`,`<?= $Training_Section_Headings['sub_heading'] ?>`)">
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
                        <h5 class="card-title">All Presentations into the Training Section Videos</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Section Name</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($AllSectionsTrainingImages as $Training_Section_Image) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $Training_Section_Image['main_heading'] ?></td>
                                    <td><img src="
                                <?= $Training_Section_Image['image_path'] ?>" style="max-width: 50px;"></td>

                                    <td>
                                        <i class="fa fa-trash p-2 btn btn-danger" title="Delete Section"
                                           onclick="DeleteTrainingImage(`<?= $Training_Section_Image['id'] ?>`)"> </i>

                                        <i class="fa fa-edit btn btn-secondary p-2" title="Update Section"
                                           onclick="UpdateTrainingImage(`<?= $Training_Section_Image['id'] ?>`,`<?= $Training_Section_Image['main_heading'] ?>`)">
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


<!--Section Names Update Modal -->
<div class="modal fade" id="section_update_modal" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Training Section</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map">
                <form id="Update_training_section_form">
                    <input value="" type="hidden" id="section_id">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="inputText" class="col col-form-label">First Name</label>
                            <input type="text" class="form-control" id="tra_f_name" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="inputText" class="col col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="tra_l_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-center pt-3">
                            <button type="submit" class="btn btn-primary" id="update_tra_sec_btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Image Update Modal -->
<div class="modal fade" id="Training_Image_update_modal" data-bs-backdrop="static" data-bs-keyboard="false"
     tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Training Edit Image</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map">
                <form id="Update_training_section_image">
                    <input value="" type="hidden" id="section_id">

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="inputText" class="col col-form-label">Section Name</label>
                            <input type="text" class="form-control" id="training_title" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="inputText" class="col col-form-label">Image</label>
                            <input type="file" class="form-control" id="training_image" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12 text-center pt-3">
                            <button type="submit" class="btn btn-primary" id="update_tra_img_btn">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include_once "includes/dashboard-footer.php"; ?>
<script>
    function UpdateTrainingName(id, main_heading, sub_heading) {
        $("#section_id").val(id)
        $("#tra_f_name").val(main_heading)
        $("#tra_l_name").val(sub_heading)

        $("#section_update_modal").modal('show')
    }

    function UpdateTrainingImage(id, main_heading) {
        $("#section_id").val(id)
        $("#training_title").val(main_heading)

        $("#Training_Image_update_modal").modal('show')
    }
</script>
