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
      <span class="breadcrumb-item active">Slider</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Slider Add</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Add Slider</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/home_page/slider_post.php" enctype="multipart/form-data">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Slider Banner Img: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['slider_banner_img_error'])) ? 'is-invalid' : '' ?>" type="file" name="slider_banner_img">
                <small>Photo Size 640*520 px</small>
              </div>
              <?php if (isset($_SESSION['slider_banner_img_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['slider_banner_img_error'] ?></small>
              <?php endif;
              unset($_SESSION['slider_banner_img_error'])
              ?>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Slider Content Title: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['slider_content_title_error'])) ? 'is-invalid' : '' ?>" type="text" name="slider_content_title" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_slider_content_title'])) ? $_SESSION['old_slider_content_title'] : '' ; unset($_SESSION['old_slider_content_title'])?>">
                <?php if (isset($_SESSION['slider_content_title_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['slider_content_title_error'] ?></small>
                <?php endif;
                unset($_SESSION['slider_content_title_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Slider Content Subtitle: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['slider_content_subtitle_error'])) ? 'is-invalid' : '' ?>" type="text" name="slider_content_subtitle" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_slider_content_subtitle'])) ? $_SESSION['old_slider_content_subtitle'] : '' ; unset($_SESSION['old_slider_content_subtitle']) ?>">
                <?php if (isset($_SESSION['slider_content_subtitle_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['slider_content_subtitle_error'] ?></small>
                <?php endif;
                unset($_SESSION['slider_content_subtitle_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-control-label">Slider Details: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control <?= (isset($_SESSION['slider_details_error'])) ? 'is-invalid' : '' ?>" name="slider_details" rows="5" placeholder="Enter Blog Details"><?= (isset($_SESSION['old_slider_details'])) ? $_SESSION['old_slider_details'] : '' ; unset($_SESSION['old_slider_details'])?></textarea>
                <?php if (isset($_SESSION['slider_details_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['slider_details_error'] ?></small>
                <?php endif;
                unset($_SESSION['slider_details_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Slider Btn Name: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['slider_btn_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="slider_btn_name" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_slider_btn_name'])) ? $_SESSION['old_slider_btn_name'] : '' ; unset($_SESSION['old_slider_btn_name'])?>">
                <?php if (isset($_SESSION['slider_btn_name_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['slider_btn_name_error'] ?></small>
                <?php endif;
                unset($_SESSION['slider_btn_name_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Slider Btn Link: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['slider_btn_link_error'])) ? 'is-invalid' : '' ?>" type="text" name="slider_btn_link" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_slider_btn_link'])) ? $_SESSION['old_slider_btn_link'] : '' ; unset($_SESSION['old_slider_btn_link'])?>">
                <?php if (isset($_SESSION['slider_btn_link_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['slider_btn_link_error'] ?></small>
                <?php endif;
                unset($_SESSION['slider_btn_link_error'])
                ?>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Add Slider</button>
          </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
      </form>
    </div>

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Slider List</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Slider List</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <div class="card text-start|center|end">
        <div class="card-body">
          <table class="table table-hover table-bordered table-striped">
            <thead class="bg-info">
              <tr>
                <th class="text-center">Slider Content</th>
                <th class="text-center">Slider Banner Img</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <?php foreach (spy_sabbir_all('sliders') as $single_slider) : ?>
                <tr>
                  <td>
                    <h3><?= $single_slider['slider_content_title'] ?></h3>
                    <h4><?= $single_slider['slider_content_subtitle'] ?></h4>
                    <p><?= $single_slider['slider_details'] ?></p>
                    <h5><?= $single_slider['slider_btn_name'] ?></h5>
                    <h6><?= $single_slider['slider_btn_link'] ?></h6>
                  </td>
                  <td>
                    <img width="280" height="200"  src="../assets/images/slider/<?= $single_slider['slider_banner_img'] ?>" alt="">
                  </td>
                  <td>
                    <a href="webpages/home_page/slider_edit.php?id=<?= $single_slider['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                    <button value="webpages/home_page/slider_delete.php?id=<?= $single_slider['id'] ?>" class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- card -->
  </div><!-- br-pagebody -->

  <?php
  require_once('../../footer.php');
  require_once('../../status.php');

  ?>