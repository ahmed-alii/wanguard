<?php include_once "includes/dashboard-header.php" ;
$func=new Functions();
$welcomeVideoPath = $func->getWelcomeVideoFilePath();
$recogVideoPath = $func->getRecogVideoPath();
?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Welcome Page Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Welcome Page Settings</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Welcome Page Video</h5>
                            <!-- Form Elements -->
                            <form id="welcome-setting-page">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-12 col-form-label">Welcome Video Link</label>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" id="video" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-center pt-3">
                                        <button type="submit" class="btn btn-primary" id="sub-btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Form Elements -->

                            <video src="<?= $welcomeVideoPath[0]["video_file"] ?>" controls class="img-fluid" style="height: 300px;"></video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upload Recognition Video</h5>
                            <!-- Form Elements -->
                            <form id="welcome-setting-page-2">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-12 col-form-label">Recognition Video</label>
                                    <div class="col-sm-12">
                                        <input type="file" class="form-control" id="video2" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 text-center pt-3">
                                        <button type="submit" class="btn btn-primary" id="sub-btn-2">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Form Elements -->
                            <video src="<?= $recogVideoPath[0]["video_file"] ?>" controls class="img-fluid" style="height: 300px;"></video>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->


<?php include_once "includes/dashboard-footer.php" ?>