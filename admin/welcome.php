<?php include_once "includes/dashboard-header.php" ?>

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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Welcome Page Elements</h5>
                            <!-- Form Elements -->
                            <form id="welcome-setting-page">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Welcome Video Link</label>
                                    <div class="col-sm-10">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->


<?php include_once "includes/dashboard-footer.php" ?>