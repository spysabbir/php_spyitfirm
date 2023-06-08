<base href="../../">
<?php
$blog_page = true;
$my_blog = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Blog Page</span>
            <a class="breadcrumb-item" href="webpages/blog_page/my_blog.php">My Blog</a>
            <span class="breadcrumb-item active">My Blog Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Blog</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Blog</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/blog_page/my_blog_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Blog Headline: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="blog_headline" value="<?= spy_sabbir_single_select('blogs', $_GET['id'])['blog_headline'] ?>">
                                    </div>
                                </div>
                                <!-- col-4 -->
                                <div class="col-lg-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Blog Details: <span class="tx-danger">*</span></label>
                                        <textarea id="summernote" class="form-control" name="blog_details" rows="12" placeholder="Enter blog Details"> <?= spy_sabbir_single_select('blogs', $_GET['id'])['blog_details'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- col-6 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Blog Old Cover Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="blog_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('blogs', $_GET['id'])['blog_cover_photo'] ?>">
                                        <input type="hidden" name="blog_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img class="w-100 img-fluid img-thumbnail" src="../assets/images/blog/<?= spy_sabbir_single_select('blogs', $_GET['id'])['blog_cover_photo'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Blog New Cover Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="blog_new_cover_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="blog_new_cover_photo" src="#" alt="blog New Cover Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#blog_new_cover_photo').attr('src', e.target.result) .width(150)
                                                            .height(200);
                                                    };
                                                    $('#blog_new_cover_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Blog</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/blog_page/my_blog.php">Cancel</a>
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