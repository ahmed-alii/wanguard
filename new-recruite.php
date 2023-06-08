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
                <p>Congrats on building your agency. Take a minute to enter your new agent's info so they can get our
                    welcome and onboarding email. </p>
            </div>
            <div class="">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Agent ID
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Start Date
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">First Name
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Last Name
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Resident State
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Recruiter
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Direct MD
                                <span class="text-danger">*</span></label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Direct SMD
                                <span class="text-danger">*</span></label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Licensed
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

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Contact Number
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Birthdate
                                </label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Email Address</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="home-adrress" class="col-sm-12 col-form-label fw-bolder">Home Address</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-secondary px-5 py-2">Add Another +</button>
                        <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                    </div>
            </div>
        </div>
    </section>


<?php include_once "includes/footer.php" ?>