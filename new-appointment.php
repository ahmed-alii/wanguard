<?php include_once "includes/header.php" ?>
<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id'])) {
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}

?>
    <section>
        <div class="container py-5">
            <div class="py-3">
                <h1 class="text-primary fw-bolder">AWESOME WORK!</h1>
                <p>You're on your way to mastering this business and our process. Every appointment helps you get hands
                    on experience and teaches you how simple it is to duplicate getting a result. Aim to leverage the
                    expertise of the amazing trainers we have and lastly our main goal is to properly train you before
                    you go off on your own.</p>
            </div>
            <div class="">
                <form action="">
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Trainee or Agent scheduling
                            appointment?<span
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
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Appointment Type
                                <span class="text-danger">*</span>
                            </label>
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
                        <div class="col-lg-8">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Who are we seeing?
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                                <span class="input-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Date of Appointment
                                <span class="text-danger">*</span>
                            </label>
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
                        <div class="col-lg-8">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">TimeZone
                                <span class="text-danger">*</span>
                            </label>
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
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Match-Up Requested
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-12">
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
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Match-Up Requested
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Married
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Age 25+
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Has dependent children
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                           checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Homeowner
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Employed
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">They're a
                                <span class="text-danger">*</span>
                            </label>
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
                    </div>

                    <div class="form-group mb-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Description
                            <span class="text-danger">*</span>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        <span class="input-description">How did you set this appointment up? What did you say? Anything we should know about
                            them before we meet them?</span>
                    </div>
                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-secondary px-5 py-2">Add Another +</button>
                        <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                    </div>
            </div>
        </div>
    </section>


<?php include_once "includes/footer.php" ?>