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
                <p>Another family served and taken care of. Help us help you by submitting the policy/application
                    information so we can help you expedite an approval and get you compensated quickly!</p>
            </div>
            <div class="">
                <form action="">
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
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Policy Number</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Submitted
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Coverage /Rollover
                                Amount</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Estimated Points
                                <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-3">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">CWA (Cash w/Application)
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
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Writing Agent
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Trainee</label>
                        <div class="col-sm-12">
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Split
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-12">
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                               id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1"> Yes </label>
                                    </div>
                                    <div class="form-check mx-3">
                                        <input class="form-check-input" type="radio" name="gridRadios"
                                               id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2"> No </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Split Agent
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Split
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Product
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Provider
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Med Required?
                                <span class="text-danger">*</span>
                            </label>
                            <select name="tab_access" id="tab_access" data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" required>
                                <option value="0">1</option>
                                <option value="1">2</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Contact #</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Email Address</label>
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