<?php include_once "includes/dashboard-header.php" ?>
    <main id="main" class="main">

        <!--Page Title -->
        <div class="pagetitle">
            <h1>Events</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Events</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section dashboard">
            <div class="section">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add Event</h5>
                                <!-- General Form Elements -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Event Name</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Event Description</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Location</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
                                        <div class="col-sm-12">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Time</label>
                                        <div class="col-sm-12">
                                            <input type="time" class="form-control">
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
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">All Event</h5>

                                <!-- Event Table rows -->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Event Description</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td>Brandon Jacob</td>
                                        <td>Designer</td>
                                        <td>28</td>
                                        <td>2016-05-25</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Bridie Kessler</td>
                                        <td>Bridie Kessler</td>
                                        <td>Developer</td>
                                        <td>35</td>
                                        <td>2014-12-05</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ashleigh Langosh</td>
                                        <td>Ashleigh Langosh</td>
                                        <td>Finance</td>
                                        <td>45</td>
                                        <td>2011-08-12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Angus Grady</td>
                                        <td>Angus Grady</td>
                                        <td>HR</td>
                                        <td>34</td>
                                        <td>2012-06-11</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Raheem Lehner</td>
                                        <td>Raheem Lehner</td>
                                        <td>Dynamic Division Officer</td>
                                        <td>47</td>
                                        <td>2011-04-19</td>
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