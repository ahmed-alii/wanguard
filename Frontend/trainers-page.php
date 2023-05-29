<?php
include_once "includes/header.php";
if (!isset($_SESSION['user_id'])){
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}

?>

    <section class="bg-black" id="section1">
        <div class="container py-5">
            <div class="pt-5">
                <h2 class="fw-bolder text-primary text-center display-3">VANGUARD WEALTH BUILDER</h2>
                <h2 class="fw-bolder text-center display-5">AGENT TOOLS</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="py-5">
                        <nav class="pt-5">
                            <div class="nav nav-tabs mb-3 justify-content-center " id="nav-tab" role="tablist">
                                <button class="nav-link active text-white" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">
                                    <div class="map">
                                        <div class="map-item">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 24 24"
                                                 xml:space="preserve" class="brz-icon-svg align-[initial]"
                                                 data-type="outline"
                                                 data-name="b-add"><g transform="translate(0, 0)" class="nc-icon-wrapper"
                                                                      fill="none">
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M10,20.836 c0-0.604-0.265-1.179-0.738-1.554C8.539,18.708,7.285,18,5.5,18s-3.039,0.708-3.762,1.282C1.265,19.657,1,20.232,1,20.836V22h9 V20.836z"
                                                          stroke-linejoin="miter"></path>
                                                    <circle fill="none" stroke="currentColor"
                                                            vector-effect="non-scaling-stroke"
                                                            stroke-linecap="square" stroke-miterlimit="10" cx="5.5"
                                                            cy="12.5"
                                                            r="2.5" stroke-linejoin="miter"></circle>
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke"
                                                          stroke-linecap="square" stroke-miterlimit="10"
                                                          d="M23,20.836 c0-0.604-0.265-1.179-0.738-1.554C21.539,18.708,20.285,18,18.5,18s-3.039,0.708-3.762,1.282C14.265,19.657,14,20.232,14,20.836V22 h9V20.836z"
                                                          stroke-linejoin="miter"></path>
                                                    <circle fill="none" stroke="currentColor"
                                                            vector-effect="non-scaling-stroke"
                                                            stroke-linecap="square" stroke-miterlimit="10" cx="18.5"
                                                            cy="12.5"
                                                            r="2.5" stroke-linejoin="miter"></circle>
                                                    <line data-color="color-2" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="8"
                                                          stroke-linejoin="miter"></line>
                                                    <line data-color="color-2" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10" x1="9" y1="5" x2="15" y2="5"
                                                          stroke-linejoin="miter"></line>
                                                </g></svg>
                                        </div>
                                    </div>

                                    RECRUITING TOOLS
                                </button>
                                <button class="nav-link text-white" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">
                                    <div class="map">
                                        <div class="map-item">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 24 24" xml:space="preserve"
                                                 class="brz-icon-svg align-[initial]" data-type="outline"
                                                 data-name="handshake"><g transform="translate(0, 0)"
                                                                          class="nc-icon-wrapper" fill="none">
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M2.546,12.94l-0.259-0.35 C0.315,9.704,0.609,5.733,3.171,3.171C5.333,1.01,8.735,0.236,12,1.923"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M18,7c-2,2-6,0-6,0l-1,1 C9.343,9.657,6.657,9.657,5,8l0,0l5.345-4.829c2.949-2.949,7.763-2.894,10.642,0.164c2.783,2.955,2.492,7.67-0.379,10.54 l-0.271,0.272"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                    <path fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-linecap="square"
                                                          stroke-miterlimit="10"
                                                          d="M7.682,21.218l-4.95-4.95 c-0.976-0.976-0.976-2.559,0-3.536l0,0c0.976-0.976,2.559-0.976,3.536,0l4.95,4.95c0.976,0.976,0.976,2.559,0,3.536l0,0 C10.241,22.194,8.658,22.194,7.682,21.218z"
                                                          stroke-linejoin="miter"></path>
                                                    <path data-cap="butt" fill="none" stroke="currentColor"
                                                          vector-effect="non-scaling-stroke" stroke-miterlimit="10"
                                                          d="M14.234,7.749l5.473,5.473 c1.172,1.172,1.172,3.071,0,4.243l-4.243,4.243c-1.172,1.172-3.071,1.172-4.243,0l-0.269-0.259"
                                                          stroke-linejoin="miter" stroke-linecap="butt"></path>
                                                </g></svg>
                                        </div>
                                    </div>
                                    CLIENT TOOLS
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">

                                <div class="container text-center">
                                    <button class="btn btn-primary py-2 mx-3 my-3">FOLLOW UP INTERVIEW KIT</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">TAX OFFICE REFERRAL SHEET</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">SAVING TRACKER</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">100 NAMES LIST</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">TOP 25 LIST</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">MEMORY JOGGER</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">PROMOTION VALIDATION FORM</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">TRAINER CERTIFICATION FORM</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">LAUNCH BUSINESS PLAN</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">THE FORCE SCRIPT MANUEL</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">BREAK THE FLOOR</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">BPM INFORMATION KIT</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">BFS MANUAL</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">NEW RECRUIT FLOWCHART</button>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="container text-center">
                                    <a class="text-decoration-none" href="index">
                                        <button class="btn btn-primary py-2 mx-3 my-3">FNA PHASE 1 PPT</button>
                                    </a>
                                    <button class="btn btn-primary py-2 mx-3 my-3">FNA PHASE 2 PPT</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">4 % RULE</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">DEBIT MASTERY TOOL</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">BUDGET BUDDY</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">INCREASING CASH FLOW TOOLS</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">TAX WITHHOLDING TOOL</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">401K DEVELOPER LIST</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">401K VS IUL</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">REFERRAL GREEN CARD</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">FNA SCRIPT FOR ZOOM</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">FNA PREP WORKSHEET</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">FNA DATA FORM</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">NAME GAME REFERRAL CARD</button>
                                    <button class="btn btn-primary py-2 mx-3 my-3">PORTFOLIO RELIANCE CALCULATOR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div>
                            <h2 class="fw-bolder text-center">
                                FNA PHASE 1 PPT
                            </h2>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>

<?php include_once "includes/footer.php" ?>