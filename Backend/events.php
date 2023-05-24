<?php
include_once "includes/dashboard-header.php";
$events=$func->getAllEvents();

?>
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
                            <div id="add_event_div" class="card-body">
                                <h5 class="card-title">Add Event</h5>
                                <!-- General Form Elements -->
                                <form id="add_event">
                                    <div class="row mb-3">
                                        <label for="inputText"  class="col-sm-12 col-form-label">Event Name</label>
                                        <div class="col-sm-12">
                                            <input type="text"  id="name" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Location</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="location" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
                                        <div class="col-sm-12">
                                            <input type="date" id="date" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Time</label>
                                        <div class="col-sm-12">
                                            <input type="time" id="time" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Event Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="3" required id="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" id="sub_btn" class="btn btn-primary">Submit Form</button>
                                        </div>
                                    </div>

                                </form>
                                <!-- End General Form Elements -->
                            </div>
                            <div id="edit_event_div" style="display: none" class="card-body">
                                <h5 class="card-title">Edit Event</h5>
                                <!-- General Form Elements -->
                                <form id="edit_event">
                                    <input type="hidden" id="event_id" >
                                    <div class="row mb-3">
                                        <label for="inputText"  class="col-sm-12 col-form-label">Event Name</label>
                                        <div class="col-sm-12">
                                            <input type="text"  id="edit_name" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Location</label>
                                        <div class="col-sm-12">
                                            <input type="text" id="edit_location" required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputDate" class="col-sm-12 col-form-label">Date</label>
                                        <div class="col-sm-12">
                                            <input type="date" id="edit_date" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputTime" class="col-sm-12 col-form-label">Time</label>
                                        <div class="col-sm-12">
                                            <input type="time" id="edit_time" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputText" class="col-sm-12 col-form-label">Event Description</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="3" required id="edit_description"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" id="sub_btn" class="btn btn-primary">Submit Form</button>
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
                                        <th scope="col">Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($events as $event){
                                        ?>
                                        <tr>
                                            <th scope="row"><?=$event['id']?></th>
                                            <td><?=$event['name']?></td>
                                            <td><?=$event['location']?></td>
                                            <td><?=$event['date']?></td>
                                            <td><?=$event['time']?></td>
                                            <td><?=$event['description']?></td>
                                            <td>
                                                <i class="fa fa-trash p-2 btn btn-danger" onclick="deleteEvent(`<?=$event['id']?>`)"></i>
                                                <i class="fa fa-edit p-2 btn btn-primary"
                                                   onclick="editEvent(`<?=$event['id']?>`,`<?=$event['name']?>`,`<?=$event['location']?>`,`<?=$event['date']?>`,`<?=$event['time']?>`,`<?=$event['description']?>`)"></i>

                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>


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

<script>
    function editEvent(id,name,location,date,time,description){

        $("#event_id").val(id);
        $("#edit_name").val(name);
        $("#edit_location").val(location);
        $("#edit_date").val(date);
        $("#edit_time").val(time);
        $("#edit_description").val(description);
        $("#add_event_div").hide();
        $("#edit_event_div").show();

    }
</script>
