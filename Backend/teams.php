<?php include_once "includes/dashboard-header.php" ?>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>Teams</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Teams</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Team</h5>
                                <!-- General Form Elements -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputNumber" class="col-sm-12 col-form-label">Picture Upload</label>
                                        <div class="col-sm-12">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label"> Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Level</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-12 col-form-label">Department</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Earning</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Youtube Link</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Appointment</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </form>
                                <!-- End General Form Elements -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Event</h5>

                                <!-- Event Table rows -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Earning</th>
                                        <th scope="col">Youtube Link</th>
                                        <th scope="col">Appointment Link</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!-- End Event Table rows -->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->


<?php include_once "includes/dashboard-footer.php" ?>