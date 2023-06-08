<base href="../../">
<?php
$services_page = true;
$our_working_process = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Services Page</span>
            <a class="breadcrumb-item" href="webpages/services_page/our_working_process.php">Our Working Process</a>
            <span class="breadcrumb-item active">Our Working Process Edit</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
        <h4 class="tx-gray-800 mg-b-5">Edit Our Working Process</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Our Working Process</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/services_page/our_working_process_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Process Title: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="process_title" value="<?= spy_sabbir_single_select('working_process', $_GET['id'])['process_title'] ?>">
                                    </div>
                                </div>
                                <!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Services Details: <span class="tx-danger">*</span></label>
                                        <textarea id="summernote" class="form-control" name="process_details" rows="12" placeholder="Enter blog Details"> <?= spy_sabbir_single_select('working_process', $_GET['id'])['process_details'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Blog New Cover Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="new_process_cover_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="new_process_cover_photo" src="#" alt="blog New Cover Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#new_process_cover_photo').attr('src', e.target.result);
                                                    };
                                                    $('#new_process_cover_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Blog Old Cover Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="old_process_cover_photo" class="form-control" value="<?= spy_sabbir_single_select('working_process', $_GET['id'])['process_cover_photo'] ?>">
                                        <input type="hidden" name="working_process_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img width="200" height="200" class="img-thumbnail" src="../assets/images/working_process/<?= spy_sabbir_single_select('working_process', $_GET['id'])['process_cover_photo'] ?>" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Working Process</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/services_page/our_working_process.php">Cancel</a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>

    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php');

    ?>