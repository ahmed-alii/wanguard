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
                            <div class="col-md-4 offset-md-4">
                                <form id="signup">
                                    <input type="text" required id="name" placeholder="Enter your name" class="form-control mb-2">
                                    <input type="email" required id="email" placeholder="Enter your Email" class="form-control mb-2">
                                    <input type="password" required id="password" placeholder="Enter your Password" class="form-control mb-2">

                                    <button type="submit" id="signup_btn" class="btn btn-primary">Register Account</button>
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