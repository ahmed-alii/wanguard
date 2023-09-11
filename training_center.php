<?php
include_once "includes/header.php";
include_once "serverside/functions.php";
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] == 0) {
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}
$func = new Functions();
$TrainingPageBtnLinks = $func->GetALLTrainingPageBtnLinks();
$TrainingFeaturedVideo = $func->FeaturedVideo();
?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="pt-5 text-center">
                <h1>Featured Training</h1>
            </div>
            <div class="col-lg-7 ">
                <video width="820" height="560" controls class="mw-100">
                    <source src="<?= $TrainingFeaturedVideo[0]["video_file"] ?>"
                            type="video/mp4">
                </video>
                <div class="text-center pt-5">
                    <a class="text-decoration-none" href="<?= $TrainingPageBtnLinks[0]['faith'] ?>">
                        <button class="btn btn-primary px-5 py-2">Faith</button>
                    </a>

                    <a class="text-decoration-none" href="<?= $TrainingPageBtnLinks[0]['family'] ?>">
                        <button class="btn btn-primary px-5 py-2"> Family</button>
                    </a>

                    <a class="text-decoration-none" href="<?= $TrainingPageBtnLinks[0]['fitness'] ?>">
                        <button class="btn btn-primary px-5 py-2"> Fitness</button>
                    </a>

                    <a class="text-decoration-none" href="<?= $TrainingPageBtnLinks[0]['fun'] ?>">
                        <button class="btn btn-primary px-5 py-2"> Fun</button>
                    </a>

                    <a class="text-decoration-none" href="<?= $TrainingPageBtnLinks[0]['finance'] ?>">
                        <button class="btn btn-primary px-5 py-2"> Finance</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</section>

<?php
$AllSectionsTraining = $func->getAllSectionsTraining();
foreach ($AllSectionsTraining as $section) {
    $TrainingSectionImages = $func->GetTrainingSectionImages($section['id']);

    ?>
    <section class="py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5 fw-bolder"><?= $section['main_heading'] ?></h1>
            </div>
            <div class="text-center py-3">
                <h1><?= $section['sub_heading'] ?></h1>
            </div>
            <div class="row justify-content-center">
                <div class="py-5">
                    <div class="container py-5">
                        <div class="multiple-item py-5">
                            <?php
                            foreach ($TrainingSectionImages as $s_image) {
                                $imagepath = substr($s_image['image_path'], 3);
                                ?>
                                <div class="p-2">
                                    <div class="card border-0" style="max-height: 300px; min-height: 260px; max-width: 240px">
                                        <div class="card-body">
                                            <a href="<?= $s_image['image_url'] ?>" target="_blank">
                                                <img src="<?= $imagepath ?>" alt="" class="img-fluid slider_image_size mx-auto">
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<?php include_once "includes/footer.php"; ?>
<script>
    $('.multiple-item').slick(
        {
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1
        }
    );

</script>
