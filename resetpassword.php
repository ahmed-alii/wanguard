<?php include_once "includes/header.php" ?>

    <section class="section-wrapper w-100 py-5 login-section">
        <div class="container">
            <div class="card bg-black text-white">
                <div class="card-body text-center">
                    <img src="assets/images/logo3.png" class="img-fluid px-4">
                    <h2 class="fw-light mt-3">VANGUARD WEALTH BUILDERS</h2>
                    <div>
                        <?php
                        if(isset($_GET['resetpsw'])){
                            ?>
                            <p> Update password </p>
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                            <form id="recoverPassword" >
                                <input type="hidden" value="<?=$_GET['resetpsw']?>" id="reset_Code">
                                <input type="password" name="password" id="password" required placeholder="Enter new  password" class="form-control mb-2">
                                <input type="password" name="confirm_pass" id="confirm_pass" required placeholder="Re-enter new password" class="form-control mb-2">

                                <button type="submit" id="recoverPass_btn" class=" btn btn-primary">Update</button>
                            </form>
                            </div>
                        </div>
                            <?php
                        }else{
                            ?>
                            <p>Forgot password  </p>
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                            <form id="forget_password_email" >
                                <input type="email" name="forgetemail" id="forgetemail" required placeholder="Enter your Email" class="form-control mb-2">

                                <button type="submit" id="email_btn" class=" btn btn-primary">Get New Password</button>
                            </form>
                            </div>
                        </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once "includes/footer.php" ?>