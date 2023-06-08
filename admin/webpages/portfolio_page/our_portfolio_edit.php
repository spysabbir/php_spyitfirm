<base href="../../">
<?php
$portfolio_page = true;
$our_portfolio = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item">Webpages</span>
            <span class="breadcrumb-item">Portfolio Page</span>
            <a class="breadcrumb-item" href="webpages/portfolio_page/our_portfolio.php">Our Portfolio</a>
            <span class="breadcrumb-item active">Our Portfolio Edit</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit Portfolio</h4>
        <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Portfolio</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/portfolio_page/our_portfolio_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="portfolio_name" value="<?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Category Name: <span class="tx-danger">*</span></label>
                                <select name="portfolio_category_name" class="form-control custom-select">
                                    <option value="graphic_design" <?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_category_name'] == 'graphic_design' ? 'selected' : '' ?>>Graphic Design</option>
                                    <option value="web_design" <?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_category_name'] == 'web_design' ? 'selected' : '' ?>>Web Design</option>
                                    <option value="web_development" <?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_category_name'] == 'web_development' ? 'selected' : '' ?>>Web Development</option>
                                    <option value="digital_marketing" <?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_category_name'] == 'digital_marketing' ? 'selected' : '' ?>>Digital Marketing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Live Portfolio Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="live_portfolio_link" value="<?= spy_sabbir_single_select('portfolios', $_GET['id'])['live_portfolio_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Portfolio Details: <span class="tx-danger">*</span></label>
                                <textarea id="summernote" class="form-control" name="portfolio_details" rows="8" placeholder="Enter Blog Details"><?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_details'] ?></textarea>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Portfolio New Cover Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="portfolio_new_cover_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="portfolio_new_cover_photo" src="#" alt="blog New Cover Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#portfolio_new_cover_photo').attr('src', e.target.result);
                                                    };
                                                    $('#portfolio_new_cover_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Portfolio Old Cover Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="portfolio_old_photo_name" class="form-control" value="<?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_cover_photo'] ?>">
                                        <input type="hidden" name="portfolio_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img height="170px" width="220px" class="img-thumbnail" src="../assets/images/portfolio/<?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_cover_photo'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Portfolio New Banner Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="portfolio_new_banner_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="portfolio_new_banner_photo" src="#" alt="blog New Cover Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#portfolio_new_banner_photo').attr('src', e.target.result);
                                                    };
                                                    $('#portfolio_new_banner_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Portfolio Old Cover Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="portfolio_old_banner_photo" class="form-control" value="<?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_banner_photo'] ?>">
                                        <img height="170px" width="220px" class="img-thumbnail" src="../assets/images/portfolio/<?= spy_sabbir_single_select('portfolios', $_GET['id'])['portfolio_banner_photo'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update Portfolio</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/portfolio_page/our_portfolio.php">Cancel</a>
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