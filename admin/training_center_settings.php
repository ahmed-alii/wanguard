<?php include_once "includes/dashboard-header.php"; ?>

    <style>
        .mce-notification {
            display: none;
        }
    </style>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>Training Center Setting</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Training Center Setting</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Video URL</h5>
                            <form action="">
                                <label for="inputText" class="col col-form-label">URL</label>
                                <input type="text" class="form-control" id="url" required>
                                <div class="row">
                                    <div class="col-sm-12 text-center pt-3">
                                        <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Button Links</h5>
                            <form action="">
                                <label for="inputText" class="col col-form-label">Link</label>
                                <input type="text" class="form-control mb-2" placeholder="Faith" id="faith">
                                <input type="text" class="form-control mb-2" placeholder="Family" id="family">
                                <input type="text" class="form-control mb-2" placeholder="Fitness" id="fitness">
                                <input type="text" class="form-control mb-2" placeholder="Fun" id="fun">
                                <input type="text" class="form-control mb-2" placeholder="Finance" id="finance">
                                <div class="row">
                                    <div class="col-sm-12 text-center pt-3">
                                        <button type="submit" class="btn btn-primary" id="sub-btn">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

<?php include_once "includes/dashboard-footer.php"; ?>