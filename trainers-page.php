<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] == 0) {
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}

include_once "serverside/functions.php";
$func=new Functions();
$recruitment_tools = $func->getAllRecruitmetTools();
$client_tools = $func->getAllClientTools();
$users = $func->getAllUser();

?>

    <section class="bg-black" id="section1">
        <div class="container py-5">
            <div class="pt-5">
                <h2 class="fw-bolder text-primary text-center display-3">VANGUARD WEALTH BUILDER</h2>
                <h2 class="fw-bolder text-center display-5">AGENT TOOLS</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="py-5">
                        <nav class="pt-5">
                            <div class="nav nav-tabs mb-3 justify-content-center " id="nav-tab" role="tablist">
                                <button class="nav-link active text-white" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">
                                    <div class="map">
                                        <div class="map-item">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 24 24"
                                                 xml:space="preserve" class="brz-icon-svg align-[initial]"
                                                 data-type="outline"
                                                 data-name="b-add"><g transform="translate(0, 0)"
                                                                      class="nc-icon-wrapper"
                                                                      fill="none">
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M10,20.836 c0-0.604-0.265-1.179-0.738-1.554C8.539,18.708,7.285,18,5.5,18s-3.039,0.708-3.762,1.282C1.265,19.657,1,20.232,1,20.836V22h9 V20.836z"
                                                          stroke-linejoin="miter"></path>
                                                    <circle fill="none" stroke="currentColor"
                                                            vector-effect="non-scaling-stroke"
                                                            stroke-linecap="square" stroke-miterlimit="10" cx="5.5"
                                                            cy="12.5"
                                                            r="2.5" stroke-linejoin="miter"></circle>
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M23,20.836 c0-0.604-0.265-1.179-0.738-1.554C21.539,18.708,20.285,18,18.5,18s-3.039,0.708-3.762,1.282C14.265,19.657,14,20.232,14,20.836V22 h9V20.836z"
                                                          stroke-linejoin="miter"></path>
                                                    <circle fill="none" stroke="currentColor"
                                                            vector-effect="non-scaling-stroke"
                                                            stroke-linecap="square" stroke-miterlimit="10" cx="18.5"
                                                            cy="12.5"
                                                            r="2.5" stroke-linejoin="miter"></circle>
                                                    <line data-color="color-2" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="8"
                                                          stroke-linejoin="miter"></line>
                                                    <line data-color="color-2" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10" x1="9" y1="5" x2="15" y2="5"
                                                          stroke-linejoin="miter"></line>
                                                </g></svg>
                                        </div>
                                    </div>

                                    RECRUITING TOOLS
                                </button>
                                <button class="nav-link text-white" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile"
                                        aria-selected="false">
                                    <div class="map">
                                        <div class="map-item">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 24 24" xml:space="preserve"
                                                 class="brz-icon-svg align-[initial]" data-type="outline"
                                                 data-name="handshake"><g transform="translate(0, 0)"
                                                                          class="nc-icon-wrapper" fill="none">
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M2.546,12.94l-0.259-0.35 C0.315,9.704,0.609,5.733,3.171,3.171C5.333,1.01,8.735,0.236,12,1.923"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M18,7c-2,2-6,0-6,0l-1,1 C9.343,9.657,6.657,9.657,5,8l0,0l5.345-4.829c2.949-2.949,7.763-2.894,10.642,0.164c2.783,2.955,2.492,7.67-0.379,10.54 l-0.271,0.272"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10"
                                                          d="M7.682,21.218l-4.95-4.95 c-0.976-0.976-0.976-2.559,0-3.536l0,0c0.976-0.976,2.559-0.976,3.536,0l4.95,4.95c0.976,0.976,0.976,2.559,0,3.536l0,0 C10.241,22.194,8.658,22.194,7.682,21.218z"
                                                          stroke-linejoin="miter"></path>
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M14.234,7.749l5.473,5.473 c1.172,1.172,1.172,3.071,0,4.243l-4.243,4.243c-1.172,1.172-3.071,1.172-4.243,0l-0.269-0.259"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                </g></svg>
                                        </div>
                                    </div>
                                    CLIENT TOOLS
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">

                                <div class="container text-center">

                                    <?php
                                    foreach ($recruitment_tools as $r_tools) {
                                        ?>

                                        <a href="<?= $r_tools['recruitment_link'] ?>" class="btn btn-rounded py-2 mx-3 my-3">
                                           <?= $r_tools['recruitment_Name'] ?>
                                        </a>
                                        <?php
                                    }
                                    ?>


                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="container text-center">
                                    <?php
                                    foreach ($client_tools as $r_tools) {
                                        ?>

                                        <a href="<?= $r_tools['client_link'] ?>" class="btn btn-rounded py-2 mx-3 my-3">
                                             <?= $r_tools['client_name'] ?>
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2-wrapper py-5">
        <div class="container section2-inner py-5">
            <div class="position-relative">
                <div class="position-absolute cards-position w-100">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-10 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="card card-wrapper"
                                 data-bs-toggle="modal" data-bs-target="#add-guest-modal">
                                <div class="card-body card-content text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         x="0px" y="0px" height="60px" width="60px" viewBox="0 0 24 24"
                                         xml:space="preserve"
                                         class="brz-icon-svg align-[initial]" data-type="glyph" data-name="multiple-11">
                            <g class="nc-icon-wrapper" fill="currentColor">
                                <path fill="currentColor"
                                      d="M12,6L12,6c-1.657,0-3-1.343-3-3v0c0-1.657,1.343-3,3-3h0c1.657,0,3,1.343,3,3v0C15,4.657,13.657,6,12,6z"></path>
                                <path data-color="color-2" fill="currentColor"
                                      d="M4,19v-8c0-1.13,0.391-2.162,1.026-3H2c-1.105,0-2,0.895-2,2v6h2v5c0,0.552,0.448,1,1,1h2 c0.552,0,1-0.448,1-1v-2H4z"></path>
                                <path fill="currentColor"
                                      d="M14,24h-4c-0.552,0-1-0.448-1-1v-6H6v-6c0-1.657,1.343-3,3-3h6c1.657,0,3,1.343,3,3v6h-3v6 C15,23.552,14.552,24,14,24z"></path>
                                <path data-color="color-2" fill="currentColor"
                                      d="M4,7L4,7C2.895,7,2,6.105,2,5v0c0-1.105,0.895-2,2-2h0c1.105,0,2,0.895,2,2v0 C6,6.105,5.105,7,4,7z"></path>
                                <path data-color="color-2" fill="currentColor"
                                      d="M20,19v-8c0-1.13-0.391-2.162-1.026-3H22c1.105,0,2,0.895,2,2v6h-2v5c0,0.552-0.448,1-1,1h-2 c-0.552,0-1-0.448-1-1v-2H20z"></path>
                                <path data-color="color-2" fill="currentColor"
                                      d="M20,7L20,7c1.105,0,2-0.895,2-2v0c0-1.105-0.895-2-2-2h0c-1.105,0-2,0.895-2,2v0 C18,6.105,18.895,7,20,7z"></path>
                            </g>
                        </svg>
                                    <p class="card-text py-3">Add Guest</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <a href="new-appointment" class="text-decoration-none">
                                <div class="card card-wrapper">

                                    <div class="card-body card-content text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             x="0px"
                                             y="0px" viewBox="0 0 24 24"
                                             class="brz-icon-svg align-[initial]" height="60px" width="60px"
                                             data-type="glyph"
                                             data-name="calendar-grid-58">
                                            <g class="nc-icon-wrapper" fill="currentColor">
                                                <path fill="currentColor"
                                                      d="M23,2h-4V0h-2v2h-4V0h-2v2H7V0H5v2H1C0.448,2,0,2.448,0,3v20c0,0.552,0.448,1,1,1h22c0.552,0,1-0.448,1-1V3 C24,2.448,23.552,2,23,2z M22,22H2V8h20V22z"></path>
                                                <rect data-color="color-2" x="4" y="11" fill="currentColor" width="4"
                                                      height="3"></rect>
                                                <rect data-color="color-2" x="10" y="11" fill="currentColor" width="4"
                                                      height="3"></rect>
                                                <rect data-color="color-2" x="4" y="16" fill="currentColor" width="4"
                                                      height="3"></rect>
                                                <rect data-color="color-2" x="10" y="16" fill="currentColor" width="4"
                                                      height="3"></rect>
                                                <rect data-color="color-2" x="16" y="11" fill="currentColor" width="4"
                                                      height="3"></rect>
                                            </g>
                                        </svg>
                                        <p class="card-text py-3">Request Trainer</p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="col-10 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <a href="new-recruite" class="text-decoration-none">
                                <div class="card card-wrapper">
                                    <div class="card-body card-content text-center">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" height="60px"
                                             width="60px"
                                             class="brz-icon-svg align-[initial]" data-type="glyph" data-name="a-add"><g
                                                    class="nc-icon-wrapper" fill="currentColor">
                                                <path fill="currentColor"
                                                      d="M9,12c2.761,0,5-3.239,5-6V5c0-2.761-2.239-5-5-5S4,2.239,4,5v1C4,8.761,6.239,12,9,12z"></path>
                                                <path fill="currentColor"
                                                      d="M16.257,15.315c-0.093-0.043-0.184-0.088-0.283-0.121C14.329,14.638,11.824,14,9,14 s-5.329,0.638-6.974,1.193C0.81,15.604,0,16.749,0,18.032V22h14.349C14.127,21.374,14,20.702,14,20 C14,18.103,14.883,16.414,16.257,15.315z"></path>
                                                <polygon data-color="color-2" fill="currentColor"
                                                         points="21,16 19,16 19,19 16,19 16,21 19,21 19,24 21,24 21,21 24,21 24,19 21,19 "></polygon>
                                            </g></svg>
                                        <p class="card-text py-3">New Business Partner</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-10 col-md-6 col-lg-3 mb-5 mb-lg-0">
                            <a href="new-client" class="text-decoration-none">
                                <div class="card card-wrapper">
                                    <div class="card-body card-content text-center">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             x="0px" y="0px" height="60px" width="60px"
                                             viewBox="0 0 24 24" xml:space="preserve"
                                             class="brz-icon-svg align-[initial]"
                                             data-type="glyph"
                                             data-name="handshake"><g class="nc-icon-wrapper" fill="currentColor">
                                                <path fill="currentColor"
                                                      d="M21.7,2.633c-1.577-1.666-3.707-2.601-5.997-2.632c-1.321-0.013-2.593,0.278-3.739,0.823 c-3.31-1.48-6.985-0.875-9.5,1.64c-2.817,2.818-3.263,7.222-1.074,10.57C1.126,13.89,1.322,14.858,2,15.536l6.414,6.414 c0.635,0.635,1.524,0.849,2.339,0.659c0.746,0.639,1.663,0.975,2.59,0.975c1.024,0,2.05-0.39,2.829-1.17l4.242-4.243 c0.756-0.755,1.172-1.76,1.172-2.828c0-0.318-0.048-0.626-0.119-0.927C24.621,11.087,24.746,5.85,21.7,2.633z M19,16.757L14.758,21 c-0.64,0.639-1.603,0.745-2.368,0.33c0.489-0.942,0.35-2.125-0.44-2.916L5.536,12c-0.74-0.74-1.828-0.917-2.737-0.534 c-1.344-2.467-0.946-5.561,1.08-7.587C5.484,2.272,7.723,1.7,9.906,2.221C9.83,2.291,9.749,2.356,9.676,2.429L3.549,7.963 l0.744,0.744c1.503,1.502,3.824,1.788,5.647,0.695l2.129-1.278c0.392,0.16,0.977,0.371,1.657,0.53c1.982,0.408,4.607-0.8,4.607-0.8 s-0.792,1.312-3.008,2.399L19,13.929c0.378,0.378,0.586,0.88,0.586,1.415S19.378,16.379,19,16.757z"></path>
                                            </g>
                        </svg>
                                        <p class="card-text py-3">New Family/Client</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    $allsections = $func->getAllsections();
    foreach($allsections as $section){
        $sectionimages = $func->getsectionimages($section['id']);

 ?>
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 fw-bolder"><?=$section['main_heading']?></h1>
            </div>
            <div class="text-center py-3">
                <h1><?=$section['sub_heading']?></h1>
            </div>

            <div class="row justify-content-center">
                <?php 
                    foreach($sectionimages as $s_image){
                        $imagepath = substr($s_image['image_path'], 3);
                        ?>
                            <div class="col-12 col-lg-3 p-2">
                                <div class="business-img">
                                    <a href="<?=$s_image['image_url']?>" target="_blank"><img src="<?=$imagepath?>" alt="" class="img-fluid">
                                        </a>
                                </div>
                            </div>
                        <?php

                    }

                 ?>
                
            </div>
        </div>
    </section>
<?php 

}
 ?>
    <!--add-guest Modal -->
    <div class="modal fade" id="add-guest-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="fw-bolder">Welcome!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body map">
                    <p>Enter your Guest's information below.</p>
                    <div class="container">
                        <form id="add_guests">
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Event Attending <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="events" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Enter your guest's
                                    name <span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="guest_name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">They're a.... <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select name="tab_access" data-live-search="true"
                                            class="selectpicker mb-3 w-100" id="they_are"
                                            aria-label="select example" required>
                                        <option value="Select">Select</option>
                                        <option value="Client">Client</option>
                                        <option value="Friend">Friend</option>
                                        <option value="Co-workers">Co-workers</option>
                                        <option value="Prospect">Prospect</option>
                                        <option value="Relative">Relative</option>
                                        <option value="Referral">Referral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Guest of <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select name="tab_access" data-live-search="true"
                                            class="selectpicker mb-3 w-100" id="guest_of"
                                            aria-label="select example" required>
                                        <?php
                                        foreach ($users as $user) {
                                            ?>
                                            <option value="<?= $user['fname'] ?>"> <?= $user['fname'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Contact Number <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="tel" class="form-control" id="contact_number" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Guest's Email <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="guest_mail" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-5 col-form-label fw-bolder">Guest approved to
                                    receive email confirmation? <span class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="guest_app_confirm"
                                               id="gridRadios1" value="YES">
                                        <label class="form-check-label" for="gridRadios1"> Yes </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="guest_app_confirm"
                                               id="gridRadios2" value="No">
                                        <label class="form-check-label" for="gridRadios2"> No </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2" id="sub_btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include_once "includes/footer.php" ?>