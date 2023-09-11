<?php include_once "includes/dashboard-header.php";
$func = new Functions();
$welcomeVideoPath = $func->NextPageWelcomeVideo();
$VANGuardVideoPath = $func->NextPageVANGuardVideo();
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Next Steps</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Next Steps</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Phase 1 Welcome Video URL</h5>
                        <form id="welcome_video_url">
                            <label for="inputText" class="col col-form-label">URL</label>
                            <input type="file" class="form-control" id="w_video_url" required>
                            <div class="row">
                                <div class="col-sm-12 text-center pt-3">
                                    <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="pt-3">
                            <video src="<?= $welcomeVideoPath[0]["video_file"] ?>" controls class="img-fluid" style="height: 300px;"></video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Phase 1 ATTEND VANGUARD Video URL</h5>
                        <form id="vanguard_video_url">
                            <label for="inputText" class="col col-form-label">URL</label>
                            <input type="file" class="form-control" id="v_video_url" required>
                            <div class="row">
                                <div class="col-sm-12 text-center pt-3">
                                    <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="pt-3">
                            <video src="<?= $VANGuardVideoPath[0]["video_file"] ?>" controls class="img-fluid" style="height: 300px;"></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- End #main -->

<?php include_once "includes/dashboard-footer.php" ?>