<?php include_once "includes/header.php";

include_once "./serverside/functions.php";
$func = new Functions();
$users = $func->getAllUser();

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
            <form id="new-client1">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">First Name
                            <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="" id="f_name" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Last Name
                            <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="" id="l_name" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Policy Number</label>
                        <input type="text" class="form-control" placeholder="" id="policy_name">
                    </div>
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Submitted
                            <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" placeholder="" id="submitted_date" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <label for="Coverage/Rollover" class="col-sm-12 col-form-label fw-bolder">Coverage /Rollover
                            Amount</label>
                        <input type="text" class="form-control" placeholder="" id="coverage" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="monthly_saving" class="col-sm-12 col-form-label fw-bolder">Monthly Savings ($)</label>
                        <input type="number" class="form-control" placeholder="" id="monthly_saving" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Estimated Points
                            <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" placeholder="" id="estimated_points" required>
                    </div>
                    <div class="col-lg-3">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">CWA (Cash w/Application)
                            <span class="text-danger">*</span></label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="CWA" aria-label="select example" required>
                            <option value="0">Yes</option>
                            <option value="1">No</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Writing Agent
                        <span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="writing_agent" aria-label="select example" required>
                            <?php
                            foreach ($users as $user) {
                            ?>
                                <option value="<?= $user['fname'] ?> <?= $user['lname'] ?>"> <?= $user['fname'] ?> <?= $user['lname'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Trainee</label>
                    <div class="col-sm-12">
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="trainee" aria-label="select example" required>
                            <option value="">Empty</option>
                            <?php
                            foreach ($users as $user) {
                            ?>
                                <option value="<?= $user['fname'] ?> <?= $user['lname'] ?>"> <?= $user['fname'] ?> <?= $user['lname'] ?></option>
                            <?php
                            }
                            ?>
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
                                    <input class="form-check-input" type="radio" name="split_option" id="split" value="YES" checked>
                                    <label class="form-check-label" for="gridRadios1"> Yes </label>
                                </div>
                                <div class="form-check mx-3">
                                    <input class="form-check-input" type="radio" name="split_option" id="split" value="NO">
                                    <label class="form-check-label" for="gridRadios2"> No </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Split Agent
                            <span class="text-danger">*</span>
                        </label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="split_agent" aria-label="select example" required>
                            <option value="YES">Yes</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Agent Policy
                            <span class="text-danger">*</span>
                        </label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="agent_policy" aria-label="select example" required>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Product
                            <span class="text-danger">*</span>
                        </label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="product" aria-label="select example" required>
                            <option value="Annuity">Annuity</option>
                            <option value="Debt">Debt</option>
                            <option value="Estate">Estate </option>
                            <option value="Planning">Planning</option>
                            <option value="Final Expense">Final Expense</option>
                            <option value="IUL">IUL</option>
                            <option value="IUL w/LTC">IUL w/LTC</option>
                            <option value="Term">Term</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Provider
                            <span class="text-danger">*</span>
                        </label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="provider" aria-label="select example" required>
                            <option value="Athene">Athene</option>
                            <option value="Debtmerica">Debtmerica</option>
                            <option value="Everest">Everest</option>
                            <option value="LSPN">LSPN</option>
                            <option value="Nationwide">Nationwide</option>
                            <option value="Pacific">Pacific</option>
                            <option value="Transamerica">Transamerica</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Med Required?
                            <span class="text-danger">*</span>
                        </label>
                        <select name="tab_access" data-live-search="true" class="selectpicker mb-3 w-100" id="med_required" aria-label="select example" required>
                            <option value="YES">Yes</option>
                            <option value="NO">No</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Contact #</label>
                        <input type="text" class="form-control" placeholder="" id="contact_no" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Email Address</label>
                        <input type="text" class="form-control" placeholder="" id="email_address" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="inputEmail" class="col-sm-12 col-form-label fw-bolder">Add Notes</label>
                        <textarea class="form-control" rows="4" id="add_notes"></textarea>
                    </div>

                </div>

                <div class="col-sm-12 text-center">
                    <!--                        <button type="button" class="btn btn-secondary px-5 py-2" onclick="refreshPage()">Add Another +</button>-->
                    <button type="submit" class="btn btn-primary px-5 py-2" id="sub_btn">Submit</button>
                </div>
        </div>
    </div>
</section>


<?php include_once "includes/footer.php" ?>