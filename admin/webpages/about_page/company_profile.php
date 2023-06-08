<base href="../../">
<?php
$about_page = true;
$company_profile = true;
require_once('../../header.php');
require_once('../../db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="dashboard.php">Bracket</a>
      <span class="breadcrumb-item">About Page</span>
      <span class="breadcrumb-item active">Company Profile</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Company Profile</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Update Company Profile</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/about_page/company_profile_update.php" enctype="multipart/form-data" id="edit_form">
        <div class="form-layout">
          <div class="row d-flex justify-content-center">
            <!-- <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Logo Old Photo: <span class="tx-danger">*</span></label>
                <input type="hidden" name="logo_old_photo" class="form-control" value="<?= spy_sabbir_update('company_profiles', 'company_profile_photo'); ?>">
                <img width="180" height="70" src="../assets/images/<?= spy_sabbir_update('company_profiles', 'company_profile_photo'); ?>" alt="">
              </div>
            </div> -->
            <div class="col-lg-4">
              <div class="form-group">
                <input type="hidden" name="old_company_profile_photo" class="form-control" value="<?= spy_sabbir_update('company_profiles', 'company_profile_photo'); ?>">
                <label class="form-control-label">Company Profile Photo: <span class="tx-danger">*</span></label>
                <input class="form-control" type="file" name="new_company_profile_photo" onchange="readURL(this);">
                <small>Photo Size 1920*1080 px</small><br>
                <img class="hidden img-thumbnail" id="new_company_profile_photo" src="#" alt="Banner New Photo" />
                <script>
                  function readURL(input) {
                    if (input.files && input.files[0]) {
                      var reader = new FileReader();
                      reader.onload = function(e) {
                        $('#new_company_profile_photo').attr('src', e.target.result);
                      };
                      $('#new_company_profile_photo').removeClass('hidden');
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
                <label class="form-control-label">Founded In: <span class="tx-danger">*</span></label>
                <input class="form-control" type="date" name="founded" value="<?= spy_sabbir_update('company_profiles', 'founded'); ?>">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Team Member: <span class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="team_member" value="<?= spy_sabbir_update('company_profiles', 'team_member'); ?>">
              </div>
            </div><!-- col-4 -->
          </div>
          <div class="form-layout-footer">
            <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Company Profile Update</a>
          </div>
        </div>
      </form>
    </div>

  </div><!-- br-pagebody -->

  <?php
  require_once('../../footer.php');
  require_once('../../status.php');
  ?>