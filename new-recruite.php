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
include_once "./serverside/functions.php";
$func=new Functions();
$business_partners_MDs = $func->getAllMD();
$business_partners_SMDs = $func->getAllSMD();
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
                            <select required id="resident_state" class="form-control mb-2">
                                <option value="AL" id="alabama">Alabama</option>
                                <option value="AK" id="alaska">Alaska</option>
                                <option value="AZ" id="arizona">Arizona</option>
                                <option value="AR" id="arkansas">Arkansas</option>
                                <option value="CA" id="california">California</option>
                                <option value="CO" id="colorado">Colorado</option>
                                <option value="CT" id="connecticut">Connecticut</option>
                                <option value="DE" id="delaware">Delaware</option>
                                <option value="FL" id="florida">Florida</option>
                                <option value="GA" id="georgia">Georgia</option>
                                <option value="HI" id="hawaii">Hawaii</option>
                                <option value="ID" id="idaho">Idaho</option>
                                <option value="IL" id="illinois">Illinois</option>
                                <option value="IN" id="indiana">Indiana</option>
                                <option value="IA" id="iowa">Iowa</option>
                                <option value="KS" id="kansas">Kansas</option>
                                <option value="KY" id="kentucky">Kentucky</option>
                                <option value="LA" id="louisiana">Louisiana</option>
                                <option value="ME" id="maine">Maine</option>
                                <option value="MD" id="maryland">Maryland</option>
                                <option value="MA" id="massachusetts">Massachusetts</option>
                                <option value="MI" id="michigan">Michigan</option>
                                <option value="MN" id="minnesota">Minnesota</option>
                                <option value="MS" id="mississippi">Mississippi</option>
                                <option value="MO" id="missouri">Missouri</option>
                                <option value="MT" id="montana">Montana</option>
                                <option value="NE" id="nebraska">Nebraska</option>
                                <option value="NV" id="nevada">Nevada</option>
                                <option value="NH" id="new_hampshire">New Hampshire</option>
                                <option value="NJ" id="new_jersey">New Jersey</option>
                                <option value="NM" id="new_mexico">New Mexico</option>
                                <option value="NY" id="new_york">New York</option>
                                <option value="NC" id="north_carolina">North Carolina</option>
                                <option value="ND" id="north_dakota">North Dakota</option>
                                <option value="OH" id="ohio">Ohio</option>
                                <option value="OK" id="oklahoma">Oklahoma</option>
                                <option value="OR" id="oregon">Oregon</option>
                                <option value="PA" id="pennsylvania">Pennsylvania</option>
                                <option value="RI" id="rhode_island">Rhode Island</option>
                                <option value="SC" id="south_carolina">South Carolina</option>
                                <option value="SD" id="south_dakota">South Dakota</option>
                                <option value="TN" id="tennessee">Tennessee</option>
                                <option value="TX" id="texas">Texas</option>
                                <option value="UT" id="utah">Utah</option>
                                <option value="VT" id="vermont">Vermont</option>
                                <option value="VA" id="virginia">Virginia</option>
                                <option value="WA" id="washington">Washington</option>
                                <option value="WV" id="west_virginia">West Virginia</option>
                                <option value="WI" id="wisconsin">Wisconsin</option>
                                <option value="WY" id="wyoming">Wyoming</option>
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
                                <?php
                                foreach ($business_partners_MDs as $business_partners_MD) {
                                    ?>
                                    <option value="<?= $business_partners_MD['md'] ?>"> <?= $business_partners_MD['md'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="direct_SMD" class="col-sm-12 col-form-label fw-bolder">Direct SMD
                                <span class="text-danger">*</span></label>
                            <select name="tab_access"  data-live-search="true"
                                    class="selectpicker mb-3 w-100"
                                    aria-label="select example" id="direct_SMD" required>
                                <?php
                                foreach ($business_partners_SMDs as $business_partners_SMD) {
                                    ?>
                                    <option value="<?= $business_partners_SMD['add_smd'] ?>"> <?= $business_partners_SMD['add_smd'] ?></option>
                                    <?php
                                }
                                ?>
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
                        <button type="submit" class="btn btn-primary px-5 py-2" id="sub_btn">New Business Partner</button>
                    </div>
            </div>
        </div>
    </section>

<?php include_once "includes/footer.php" ?>