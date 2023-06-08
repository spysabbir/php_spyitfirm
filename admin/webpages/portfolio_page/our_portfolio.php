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
            <span class="breadcrumb-item active">Our Portfolio</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">

        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Add Portfolio</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Add Portfolio</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/portfolio_page/our_portfolio_post.php" enctype="multipart/form-data">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Name: <span
                                        class="tx-danger">*</span></label>
                                <input
                                    class="form-control <?= (isset($_SESSION['portfolio_name_error'])) ? 'is-invalid' : '' ?>"
                                    type="text" name="portfolio_name" placeholder="Enter Blog Headline"
                                    value="<?= (isset($_SESSION['old_portfolio_name'])) ? $_SESSION['old_portfolio_name'] : '';
                                                                                                                                                                                                                unset($_SESSION['old_portfolio_name']) ?>">
                                <?php if (isset($_SESSION['portfolio_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['portfolio_name_error'] ?></small>
                                <?php endif;
                                unset($_SESSION['portfolio_name_error'])
                                ?>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Category Name: <span
                                        class="tx-danger">*</span></label>
                                <select name="portfolio_category_name"
                                    class="form-control custom-select <?= (isset($_SESSION['portfolio_category_name_error'])) ? 'is-invalid' : '' ?>">
                                    <option value="">Choose a Category</option>
                                    <option value="graphic_design"
                                        <?= (isset($_SESSION['old_portfolio_category_name']) && $_SESSION['old_portfolio_category_name'] == 'graphic_design') ? 'selected' : '' ?>>
                                        Graphic Design</option>
                                    <option value="web_design"
                                        <?= (isset($_SESSION['old_portfolio_category_name']) && $_SESSION['old_portfolio_category_name'] == 'web_design') ? 'selected' : '' ?>>
                                        Web Design</option>
                                    <option value="web_development"
                                        <?= (isset($_SESSION['old_portfolio_category_name']) && $_SESSION['old_portfolio_category_name'] == 'web_development') ? 'selected' : '' ?>>
                                        Web Development</option>
                                    <option value="digital_marketing"
                                        <?= (isset($_SESSION['old_portfolio_category_name']) && $_SESSION['old_portfolio_category_name'] == 'digital_marketing') ? 'selected' : '';
                                                                        unset($_SESSION['old_portfolio_category_name']) ?>>Digital Marketing</option>
                                </select>
                                <?php if (isset($_SESSION['portfolio_category_name_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['portfolio_category_name_error'] ?></small>
                                <?php endif;
                                unset($_SESSION['portfolio_category_name_error'])
                                ?>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Live Portfolio link: <span
                                        class="tx-danger">*</span></label>
                                <input
                                    class="form-control <?= (isset($_SESSION['live_portfolio_link_error'])) ? 'is-invalid' : '' ?>"
                                    type="text" name="live_portfolio_link" placeholder="Enter Blog Headline"
                                    value="<?= (isset($_SESSION['old_live_portfolio_link'])) ? $_SESSION['old_live_portfolio_link'] : '';
                                                                                                                                                                                                                        unset($_SESSION['old_live_portfolio_link']) ?>">
                                <?php if (isset($_SESSION['live_portfolio_link_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['live_portfolio_link_error'] ?></small>
                                <?php endif;
                                unset($_SESSION['live_portfolio_link_error'])
                                ?>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Portfolio Details: <span
                                        class="tx-danger">*</span></label>
                                <textarea id="summernote"
                                    class="form-control <?= (isset($_SESSION['portfolio_details_error'])) ? 'is-invalid' : '' ?>"
                                    name="portfolio_details" rows="8"
                                    placeholder="Enter Blog Details"><?= (isset($_SESSION['old_portfolio_details'])) ? $_SESSION['old_portfolio_details'] : '';
                                                                                                                                                                                                                            unset($_SESSION['old_portfolio_details']) ?></textarea>
                                <?php if (isset($_SESSION['portfolio_details_error'])) : ?>
                                <small class="text-danger"><?= $_SESSION['portfolio_details_error'] ?></small>
                                <?php endif;
                                unset($_SESSION['portfolio_details_error'])
                                ?>
                            </div>
                        </div><!-- col-12 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Cover Photo: <span
                                        class="tx-danger">*</span></label>
                                <input
                                    class="form-control <?= (isset($_SESSION['portfolio_cover_photo_error'])) ? 'is-invalid' : '' ?>"
                                    type="file" name="portfolio_cover_photo">
                                <small>Photo Size 640*520 px</small>
                            </div>
                            <?php if (isset($_SESSION['portfolio_cover_photo_error'])) : ?>
                            <small class="text-danger"><?= $_SESSION['portfolio_cover_photo_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['portfolio_cover_photo_error'])
                            ?>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Portfolio Banner Photo: <span
                                        class="tx-danger">*</span></label>
                                <input
                                    class="form-control <?= (isset($_SESSION['portfolio_banner_photo_error'])) ? 'is-invalid' : '' ?>"
                                    type="file" name="portfolio_banner_photo">
                                <small>Photo Size 640*520 px</small>
                            </div>
                            <?php if (isset($_SESSION['portfolio_banner_photo_error'])) : ?>
                            <small class="text-danger"><?= $_SESSION['portfolio_banner_photo_error'] ?></small>
                            <?php endif;
                            unset($_SESSION['portfolio_banner_photo_error'])
                            ?>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add Portfolio</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>

        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Portfolio List</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Portfolio List</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <div class="row">
                <table id="message_table" class="table table-hover table-bordered table-striped">
                    <thead class="bg-info">
                        <tr>
                            <th class="text-center">Serial No</th>
                            <th class="text-center">Portfolio Img</th>
                            <th class="text-center">Portfolio Name</th>
                            <th class="text-center">Portfolio Details</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $srial_no = 1;
                        foreach (spy_sabbir_all('portfolios') as $single_portfolio) :
                        ?>
                        <tr>
                            <td>
                                <h5 class="mt-5"><b><?= $srial_no++ ?></b></h5>
                            </td>
                            <td>
                                <img height="170px" width="220px"
                                    src="../assets/images/portfolio/<?= $single_portfolio['portfolio_cover_photo'] ?>"
                                    alt="">
                            </td>
                            <td>
                                <small>Portfolio Name: </small>
                                <p><?= $single_portfolio['portfolio_name'] ?></p>
                                <small>Portfolio Category: </small>
                                <p><?= $single_portfolio['portfolio_category_name'] ?></p>
                                <small>Portfolio Link: </small>
                                <p><?= $single_portfolio['live_portfolio_link'] ?></p>
                            </td>
                            <td>
                                <p><?= substr($single_portfolio['portfolio_details'], 0, 700) ?>...</p>
                            </td>
                            <td>
                                <div class="action text-center">
                                    <a href="webpages/portfolio_page/our_portfolio_edit.php?id=<?= $single_portfolio['id'] ?>"
                                        class=" btn btn-sm btn-info mt-3">Edit</a>
                                    <button
                                        value="webpages/portfolio_page/our_portfolio_delete.php?id=<?= $single_portfolio['id'] ?>"
                                        class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php')
    ?>