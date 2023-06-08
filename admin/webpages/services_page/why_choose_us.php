<base href="../../">
<?php
$services_page = true;
$why_choose_us = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item">Webpages</span>
      <span class="breadcrumb-item">Services Page</span>
      <span class="breadcrumb-item active">Why Choose Us</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">
    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Add Working Process</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Add Why Choose Us</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/services_page/why_choose_us_post.php" enctype="multipart/form-data">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Why Choose Us Title: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['why_choose_us_title_error'])) ? 'is-invalid' : '' ?>"
                  type="text" name="why_choose_us_title" placeholder="Enter Blog Headline"
                  value="<?= (isset($_SESSION['old_why_choose_us_title'])) ? $_SESSION['old_why_choose_us_title'] : '';
                                                                                                                                                                                                        unset($_SESSION['old_why_choose_us_title']) ?>">
                <?php if (isset($_SESSION['why_choose_us_title_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['why_choose_us_title_error'] ?></small>
                <?php endif;
                unset($_SESSION['why_choose_us_title_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Why Choose Us Cover Photo: <span class="tx-danger">*</span></label>
                <input
                  class="form-control <?= (isset($_SESSION['why_choose_us_cover_photo_error'])) ? 'is-invalid' : '' ?>"
                  type="file" name="why_choose_us_cover_photo">
                <small>Photo Size 640*520 px</small>
              </div>
              <?php if (isset($_SESSION['why_choose_us_cover_photo_error'])) : ?>
              <small class="text-danger"><?= $_SESSION['why_choose_us_cover_photo_error'] ?></small>
              <?php endif;
              unset($_SESSION['why_choose_us_cover_photo_error'])
              ?>
            </div>
            <div class="col-lg-12">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Why Choose Us Details: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control <?= (isset($_SESSION['why_choose_us_details_error'])) ? 'is-invalid' : '' ?>"
                  name="why_choose_us_details" rows="10"
                  placeholder="Enter Blog Details"><?= (isset($_SESSION['old_why_choose_us_details'])) ? $_SESSION['old_why_choose_us_details'] : ''; unset($_SESSION['old_why_choose_us_details']) ?></textarea>
                <?php if (isset($_SESSION['why_choose_us_details_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['why_choose_us_details_error'] ?></small>
                <?php endif;
                unset($_SESSION['why_choose_us_details_error'])
                ?>
              </div>
            </div>
          </div><!-- row -->

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Add Why Choose Us</button>
          </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
      </form>
    </div>

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Working Process List</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Working Process List</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <div class="row">
        <table class="table table-hover table-bordered table-striped">
          <thead class="bg-info">
            <tr>
              <th class="text-center">Working Process Title</th>
              <th class="text-center">Working Process Details</th>
              <th class="text-center">Working Process Img</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php foreach (spy_sabbir_all('choose_us') as $single_choose_us) : ?>
            <tr>
              <td>
                <?= $single_choose_us['why_choose_us_title'] ?>
              </td>
              <td>
                <?= substr($single_choose_us['why_choose_us_details'], 0, 500) ?>
              </td>
              <td>
                <img width="120" height="80"
                  src="../assets/images/choose_us/<?= $single_choose_us['why_choose_us_cover_photo'] ?>" alt="">
              </td>
              <td>
                <a href="webpages/services_page/why_choose_us_edit.php?id=<?= $single_choose_us['id'] ?>"
                  class="btn btn-sm btn-info">Edit</a>
                <button value="webpages/services_page/why_choose_us_delete.php?id=<?= $single_choose_us['id'] ?>"
                  class="btn btn-sm btn-danger delete_btn mt-2">Delete</button>
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
  require_once('../../status.php');
  ?>