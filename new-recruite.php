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
                <form id="new-recruit">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="agent_id" class="col-sm-12 col-form-label fw-bolder">Agent ID
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" id="agent_id" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Start Date
                                <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" placeholder="" id="start_date" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="f_name" class="col-sm-12 col-form-label fw-bolder">First Name
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" id="f_name" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="l_name" class="col-sm-12 col-form-label fw-bolder">Last Name
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" id="l_name" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="resident_state" class="col-sm-12 col-form-label fw-bolder">Resident State
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" id="resident_state" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <label for="Recruiter" class="col-sm-12 col-form-label fw-bolder">Recruiter
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access"  data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" id="recruiter" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="direct_MD" class="col-sm-12 col-form-label fw-bolder">Direct MD
                                <span class="text-danger">*</span></label>
                            <select name="tab_access"  data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" id="direct_MD" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="direct_SMD" class="col-sm-12 col-form-label fw-bolder">Direct SMD
                                <span class="text-danger">*</span></label>
                            <select name="tab_access"  data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" id="direct_SMD" required>
                                <option value="0">Yes</option>
                                <option value="1">No</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="licensed" class="col-sm-12 col-form-label fw-bolder">Licensed
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="licensed"
                                       id="gridRadios1" value="Yes" checked>
                                <label class="form-check-label" for="gridRadios1"> Yes </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="licensed"
                                       id="gridRadios2" value="No">
                                <label class="form-check-label" for="gridRadios2"> No </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="contact_no" class="col-sm-12 col-form-label fw-bolder">Contact Number
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="" id="contact_no">
                        </div>
                        <div class="col-lg-6">
                            <label for="birthdate" class="col-sm-12 col-form-label fw-bolder">Birthdate
                                </label>
                            <input type="date" class="form-control" placeholder="" id="birthdate" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Email Address</label>
                            <input type="text" class="form-control" placeholder="" id="email_address" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="home-adrress" class="col-sm-12 col-form-label fw-bolder">Home Address</label>
                            <input type="text" class="form-control" placeholder="" id="home_address" required>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <button type="button" class="btn btn-secondary px-4 py-2" onclick="refreshPage()">Add Another +</button>
                        <button type="submit" class="btn btn-primary px-5 py-2" id="sub_btn">Submit</button>
                    </div>
            </div>
        </div>
    </section>

<?php include_once "includes/footer.php" ?>