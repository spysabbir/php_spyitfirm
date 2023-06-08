<base href="../">
<?php
$theme_default = true;
require_once('../header.php');
require_once('../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">

  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item">Webpages</span>
      <span class="breadcrumb-item active">Theme Default Update</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Theme Default</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Update Theme Default</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/theme_default_update.php" enctype="multipart/form-data" id="edit_form">
        <div class="form-layout">
          <div class="row d-flex justify-content-center">
            <!-- <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Logo Old Photo: <span class="tx-danger">*</span></label>
                <input type="hidden" name="logo_old_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>">
                <img width="180" height="70" src="../assets/images/<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>" alt="">
              </div>
            </div> -->
            <div class="col-lg-4">
              <div class="form-group">
                <input type="hidden" name="logo_old_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'logo_photo'); ?>">
                <label class="form-control-label">Logo New Photo: <span class="tx-danger">*</span></label>
                <input class="form-control" type="file" name="logo_new_photo" onchange="readURL(this);">
                <?php if (isset($_SESSION['logo_new_photo_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['logo_new_photo_error'] ?></small>
                <?php endif;
                unset($_SESSION['logo_new_photo_error'])
                ?>
                <small>Photo Size 1920*1080 px</small><br>
                <img class="hidden img-thumbnail" id="logo_new_photo" src="#" alt="Banner New Photo" />
                <script>
                  function readURL(input) {
                    if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      reader.onload = function(e) {
                        $('#logo_new_photo').attr('src', e.target.result);
                      };
                      $('#logo_new_photo').removeClass('hidden');
                      reader.readAsDataURL(input.files[0]);
                    }
                  }
                </script>
              </div>
            </div><!-- col-4 -->
          </div>
          <div class="row d-flex justify-content-center">
            <!-- <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Old Main Banner Photo: <span class="tx-danger">*</span></label>
                <input type="hidden" name="old_main_banner_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>">
                <img width="180" height="70" src="../assets/images/<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>" alt="">
              </div>
            </div> -->
            <div class="col-lg-4">
              <div class="form-group">
                <input type="hidden" name="old_main_banner_photo" class="form-control" value="<?= spy_sabbir_update('theme_default', 'main_banner_photo'); ?>">
                <label class="form-control-label">New Main Banner Photo: <span class="tx-danger">*</span></label>
                <input class="form-control" type="file" name="new_main_banner_photo" onchange="readURL(this);">
                <?php if (isset($_SESSION['new_main_banner_photo_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['new_main_banner_photo_error'] ?></small>
                <?php endif;
                unset($_SESSION['new_main_banner_photo_error'])
                ?>
                <small>Photo Size 1920*1080 px</small><br>
                <img class="hidden img-thumbnail" id="new_main_banner_photo" src="#" alt="Main Banner New Photo" />
                <script>
                  function readURL(input) {
                    if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      reader.onload = function(e) {
                        $('#new_main_banner_photo').attr('src', e.target.result);
                      };
                      $('#new_main_banner_photo').removeClass('hidden');
                      reader.readAsDataURL(input.files[0]);
                    }
                  }
                </script>
              </div>
            </div><!-- col-4 -->
          </div>
          <div class="row mg-b-25">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_name" placeholder="Enter Owner Name" value="<?= spy_sabbir_update('theme_default', 'company_name'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Company Slogan: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_slogan" placeholder="Enter Owner Name" value="<?= spy_sabbir_update('theme_default', 'company_slogan'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Company Email Address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="email" name="company_email_address" placeholder="Enter Owner Email Address" value="<?= spy_sabbir_update('theme_default', 'company_email_address'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Company Phone Number: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_phone_number" placeholder="Enter Owner Phone Number" value="<?= spy_sabbir_update('theme_default', 'company_phone_number'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Company Address: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="company_address" placeholder="Enter Owner Phone Number" value="<?= spy_sabbir_update('theme_default', 'company_address'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-12">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Company About Details: <span class="tx-danger">*</span></label>
                <textarea id="summernote" class="form-control" name="company_about_details" rows="5" placeholder="Enter Owner About Details"><?= spy_sabbir_update('theme_default', 'company_about_details'); ?></textarea>
              </div>
            </div><!-- col-12 -->
          </div>
          <h6 class="mb-3">Social Media Link: </h6>
          <div class="row mg-b-25">
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Facekook Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="facebook_link" placeholder="Enter Facekook Link" value="<?= spy_sabbir_update('theme_default', 'facebook_link'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Twitter Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="twitter_link" placeholder="Enter Twitter Link" value="<?= spy_sabbir_update('theme_default', 'twitter_link'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Instagram Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="instagram_link" placeholder="Enter Instagram Link" value="<?= spy_sabbir_update('theme_default', 'instagram_link'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">linkedin Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="linkedin_link" placeholder="Enter linkedin Link" value="<?= spy_sabbir_update('theme_default', 'linkedin_link'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Pinterest Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="pinterest_link" placeholder="Enter linkedin Link" value="<?= spy_sabbir_update('theme_default', 'pinterest_link'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Youtube Link: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="youtube_link" placeholder="Enter linkedin Link" value="<?= spy_sabbir_update('theme_default', 'youtube_link'); ?>">
              </div>
            </div><!-- col-4 -->
          </div>
        </div>
        <div class="form-layout-footer">
          <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Update</a>
        </div>
      </form>
    </div>

  </div><!-- br-pagebody -->

  <?php
  require_once('../footer.php');
  require_once('../status.php');
  ?>