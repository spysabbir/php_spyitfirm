<base href="../../">
<?php
$home_page = true;
$slider = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Home Page</span>
            <a class="breadcrumb-item" href="webpages/home_page/slider.php">Slider</a>
            <span class="breadcrumb-item active">Slider Edit</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Slider</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Slider</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/home_page/slider_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Slider Content Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slider_content_title" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_content_title'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Slider Content Subtitle: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slider_content_subtitle" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_content_subtitle'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Slider Details: <span class="tx-danger">*</span></label>
                                <textarea id="summernote" class="form-control" name="slider_details" rows="8" placeholder="Enter Blog Details"><?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_details'] ?></textarea>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Slider Btn Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slider_btn_name" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_btn_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Slider Btn Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="slider_btn_link" placeholder="Enter Blog Headline" value="<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_btn_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label"> New Slider Banner Img: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="new_slider_banner_img" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="new_slider_banner_img" src="#" alt="Slider New Banner Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#new_slider_banner_img').attr('src', e.target.result);
                                                    };
                                                    $('#new_slider_banner_img').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Old Slider Banner Img: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="old_slider_banner_img" class="form-control" value="<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_banner_img'] ?>">
                                        <input type="hidden" name="slider_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img width="120" height="75" class="img-thumbnail" src="../assets/images/slider/<?= spy_sabbir_single_select('sliders', $_GET['id'])['slider_banner_img'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Slider</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/home_page/slider.php">Cancel</a>
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