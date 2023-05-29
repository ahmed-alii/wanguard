<?php include_once "includes/header.php" ?>

    <section class="section-wrapper w-100 py-5 login-section">
        <div class="container">
            <div class="card bg-black text-white">
                <div class="card-body text-center">
                    <img src="assets/images/logo3.png" class="img-fluid px-4">
                    <h2 class="fw-light mt-3">VANGUARD WEALTH BUILDERS</h2>
                    <div>
                        <p> Login to your Account </p>
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form id="login" >
                                    <input type="email" name="email" id="email" required placeholder="Enter your Email" class="form-control mb-2">
                                    <input type="password" name="password" id="password" required placeholder="Enter your Password" class="form-control mb-2">

                                    <button type="submit" id="login_btn" class=" btn btn-primary">Sign-in</button>
                                </form>
                            </div>
                        </div>
                        <a href="resetpassword" class=" my-2 btn btn-link">Lost your password? </a>
                        <a href="register" class="btn btn-link">Register Account? </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once "includes/footer.php" ?>