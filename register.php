<?php include_once "includes/header.php" ?>
    <section class="section-wrapper w-100 py-5 login-section">
        <div class="container">
            <div class="card bg-black text-white">
                <div class="card-body text-center">
                    <img src="assets/images/logo3.png" class="img-fluid px-4">
                    <h2 class="fw-light mt-3">VANGUARD WEALTH BUILDERS</h2>
                    <div>
                        <p> Register Account </p>
                        <div class="row">
                            <div class="col-md-12">
                                <form id="signup">
                                        <div class="row justify-content-sm-center py-2">
                                            <div class="col-4">
                                                <input type="email" required id="email" placeholder="Email"
                                                       class="form-control mb-2">
                                            </div>
                                            <div class="col-4">
                                                <input type="password" required id="password"
                                                       placeholder="Password" class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row justify-content-sm-center py-2">
                                            <div class="col-4">
                                                <input type="text" required id="f_name" placeholder="First Name"
                                                       class="form-control mb-2">
                                            </div>
                                            <div class="col-4">
                                                <input type="text" required id="l_name" placeholder="Last Name"
                                                       class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row justify-content-sm-center py-2">
                                            <div class="col-4">
                                                <input type="number" required id="agent_code" placeholder="Agent Code"
                                                       class="form-control mb-2">
                                            </div>
                                            <div class="col-4">
                                                <input type="number" required id="phone_no" placeholder="Phone No."
                                                       class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row justify-content-sm-center py-2">
                                            <div class="col-4">
                                                <input type="text" required id="business_partner" placeholder="Business Partner"
                                                       class="form-control mb-2">

                                            </div>
                                            <div class="col-4">
                                                <select required id="us_states" class="form-control mb-2">
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
                                        <div class="row justify-content-sm-center py-2">
                                            <div class="col-8">
                                                <input type="file" required id="image" placeholder="Picture"
                                                       class="form-control mb-2">
                                            </div>
                                        </div>

                                    <button type="submit" id="signup_btn" class="btn btn-primary my-3">Register Account
                                    </button>
                                </form>
                            </div>
                        </div>
                        <a href="login" class="text-danger btn btn-link">Login Instead? </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once "includes/footer.php" ?>