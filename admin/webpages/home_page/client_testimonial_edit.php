<base href="../../">
<?php
$home_page = true;
$client_testimonial = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Home Page</span>
            <a class="breadcrumb-item" href="webpages/home_page/client_testimonial.php">Client Testimonial</a>
            <span class="breadcrumb-item active">Client Testimonial Edit</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Client Testimonial</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Client Testimonial</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/home_page/client_testimonial_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Clients Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="client_name" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['client_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Client Details: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="client_details" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['client_details'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Client Address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="client_address" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['client_address'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Client Comments: <span class="tx-danger">*</span></label>
                                <textarea id="summernote" class="form-control" name="client_comments" rows="8" placeholder="Enter Blog Details"><?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['client_comments'] ?></textarea>
                            </div>
                        </div><!-- col-12 -->
                        <!-- col-6 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label"> New Clients Project logo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="client_testimonials_new_cover_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="client_testimonials_new_cover_photo" src="#" alt="blog New Cover Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#client_testimonials_new_cover_photo').attr('src', e.target.result);
                                                    };
                                                    $('#client_testimonials_new_cover_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Old Clients Project logo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="client_testimonials_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['project_logo_img'] ?>">
                                        <input type="hidden" name="client_testimonials_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img width="120" height="75" class="img-thumbnail" src="../assets/images/client_testimonials/<?= spy_sabbir_single_select('client_testimonials', $_GET['id'])['project_logo_img'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Clients Testimonial </a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/home_page/client_testimonial.php">Cancel</a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>
    </div>

    <div class="br-pagebody">


    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php')
    ?>