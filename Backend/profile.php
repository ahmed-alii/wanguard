<?php
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
    // session isn't started
    session_start();
}

include_once "includes/dashboard-header.php";
include_once "../serverside/functions.php";

$func=new Functions();

$users=$func->getSingleUser($_SESSION['user_id']);

if(!empty($users)){
    $user=$users[0];

}else{
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}
?>

    <!-- ======= Sidebar ======= -->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">


                            <?php
                            if ($user['image_path']!=""){
                                ?>
                                <img src="<?=$user['image_path']?>"  class="rounded-circle myImage" alt="Profile">
                                <?php
                            }else{
                                ?>
                                <img src="assets/img/profile-img.jpg" class="rounded-circle myImage" alt="Profile">
                                <?php
                            }
                            ?>
                            <h2><?=$user['name']?></h2>

                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"><?=$user['name']?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?=$user['email']?></div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8"><?=$user['phone']?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8"><?=$user['address']?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Description</div>
                                        <div class="col-lg-9 col-md-8"><?=$user['notes']?></div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form id="edit_profile">
                                        <input value="<?=$user['id']?>" type="hidden" id="employee_id" >
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <?php
                                                if ($user['image_path']!=""){
                                                    ?>
                                                    <img src="<?=$user['image_path']?>" class="myImage" alt="Profile">
                                                    <?php
                                                }else{
                                                    ?>
                                                    <img src="assets/img/profile-img.jpg" class="myImage" alt="Profile">
                                                    <?php
                                                }
                                                ?>
                                                <div class="pt-2">

                                                        <label for="update_profile_photo">
                                                            <i class="bi bi-upload"></i>
                                                    <input class="upload-image" type="file" id="update_profile_photo" >

                                                    </label>

                                                    <!--                                                    <a onclick="remove_profile_photo(`<=$user['id']?>`)" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="edit_name" value="<?=$user['name']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="edit_email" value="<?=$user['email']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="edit_phone" value="<?=$user['phone']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="edit_address" value="<?=$user['address']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="notes" class="col-md-4 col-lg-3 col-form-label">Description</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="notes" class="form-control" id="edit_notes" style="height: 100px"><?=$user['notes']?></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" id="edit_btn" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form id="updatepasswordform">

                                        <div class="row mb-3">
                                            <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="old_password" type="password" class="form-control" id="old_password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control" id="password">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="c_password" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="c_password" type="password" class="form-control" id="c_password">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
<?php include_once "includes/dashboard-footer.php" ?>