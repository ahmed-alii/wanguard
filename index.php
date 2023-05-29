<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id'])){
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}
include_once "serverside/functions.php";
$func=new Functions();
$events=$func->getAllEvents();

?>
    <section class="bg-black hero-section">
        <div class="container py-5">
            <div class="img-wrapper text-center">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <img src="assets/images/logo2.png" class="img-fluid hero-logo">
                    </div>

                    <div class="col-12 my-5">
                        <h1 class="display-5 fw-bold text-primary text-uppercase">The VANGUARD Wealth Builders</h1>
                        <span class="line-20"></span>
                        <h4 class="text-white fw-light">Helping People Build & Protect Their Wealth</h4>
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
                                        <p class="card-text py-3">Request Match Up</p>
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
                                        <p class="card-text py-3">New Team Recruit</p>
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

    <section class="section3-wrapper py-5">
        <div class="container">
            <div class="row px-5">
                <div class="col-7">
                    <div class="card h-100 bg-light">
                        <div class="card-header bg-danger">
                            <h2 class="text-white"><i class="text-dark fa fa-calendar"></i> The Force Agency Calendar</h2>
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <?php
                            foreach ($events as $event){
                                ?>
                                <a target="" class="text-decoration-none" href="<?=$event['event_link']?>"><p class="text-danger fw-bold"><?=$event['name']?></p></a>
                                <p class=""><?=$event['description']?></p>
                                <p class=""><i class="fa fa-map-marker"></i> <?=$event['location']?></p>
                                <p class=""><i class="fa fa-clock-o"></i> <?=date('F d Y',strtotime($event['date'])) ." ".date('H:i A',strtotime($event['time']))?></p>
                                <hr>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="wrapper3">
                        <h3 class="fw-bold">
                            IN BUSINESS FOR YOURSELF, BUT NEVER BY YOURSELF.
                        </h3>
                        <p class="py-4">Trainings are endless and ongoing. There's a training for everything. Want to
                            learn
                            about a
                            product?
                            There's a training for that. Need to learn about our system? There's a training for that.
                            Looking to
                            improve your leadership skills? There's a training for that. You will not fail here for lack
                            of
                            resources. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" height="25px" width="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="contacts-44"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path
                                            d="M9,12c2.757,0,5-2.243,5-5V5c0-2.757-2.243-5-5-5S4,2.243,4,5v2C4,9.757,6.243,12,9,12z"></path>
                                    <path
                                            d="M15.423,15.145C14.042,14.622,11.806,14,9,14s-5.042,0.622-6.424,1.146C1.035,15.729,0,17.233,0,18.886V24 h18v-5.114C18,17.233,16.965,15.729,15.423,15.145z"></path>
                                    <rect data-color="color-2" x="16" y="3" width="8" height="2"></rect>
                                    <rect data-color="color-2" x="16" y="8" width="8" height="2"></rect>
                                    <rect data-color="color-2" x="19" y="13" width="5"
                                          height="2"></rect>
                                </g></svg>
                            AGENT TRAINING
                        </h5>
                        <p class="py-2">Weekly trainings available covering the A's to Z's of our business and
                            system. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" width="25px" height="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="hotel"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path data-color="color-2"
                                          d="M22,24h1c0.6,0,1-0.4,1-1v-9c0-0.6-0.4-1-1-1h-1v10V24z"></path>
                                    <path data-color="color-2"
                                          d="M2,23V13H1c-0.6,0-1,0.4-1,1v9c0,0.6,0.4,1,1,1h1V23z"></path>
                                    <path
                                            d="M19,0H5C4.4,0,4,0.4,4,1v22c0,0.6,0.4,1,1,1h6v-4h2v4h6c0.6,0,1-0.4,1-1V1C20,0.4,19.6,0,19,0z M10,17H7v-2 h3V17z M10,13H7v-2h3V13z M10,9H7V7h3V9z M10,5H7V3h3V5z M17,17h-3v-2h3V17z M17,13h-3v-2h3V13z M17,9h-3V7h3V9z M17,5h-3V3h3V5z"></path>
                                </g></svg>
                            COMPANY OVERVIEWS
                        </h5>
                        <p class="py-2">These type of events, wether on Zoom or in person are designed to help you
                            market
                            our products, services and opportunity. These are great resources to leverage a group of
                            people
                            who want to learn more about who we are and what we do. </p>
                    </div>
                    <div class="wrapper3 py-3">
                        <h5 class="fw-bold">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 x="0px" y="0px" width="25px" height="25px" viewBox="0 0 24 24" xml:space="preserve"
                                 class="" data-type="glyph" data-name="trend-up"><g
                                        class="nc-icon-wrapper" fill="#CA4152">
                                    <path
                                            d="M23,6H13l4.503,4.503l-4.541,5.045l-5.255-5.255c-0.391-0.391-1.023-0.391-1.414,0l-5,5 c-0.391,0.391-0.391,1.023,0,1.414s1.023,0.391,1.414,0L7,12.414l5.293,5.293C12.48,17.895,12.735,18,13,18 c0.286,0,0.555-0.122,0.743-0.331l5.175-5.75L23,16V6z"></path>
                                </g></svg>
                            PRODUCT TRAINING
                        </h5>
                        <p class="py-2">Learn the ins and outs of the products and services we provide. Every provider
                            and
                            company we represent has continuous and ongoing training. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                        <form action="">
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Event Attending <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select name="tab_access" id="tab_access" data-live-search="true"
                                            class="selectpicker mb-3 w-100"
                                            aria-label="select example" required>
                                        <option value="0">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Enter your guest's
                                    name <span class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">They're a.... <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select name="tab_access" id="tab_access" data-live-search="true"
                                            class="selectpicker mb-3 w-100"
                                            aria-label="select example" required>
                                        <option value="0">Select</option>
                                        <option value="1">Client</option>
                                        <option value="2">Friend</option>
                                        <option value="3">Co-workers</option>
                                        <option value="4">Prospect</option>
                                        <option value="5">Relative</option>
                                        <option value="6">Referral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Guest of <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <select name="tab_access" id="tab_access" data-live-search="true"
                                            class="selectpicker mb-3 w-100"
                                            aria-label="select example" required>
                                        <option value="0">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Contact Number <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="tel" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Guest's Email <span
                                            class="text-danger">*</span></label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-5 col-form-label fw-bolder">Guest approved to
                                    receive email confirmation? <span class="text-danger">*</span></label>
                                <div class="col-sm-7">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                               id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1"> Yes </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                               id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2"> No </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include_once "includes/footer.php" ?>