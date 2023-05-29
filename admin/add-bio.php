<?php
include_once "includes/dashboard-header.php";

if(!isset($_GET['bio_id'])){
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}

$users=$func->getSingleTeamMember($_GET['bio_id']);

if(!empty($users)){
    $user=$users[0];

}else{
    ?>
    <script type="text/javascript">
        window.location.href="logout";
    </script>
    <?php
    exit();
}
?>
<style>
    .mce-notification{
        display: none;
    }
</style>
<main id="main" class="main">

    <!--Page Title -->
    <div class="pagetitle">
        <h1>Teams</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item active">Add Bio</li>
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
                            <form id="edit_bio">
                                <input value="<?=$user['id']?>" id="team_id1" type="hidden">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText" class="col-sm-12 col-form-label">Add Bio</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" type="text"  id="bio">

                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" id="sub_btn2" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>


<?php include_once "includes/dashboard-footer.php" ?>
<script>
    var d=`<?=$user['bio']?>`;
    setTimeout(() => {
        tinymce.get("bio").setContent(d);
    }, "3000")

</script>
<script>
    tinymce.init({
        selector: '#bio',
        toolbar: "undo redo | styleselect | fontselect | link image | media | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",
        font_formats: "Noto-Nastaliq-Urdu = Noto Nastaliq Urdu; Noto-Sans-Arabic = Noto Sans Arabic;Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
        content_style: "@import url('https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;500;600;700&family=Noto+Sans+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap'); body { font-family: Noto-Nastaliq-Urdu; }",
        height: 500,
        plugins: 'image code media',
        // images_upload_url : '../serverside/upload.php',
        automatic_uploads : true,
        file_picker_types: 'image',
        image_title: true,
        image_generaltab:false,
        image_sourcetab:false,
        images_upload_handler : function(blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '../serverside/upload.php');
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);
                if (!json || typeof json.file_path != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.file_path);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        },
    });
</script>