<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id'])) {
    ?>
    <script type="text/javascript">
        window.location.href = "logout";
    </script>
    <?php
    exit();
}


include_once "serverside/functions.php";
$func = new Functions();
$level1 = $func->getTeamMemberByLevel(1);
$level2 = $func->getTeamMemberByLevel(2);
$level3 = $func->getTeamMemberByLevel(3);

?>

<section class="bg-black hero-section triangle-black">
    <div class="container py-5">
        <div class="img-wrapper text-center">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <img src="assets/images/logo2.png" class="img-fluid hero-logo">
                </div>

                <div class="col-12 my-5">
                    <h4 class="text-white fw-light">Welcome To</h4>
                    <h1 class="display-5 fw-bold text-primary text-uppercase">VANGUARD</h1>
                    <br>
                    <p class="w-75 text-white mx-auto">Your decision to come on board is the first step toward helping
                        you building the life you’ve always wanted for you and your family. Now, you have the
                        opportunity to provide a valuable service to many individuals and families who dream of
                        achieving financial independence. You can help people from all walks of life have better
                        tomorrows, while achieving your goals and dreams as well.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="img-wrapper text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-6 col-10 mx-5 py-5 counter-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="50px" height="50px" viewBox="0 0 24 24" xml:space="preserve"
                             data-type="glyph" data-name="handshake" fill="#FFF"><g>
                                <path
                                        d="M21.7,2.633c-1.577-1.666-3.707-2.601-5.997-2.632c-1.321-0.013-2.593,0.278-3.739,0.823 c-3.31-1.48-6.985-0.875-9.5,1.64c-2.817,2.818-3.263,7.222-1.074,10.57C1.126,13.89,1.322,14.858,2,15.536l6.414,6.414 c0.635,0.635,1.524,0.849,2.339,0.659c0.746,0.639,1.663,0.975,2.59,0.975c1.024,0,2.05-0.39,2.829-1.17l4.242-4.243 c0.756-0.755,1.172-1.76,1.172-2.828c0-0.318-0.048-0.626-0.119-0.927C24.621,11.087,24.746,5.85,21.7,2.633z M19,16.757L14.758,21 c-0.64,0.639-1.603,0.745-2.368,0.33c0.489-0.942,0.35-2.125-0.44-2.916L5.536,12c-0.74-0.74-1.828-0.917-2.737-0.534 c-1.344-2.467-0.946-5.561,1.08-7.587C5.484,2.272,7.723,1.7,9.906,2.221C9.83,2.291,9.749,2.356,9.676,2.429L3.549,7.963 l0.744,0.744c1.503,1.502,3.824,1.788,5.647,0.695l2.129-1.278c0.392,0.16,0.977,0.371,1.657,0.53c1.982,0.408,4.607-0.8,4.607-0.8 s-0.792,1.312-3.008,2.399L19,13.929c0.378,0.378,0.586,0.88,0.586,1.415S19.378,16.379,19,16.757z"></path>
                            </g></svg>
                        <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count">4</span> M +</p>
                        <span class="text-white fs-5 fw-bold">FAMILIES HELPED SINCE 2001</span>
                    </div>

                    <div class="col-lg-2 col-md-6 col-10 mx-5 py-5 counter-wrapper">
                        <svg x="0px" y="0px" viewBox="0 0 24 24" width="50px" height="50px" fill="#FFF"
                             data-type="glyph"
                             data-name="building">
                            <g class="nc-icon-wrapper">
                                <path data-color="color-2"
                                      d="M7,10H5V1c0-0.553,0.447-1,1-1h12c0.553,0,1,0.447,1,1v6h-2V2H7V10z"></path>
                                <path
                                        d="M23,8h-9c-0.553,0-1,0.447-1,1v13h-2v-9c0-0.553-0.447-1-1-1H1c-0.553,0-1,0.447-1,1v10c0,0.553,0.447,1,1,1 h22c0.553,0,1-0.447,1-1V9C24,8.447,23.553,8,23,8z M7,21H4v-2h3V21z M7,17H4v-2h3V17z M20,21h-3v-2h3V21z M20,17h-3v-2h3V17z M20,13h-3v-2h3V13z"></path>
                            </g>
                        </svg>
                        <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count">150</span> +</p>
                        <span class="text-white fs-5 fw-bold">COMPANIES WE REPRESENT</span>
                    </div>

                    <div class="col-lg-2 col-md-6 col-10 mx-5 py-5 counter-wrapper">
                        <svg
                                x="0px" y="0px" viewBox="0 0 24 24" fill="#FFF" width="50px" height="50px"
                                data-type="glyph" data-name="multiple-19">
                            <g>
                                <path data-color="color-2"
                                      d="M17,2c-0.905,0-1.73,0.312-2.4,0.818C15.475,3.986,16,5.431,16,7v1 c0,0.953-0.193,1.862-0.54,2.691C15.935,10.889,16.454,11,17,11c2.209,0,4-1.791,4-4V6C21,3.791,19.209,2,17,2z"></path>
                                <path
                                        d="M9,13L9,13c-2.761,0-5-2.239-5-5V7c0-2.761,2.239-5,5-5h0c2.761,0,5,2.239,5,5v1C14,10.761,11.761,13,9,13z"></path>
                                <path data-color="color-2"
                                      d="M22.839,14.405C21.555,13.815,19.354,13,17,13c-1.195,0-2.35,0.211-3.367,0.495 c0.376,0.078,0.753,0.157,1.13,0.253c2.911,0.742,4.97,3.275,5.192,6.252H23c0.552,0,1-0.448,1-1v-2.779 C24,15.439,23.55,14.731,22.839,14.405z"></path>
                                <path
                                        d="M17,22H1c-0.552,0-1-0.448-1-1v-0.475c0-2.275,1.527-4.277,3.731-4.839C5.205,15.31,7.021,15,9,15 s3.795,0.31,5.269,0.686C16.473,16.248,18,18.25,18,20.525V21C18,21.552,17.552,22,17,22z"></path>
                            </g>
                        </svg>
                        <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva"><span class="count">57</span> K +</p>
                        <span class="text-white fs-5 fw-bold">AGENTS ACROSS THE US</span>
                    </div>

                    <div class="col-lg-2 col-md-6 col-10 mx-5 py-5 counter-wrapper">
                        <svg
                                x="0px" y="0px" viewBox="0 0 24 24" fill="#FFF" width="50px" height="50px"
                                data-type="glyph" data-name="round-dollar">
                            <g>
                                <path
                                        d="M13.592,15.564c0.232-0.163,0.54-0.465,0.54-1.214c0-0.532-0.361-0.851-1.132-1.181v2.659 C13.225,15.759,13.432,15.677,13.592,15.564z"></path>
                                <path
                                        d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12s12-5.383,12-12S18.617,0,12,0z M16.132,14.351 c0,1.549-0.756,2.405-1.391,2.851c-0.497,0.349-1.096,0.557-1.741,0.677V20h-2v-2.037c-1.151-0.087-2.325-0.361-3.34-0.727 l-0.94-0.339l0.679-1.881l0.941,0.34c0.92,0.332,1.834,0.53,2.66,0.606v-3.509c-1.589-0.57-3.352-1.46-3.352-3.722 c0-1.128,0.523-2.059,1.474-2.621C9.664,5.79,10.316,5.617,11,5.536V4h2v1.551c1.177,0.137,2.255,0.46,2.856,0.792l0.877,0.481 L15.77,8.577l-0.876-0.482C14.461,7.857,13.754,7.663,13,7.558v3.464C14.528,11.562,16.132,12.344,16.132,14.351z"></path>
                                <path
                                        d="M10.141,7.833C9.796,8.037,9.648,8.305,9.648,8.731c0,0.757,0.429,1.17,1.352,1.571V7.556 C10.672,7.613,10.37,7.697,10.141,7.833z"></path>
                            </g>
                        </svg>
                        <p class="pt-1 fs-1 fw-bolder text-primary" id="shiva">$ <span class="count">1</span> B +</p>
                        <span class="text-white fs-5 fw-bold">COMMISSIONS PAID IN 2023</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="section_vision triangle-primary">
    <div class="container">
        <div class="row justify-content-center m-auto">
            <div class="col-md-6">
                <h1 class="text-center fw-bold">Our VISION & VALUES</h1>
                <p class="text-center pt-3">Our vision is to create massive change in the marketplace, change the
                    financial
                    industry for the better, and transform people's lives.
                </p>
                <p class="text-center">
                    Our values to our clients are to provide the knowledge, support, guidance, and confidence to build
                    their financial future.
                </p>
                <p class="text-center">
                    Our values to our agents are to provide the tools, environment, mentorship, and examples of success
                    to allow them to flourish.
                </p>
                <p class="text-center p-0 m-0 fw-bolder fst-italic">
                    At Pinnacle, we believe in the 5 F's
                </p>
                <p class="text-center p-0 m-0">Faith, Family, Finances, Fitness, and Fun
                </p>
                <p class="text-center p-0 m-0">are the key to having a successful business and living a fulfilling life.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row mx-auto justify-content-center">
            <div class="col-11 col-lg-4 col-text-center">
                <header class="fs-1 fw-bolder pb-4"> MEET YOUR TEAM</header>
                <p class="text-primary">ALONE WE CAN DO SO LITTLE,
                <p>
                <p class="text-primary pb-5">TOGETHER WE CAN DO SO MUCH</p>

                <?php
                foreach ($level1 as $l1) {
                    ?>
                    <?php
                    if ($l1['image_path'] != "") {
                        ?>
                        <img src="<?= substr($l1['image_path'], 3) ?>"
                             style="height: 350px; width: 350px; object-fit: cover" class="img-fluid rounded-circle ">
                        <?php
                    } else {
                        ?>
                        <img src="assets/images/img8.png" style="height: 350px; width: 350px; object-fit: cover"
                             class="img-fluid rounded-circle ">
                        <?php
                    }
                    ?>

                    <h1 class="fw-bolder pt-3 text-primary"><?= $l1['name'] ?></h1>
                    <h3 class="fw-bolder text-gray"><?= $l1['rank'] ?></h3>
                    <h3 class="fw-bolder text-gray"><?= $l1['department'] ?></h3>
                    <h3 class="fw-bolder text-green">$<?= number_format($l1['earning']) ?> + EARNERS </h3>
                    <div class="btn-1 py-2 d-flex">
                        <?php
                        if ($l1['bio'] != "") {
                            ?>
                            <button onclick="showBio(`<?= $l1['id'] ?>`)" class="btn px-5 my-1 ">BIO
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"
                                     width="15px" height="50px">
                                <g>
                                    <path
                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>
                                </g>
                            </svg>
                            </button>
                            <?php
                        }
                        ?>


                        <!--                        <a target="_blank" href="-->
                        <?php //= $l1['youtube_link'] ?><!--">-->
                        <!--                            <button class="btn px-5">-->
                        <?php //= $l1['name'] ?><!-- YOUTUBE-->
                        <!--                                <svg xmlns="http://www.w3.org/2000/svg"-->
                        <!--                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"-->
                        <!--                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"-->
                        <!--                                     width="15px" height="50px">-->
                        <!--                                <g>-->
                        <!--                                    <path-->
                        <!--                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>-->
                        <!--                                </g>-->
                        <!--                            </svg>-->
                        <!--                            </button>-->
                        <!--                        </a>-->
                        <div class="d-flex px-3 pt-3 text-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                                    <path fill="#3F51B5"
                                          d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"/>
                                    <path fill="#FFF"
                                          d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"/>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                                    <linearGradient id="PgB_UHa29h0TpFV_moJI9a" x1="9.816" x2="41.246" y1="9.871"
                                                    y2="41.301"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#f44f5a"/>
                                        <stop offset=".443" stop-color="#ee3d4a"/>
                                        <stop offset="1" stop-color="#e52030"/>
                                    </linearGradient>
                                    <path fill="url(#PgB_UHa29h0TpFV_moJI9a)"
                                          d="M45.012,34.56c-0.439,2.24-2.304,3.947-4.608,4.267C36.783,39.36,30.748,40,23.945,40	c-6.693,0-12.728-0.64-16.459-1.173c-2.304-0.32-4.17-2.027-4.608-4.267C2.439,32.107,2,28.48,2,24s0.439-8.107,0.878-10.56	c0.439-2.24,2.304-3.947,4.608-4.267C11.107,8.64,17.142,8,23.945,8s12.728,0.64,16.459,1.173c2.304,0.32,4.17,2.027,4.608,4.267	C45.451,15.893,46,19.52,46,24C45.89,28.48,45.451,32.107,45.012,34.56z"/>
                                    <path d="M32.352,22.44l-11.436-7.624c-0.577-0.385-1.314-0.421-1.925-0.093C18.38,15.05,18,15.683,18,16.376	v15.248c0,0.693,0.38,1.327,0.991,1.654c0.278,0.149,0.581,0.222,0.884,0.222c0.364,0,0.726-0.106,1.04-0.315l11.436-7.624	c0.523-0.349,0.835-0.932,0.835-1.56C33.187,23.372,32.874,22.789,32.352,22.44z"
                                          opacity=".05"/>
                                    <path d="M20.681,15.237l10.79,7.194c0.689,0.495,1.153,0.938,1.153,1.513c0,0.575-0.224,0.976-0.715,1.334	c-0.371,0.27-11.045,7.364-11.045,7.364c-0.901,0.604-2.364,0.476-2.364-1.499V16.744C18.5,14.739,20.084,14.839,20.681,15.237z"
                                          opacity=".07"/>
                                    <path fill="#fff"
                                          d="M19,31.568V16.433c0-0.743,0.828-1.187,1.447-0.774l11.352,7.568c0.553,0.368,0.553,1.18,0,1.549	l-11.352,7.568C19.828,32.755,19,32.312,19,31.568z"/>
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px">
                                    <path fill="#0078d4"
                                          d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"/>
                                    <path d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z"
                                          opacity=".05"/>
                                    <path d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z"
                                          opacity=".07"/>
                                    <path fill="#fff"
                                          d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"/>
                                </svg>
                            </div>
                        </div>

                    </div>
                    <div class="btn-2">
                        <a href="<?= $l1['appointment_link'] ?>" target="_blank">
                            <button class="btn px-3 fw-bolder">SET A PERSONAL APPOINTMENT WITH FRANK'S
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"
                                     width="15px" height="50px">
                                <g>
                                    <path
                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>
                                </g>
                            </svg>
                            </button>
                        </a>
                    </div>
                    <br><br>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row mx-auto justify-content-center">
            <?php
            foreach ($level2 as $l2) {
                ?>
                <div class="col-12 col-lg-6 col-text-center py-3">

                    <?php
                    if ($l2['image_path'] != "") {
                        ?>
                        <img src="<?= substr($l2['image_path'], 3) ?>"
                             style="height: 300px; width: 300px; object-fit: cover" class="img-fluid rounded-circle ">
                        <?php
                    } else {
                        ?>
                        <img src="assets/images/img8.png" style="height: 300px; width: 300px; object-fit: cover"
                             class="img-fluid rounded-circle ">
                        <?php
                    }
                    ?>

                    <h6 class="fw-bolder pt-3 text-primary"><?= $l2['name'] ?></h6>
                    <p class="fw-bolder text-gray p-0 m-0"><?= $l2['rank'] ?></p>
                    <p class="fw-bolder text-gray p-0 m-0"><?= $l2['department'] ?></p>
                    <p class="fw-bolder text-green p-0 m-0">$<?= number_format($l2['earning']) ?> + EARNERS </p>
                    <div class="btn-3 py-3">
                        <?php
                        if ($l2['bio'] != "") {
                            ?>
                            <button onclick="showBio(`<?= $l2['id'] ?>`)" class="btn px-4 my-2 my-lg-0">BIO
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"
                                     width="15px" height="30px">
                                <g>
                                    <path
                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>
                                </g>
                            </svg>
                            </button>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="btn-2">
                        <a target="_blank" href="<?= $l2['appointment_link'] ?>">
                            <button class="btn px-5 fw-bolder">SET AN APPOINTMENT
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"
                                     width="15px" height="40px">
                                <g>
                                    <path
                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>
                                </g>
                            </svg>
                            </button>
                        </a>
                    </div>
                </div>

                <?php
            }
            ?>

        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row mx-auto justify-content-center">
            <?php
            foreach ($level3 as $l3) {
                ?>
                <div class="col-12 col-lg-4 col-md-6 col-text-center py-3">

                    <?php
                    if ($l3['image_path'] != "") {
                        ?>
                        <img src="<?= substr($l3['image_path'], 3) ?>"
                             style="height: 200px; width: 200px; object-fit: cover" class="img-fluid rounded-circle ">
                        <?php
                    } else {
                        ?>
                        <img src="assets/images/img8.png" style="height: 200px; width: 200px; object-fit: cover"
                             class="img-fluid rounded-circle ">
                        <?php
                    }
                    ?>


                    <h6 class="fw-bolder pt-3 text-primary"><?= $l3['name'] ?></h6>
                    <p class="fw-bolder text-gray p-0 m-0"><?= $l3['rank'] ?></p>
                    <p class="fw-bolder text-gray p-0 m-0"><?= $l3['department'] ?></p>
                    <p class="fw-bolder text-green p-0 m-0 text">$<?= number_format($l3['earning']) ?> + EARNERS </p>
                    <div class="btn-3 py-3">
                        <?php
                        if ($l3['bio'] != "") {
                            ?>
                            <button onclick="showBio(`<?= $l3['id'] ?>`)" class="btn px-4 my-2 my-lg-0">BIO
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" data-type="glyph" data-name="active-40" fill="currentColor"
                                     width="15px" height="30px">
                                <g>
                                    <path
                                            d="M18.12762,9.47772L10,8V3.10699c0-0.99628-0.68073-1.91962-1.66406-2.07965C7.08289,0.82355,6,1.78522,6,3 v11H5v-3H4c-1.10455,0-2,0.89539-2,2v2.89532c0,1.36243,0.46368,2.68433,1.31482,3.74823L6,23h13l1.55609-10.1145 C20.80316,11.27936,19.7265,9.76843,18.12762,9.47772z"></path>
                                </g>
                            </svg>
                            </button>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row mx-auto justify-content-center">
            <div class="col-10 col-text-center">
                <h1 class="fw-bold">WHY YOU MATTER</h1>
                <p class="text-primary fw-bold">THE NEED HAS NEVER BEEN BIGGER</p>
                <div class="pt-5">
                    <video width="1020" height="540" controls class="mw-100">
                        <source src="https://www.youtube.com/watch?v=O3DPVlynUM0&ab_channel=GeoNews"
                                type="video/mp4">
                    </video>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="fw-bold">HOW WE HELP</h1>
                <p class="text-primary fw-bold">OUR ARRAY OF PRODUCTS AND SERVICES ARE AS DIVERSE AS THE NEEDS OF WHO WE
                    SERVE</p>

                <div class="row map align-items-center">


                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <div class="map-item">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">FINANCIAL STRATEGIES</h4>
                                    <ul>
                                        <li>Financial Needs Analysis</li>
                                        <li>Financial Goal Setting</li>
                                        <li>Strategies to Pursue Your Goals</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>


                    <div class="col-lg-4">
                        <div class="map-item mb-4">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">ESTATE PRESERVATION</h4>
                                    <ul>
                                        <li>Wills & Trusts</li>
                                        <li>Charitable Strategies & Trusts</li>
                                        <li>Life Insurance Trusts</li>
                                        <li>Wealth Replacement Trusts</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="map-item mb-4">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">BUSINESS STRATEGIES</h4>
                                    <ul>
                                        <li>Insurance Strategies</li>
                                        <li>Retirement Strategies</li>
                                        <li>Executive Compensation</li>
                                        <li>Executive Compensation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 position-relative" style="    height: 425px;
    display: flex;
    align-items: center;
    justify-content: center;">
                        <img src="https://a-cloud.b-cdn.net/media/iW=5000&iH=any/d03-6-objectives/image.jpg" alt=""
                             class="img-fluid position-absolute" style="transform: scale(1.5)">
                        <img src="assets/images/logo3.png" class="img-fluid px-4 position-relative"
                             style="z-index: 1">

                    </div>
                    <div class="col-lg-4">
                        <div class="map-item mb-4">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">INSURANCE PROTECTION</h4>
                                    <ul>
                                        <li>Life Insurance</li>
                                        <li>Disability Insurance</li>
                                        <li>Long Term Care Insurance</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="map-item mb-4">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">RETIREMENT STRATEGIES</h4>
                                    <ul>
                                        <li>LIRP/CVLI</li>
                                        <li>Rollovers</li>
                                        <li>Annuities (Private Pensions)</li>
                                        <li>Traditional/ Roth IRA</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4 pt-4">
                        <div class="map-item">
                            <div class="text-center">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24"
                                     xml:space="preserve" class="brz-icon-svg nc-icon-wrapper" data-type="glyph"
                                     data-name="goal-65"><g class="">
                                        <path fill="inherit"
                                              d="M2,10c0-4.411,3.589-8,8-8c3.387,0,6.419,2.145,7.546,5.336l0.333,0.942l1.886-0.665L19.432,6.67 C18.023,2.681,14.233,0,10,0C4.486,0,0,4.486,0,10c0,4.229,2.678,8.019,6.663,9.43l0.943,0.334l0.667-1.885l-0.942-0.334 C4.142,16.416,2,13.384,2,10z"></path>
                                        <path fill="inherit"
                                              d="M6,10c0-2.206,1.794-4,4-4c1.27,0,2.437,0.583,3.2,1.601l0.601,0.8L15.4,7.199l-0.6-0.8 C13.655,4.875,11.905,4,10,4c-3.309,0-6,2.691-6,6c0,1.879,0.898,3.674,2.403,4.803l0.8,0.601l1.2-1.601l-0.8-0.6 C6.584,12.438,6,11.271,6,10z"></path>
                                        <path data-color="color-2" fill="inherit"
                                              d="M22.707,17.293L19.414,14l2.293-2.293c0.274-0.274,0.365-0.683,0.233-1.048 c-0.132-0.364-0.463-0.62-0.85-0.655l-11-1C9.799,8.978,9.503,9.083,9.293,9.293c-0.21,0.21-0.316,0.502-0.289,0.798l1,11 c0.035,0.386,0.291,0.718,0.656,0.85c0.364,0.132,0.773,0.042,1.047-0.233L14,19.414l3.293,3.293C17.488,22.902,17.744,23,18,23 s0.512-0.098,0.707-0.293l4-4C23.098,18.316,23.098,17.684,22.707,17.293z"></path>
                                    </g></svg>

                                <div>
                                    <h4 class="fw-bold">COLLEGE FUNDING PLANS</h4>

                                    <p>Whether preparing to send a first or
                                        fifth child to college/university, we can
                                        help start saving now.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="py-5">
    <div class="container">
        <div class="row mx-auto justify-content-center">
            <div class="col-10 col-text-center">
                <h1 class="fw-bold">STRENGTH IN SELECTION</h1>
                <p class="text-primary fw-bold">TRUSTED BY</p>
            </div>
        </div>
        <div class="row justify-content-center py-0 py-md-3 py-lg-5">
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10012.png" class="img-fluid" style="height: 50px; width: 100px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10007.png" class="img-fluid" style="height: 50px; width: 100px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10003.png" class="img-fluid" style="height: 50px; width: 100px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10013.png" class="img-fluid" style="height: 60px; width: 100px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10004.jpg" class="img-fluid" style="height: 75px; width: 150px">
            </div>
        </div>
        <div class="row justify-content-center py-0 py-md-3 py-lg-5">
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10002.jpg" class="img-fluid" style="height: 70px; width: 200px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10006.jpg" class="img-fluid" style="height: 30px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10014.png" class="img-fluid" style="height: 80px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10005.png" class="img-fluid" style="height: 80px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10008.png" class="img-fluid" style="height: 50px; width: 150px">
            </div>
        </div>
        <div class="row justify-content-center py-0 py-md-3 py-lg-5">
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10015.png" class="img-fluid" style="height: 100px; width: 200px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10009.jpg" class="img-fluid" style="height: 50px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10011.png" class="img-fluid" style="height: 50px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10010.png" class="img-fluid" style="height: 50px; width: 150px">
            </div>
            <div class="col-12 col-lg-2 col-md-6 text-center mx-3 my-auto py-lg-0 py-md-0 py-3">
                <img src="assets/images/10016.png" class="img-fluid" style="height: 50px; width: 150px">
            </div>
        </div>

    </div>
</section>

<section class="bg-black">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-text-center">
                <img src="assets/images/logo3.png" class="img-fluid py-3 py-lg-5">
                <div class="py-lg-2 py-2 expect-heading">
                    <h1>WHAT TO EXPECT AS AN AGENT</h1>
                </div>
                <p class="py-lg-4 py-2 text-primary">AN AGENT’S SUCCESS IS OUR SUCCESS.</p>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" height="50px" width="50px"
                         data-type="outline" data-name="circle-simple-down" stroke="#EBCC72" fill="none">
                            <g transform="translate(0, 0)">
                                <line data-cap="butt" data-color="color-2" vector-effect="non-scaling-stroke"
                                      stroke-miterlimit="10" x1="12" y1="6" x2="12" y2="17" stroke-linejoin="miter"
                                      stroke-linecap="butt">
                                </line>
                                <polyline data-color="color-2" vector-effect="non-scaling-stroke"
                                          stroke-linecap="square" stroke-miterlimit="10" points=" 16,13 12,17 8,13 "
                                          stroke-linejoin="miter">
                                </polyline>
                                <circle vector-effect="non-scaling-stroke" stroke-linecap="square"
                                        stroke-miterlimit="10" cx="12" cy="12" r="11" stroke-linejoin="miter">
                                </circle>
                            </g>
                        </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-3 col-md-6 mx-3 learn-section">
                <div class="py-4 text-center text-lg-start">
                    <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" data-type="glyph"
                         data-name="award-49" height="60" width="60" fill="#CA4152" class="nc-icon-wrapper">
                        <g>
                            <path d="M0,1v19c0,0.552,0.448,1,1,1h13v-4.126c-1.282-1.302-2-3.029-2-4.874c0-3.86,3.141-7,7-7V1 c0-0.552-0.448-1-1-1H1C0.448,0,0,0.448,0,1z M8,16H4v-2h4V16z M8,11H4V9h4V11z M11,6H4V4h7V6z"></path>
                            <path data-color="color-2"
                                  d="M19,19c-1.074,0-2.089-0.251-3-0.685V24l3-2l3,2v-5.685C21.089,18.749,20.074,19,19,19z"></path>
                            <circle data-color="color-2" cx="19" cy="12" r="5"></circle>
                        </g>
                    </svg>
                </div>
                <div class="text-center text-lg-start">
                    <h4 class="pb-4">WILLINGNESS TO LEARN</h4>
                </div>
                <p>Studying and preparation are necessary to join the thousands of agents who pass their licensing
                    exam. Many of our agents earn their license within 2 to 4 weeks, but you set your own timeline –
                    you control the pace!
                </p>
                <p> During this time, you will learn about the products and services you can offer, and build a
                    foundation of knowledge that you can share with your clients and provide them with fair and
                    sound support in the years to come.
                </p>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-3 learn-section">
                <div class="py-4 text-center text-lg-start">
                    <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve"
                         data-type="glyph" data-name="divider" height="60" width="60" fill="#CA4152"
                         class="nc-icon-wrapper">
                            <g>
                                <path
                                        d="M20,9H4C3.448,9,3,8.552,3,8V1c0-0.552,0.448-1,1-1h16c0.552,0,1,0.448,1,1v7C21,8.552,20.552,9,20,9z"></path>
                                <path
                                        d="M20,24H4c-0.552,0-1-0.448-1-1v-7c0-0.552,0.448-1,1-1h16c0.552,0,1,0.448,1,1v7C21,23.552,20.552,24,20,24z "></path>
                                <path data-color="color-2"
                                      d="M23,13H1c-0.553,0-1-0.448-1-1s0.447-1,1-1h22c0.553,0,1,0.448,1,1S23.553,13,23,13z"></path>
                            </g>
                        </svg>
                </div>
                <div class="text-center text-lg-start">
                    <h4 class="pb-4">COMMITMENT TO BUILD</h4>
                </div>
                <p>As most of our agents will tell you, starting and growing any business, but particularly in
                    financial services, isn’t always easy, but it is immensely rewarding. No one is expecting
                    overnight success, so go at your own speed and build the business as big as you want it to be.
                    You’ll be surrounded by people whose footsteps you can follow.
                </p>
                <p> You can also start - and keep - your business as a part-time opportunity, or you can go full
                    time. The decision is completely up to you.
                </p>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mx-3 learn-section">
                <div class="py-4 text-center text-lg-start">
                    <svg x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" data-type="glyph"
                         data-name="payment" height="60" width="60" fill="#CA4152" class="nc-icon-wrapper">
                            <g>
                                <circle data-color="color-2" cx="12" cy="11" r="2"></circle>
                                <path
                                        d="M19,4V1.5C19,0.672,18.328,0,17.5,0S16,0.672,16,1.5V4h-1V1.5C15,0.672,14.328,0,13.5,0S12,0.672,12,1.5V4 h-1V1.5C11,0.672,10.328,0,9.5,0S8,0.672,8,1.5V4H7V1.5C7,0.672,6.328,0,5.5,0S4,0.672,4,1.5V4H0v14h4.262 c0.889,3.449,4.011,6,7.738,6s6.848-2.551,7.738-6H24v-2V4H19z M22,16h-2V8c-2.209,0-4,1.791-4,4v3c-1.008,0-1.917,0.385-2.62,1 c-1.38,1.281-1.88,3.031-1.88,3.031s-0.515-1.3-0.272-3.031H2V6h20V16z"></path>
                            </g>
                        </svg>
                </div>
                <div class="text-center text-lg-start">
                    <h4 class="pb-4">SOME OUT-OF-POCKET EXPENSES</h4>
                </div>
                <p>Starting a business does incur some costs, but we try to keep these expenses as low as possible,
                    especially when compared to others in the industry.
                </p>
                <div class="w-100 expense-btn text-center text-lg-start">

                    <button class="btn btn-primary w-75 py-3" data-bs-toggle="modal"
                            data-bs-target="#expense-breakdown-modal">EXPENSE BREAKDOWN
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 next-section">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-7 col-text-center">
                <div class="position-relative bg-black card-inner w-100 pt-4">
                    <div class="pt-5">
                        <h4 class="fw-bolder text-white">ONCE AGAIN,</h4>
                        <h4 class="fw-bolder text-white"> WELCOME TO THE TEAM! </h4>
                    </div>
                    <div class="next-step-btn py-5 ">
                        <a href="next-steps">
                            <button class="btn px-5 py-3 fw-bold btn-primary">
                                <svg x="0px" y="0px" viewBox="0 0 24 24" data-type="outline" data-name="circle-right-37"
                                     fill="none" stroke="white" height="30" width="30" class="mx-2">
                                    <g transform="translate(0, 0)">
                                        <circle vector-effect="non-scaling-stroke"
                                                stroke-linecap="square" stroke-miterlimit="10" cx="12" cy="12" r="11"
                                                stroke-linejoin="miter"></circle>
                                        <polyline data-color="color-2"
                                                  vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                  stroke-miterlimit="10" points=" 10,8 14,12 10,16 "
                                                  stroke-linejoin="miter">
                                        </polyline>
                                    </g>
                                </svg>
                                GO TO NEXT STEP
                            </button>
                        </a>
                    </div>
                    <div class="position-absolute dropdown-wrapper justify-content-center align-items-center mx-auto ">
                        <div class="dropdown-inner text-center my-auto">
                            <svg x="0px" y="0px" viewBox="0 0 24 24" data-type="glyph" data-name="stre-down"
                                 fill="black" height="50" width="50">
                                <g>
                                    <path
                                            d="M12,17c-0.207,0-0.413-0.063-0.588-0.191l-11-8l1.177-1.617L12,14.764l10.412-7.572l1.177,1.617l-11,8 C12.413,16.937,12.207,17,12,17z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<!--expense-breakdown Modal -->
<div class="modal fade" id="expense-breakdown-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map text-center">
                <div>
                    <p class="fw-bolder">Initial Fee to Non Licensed Associate</p>
                    <p>$125 </p>
                </div>
                <div>
                    <p class="fw-bolder">Initial Fee to Licensed Associate</p>
                    <p>$165 </p>
                </div>
                <div>
                    <p class="fw-bolder">Pre-Licensing Education Fee</p>
                    <p>$29 - $99 (Costs range based on provider and state)</p>
                </div>
                <div>
                    <p class="fw-bolder">Exam Fee</p>
                    <p>$100 (approximate cost – varies by state)</p>
                </div>
                <div>
                    <p class="fw-bolder">Cost of State License</p>
                    <p>$60 - $300 (approximate cost – varies by state)</p>
                </div>
                <div>
                    <p class="fw-bolder">E&O Costs for Life Licensed Agents</p>
                    <p>130 per quarter</p>
                </div>
                <div>
                    <p class="fw-bolder">Platform Fee for Licensed Agents</p>
                    <p>$15 Monthly</p>
                </div>


            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="bio_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body map" id="append_bio">

            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php" ?>



