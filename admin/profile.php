<?php
require_once('header.php');
require_once('db.php');
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel br-profile-page">

  <div class="card shadow-base bd-0 rounded-0 widget-4">
    <div class="card-header ht-75">
      <div class="hidden-xs-down">
        <h3><?= spy_sabbir_update('theme_default', 'company_name'); ?></h3>
      </div>
      <div class="tx-24 hidden-xs-down">
        <h3><?= spy_sabbir_update('theme_default', 'company_name'); ?></h3>
      </div>
    </div>
    <div class="card-body">
      <div class="card-profile-img">
        <img src="img/<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_img'] ?>" alt="">
      </div><!-- card-profile-img -->
      <h4 class="tx-normal tx-roboto tx-white"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></h4>
      <p class="mg-b-25"><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['designation']) ?></p>

      <p class="wd-md-1000 mg-md-l-auto mg-md-r-auto mg-b-25"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['about_me'] ?></p>

      <p class="mg-b-0 tx-24">
        <a href="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['facebook_profile_link'] ?>" class="tx-white-8 mg-r-5"><i class="fa fa-facebook-official"></i></a>
        <a href="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['twitter_profile_link'] ?>" class="tx-white-8 mg-r-5"><i class="fa fa-twitter"></i></a>
        <a href="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['instagram_profile_link'] ?>" class="tx-white-8 mg-r-5"><i class="fa fa-instagram"></i></a>
        <a href="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['linkedin_profile_link'] ?>" class="tx-white-8"><i class="fa fa-linkedin"></i></a>
      </p>
    </div><!-- card-body -->
  </div><!-- card -->

  <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
    <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
      <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#view_profile" role="tab">View Profile</a></li>
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#edit_profile" role="tab">Edit Profile</a></li>
    </ul>
  </div>

  <div class="tab-content br-profile-body">
    <div class="tab-pane fade active show" id="view_profile">
      <div class="row">
        <div class="col-lg-12">
          <div class="media-list bg-white rounded shadow-base text-center">
            <table class="table table-striped table-bordered">
              <thead class="bg-info">
                <tr>
                  <th colspan="2" class="text-center"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?> Details</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Full Name:</td>
                  <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?></td>
                </tr>
                <tr>
                  <td>Designation:</td>
                  <td><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['designation']) ?></td>
                </tr>
                <tr>
                  <td>Email Address:</td>
                  <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['email_address'] ?></td>
                </tr>
                <tr>
                  <td>Phone Number:</td>
                  <td><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['phone_number'] ?></td>
                </tr>
                <tr>
                  <td>Gender:</td>
                  <td><?= ucfirst(spy_sabbir_single_select('users', $_SESSION['user_id'])['gender']) ?></td>
                </tr>
                <tr>
                  <td>Date of Birth:</td>
                  <td><?= date("d-M-Y", strtotime(spy_sabbir_single_select('users', $_SESSION['user_id'])['date_of_birth'])) ?></td>
                </tr>
              </tbody>
            </table>
          </div><!-- card -->
        </div>
      </div><!-- row -->
    </div><!-- tab-pane -->

    <div class="tab-pane fade" id="edit_profile">
      <div class="row">
        <div class="col-lg-12">
          <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">
            <form method="POST" action="profile_edit_post.php" enctype="multipart/form-data" id="edit_form">
              <div class="form-layout">
                <div class="row mg-b-25 justify-content-center">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <input type="hidden" name="user_id" class="form-control" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['id'] ?>">
                      <input type="hidden" name="profile_old_photo" class="form-control" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['profile_img'] ?>">
                      <label class="form-control-label">Profile Photo: <span class="tx-danger">*</span></label>
                      <input class="form-control mb-2" type="file" name="profile_new_photo" onchange="readURL(this);">
                      <small>Photo Size 150*150 px</small><br>
                      <img class="hidden img-thumbnail" width="150px" height="150px" id="profile_new_photo" src="#" alt="Profile Photo" />
                      <script>
                        function readURL(input) {
                          if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                              $('#profile_new_photo').attr('src', e.target.result);
                            };
                            $('#profile_new_photo').removeClass('hidden');
                            reader.readAsDataURL(input.files[0]);
                          }
                        }
                      </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="user_name" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['full_name'] ?>">
                    </div>
                  </div>
                  <!-- col-6 -->
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="user_phone_number" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['phone_number'] ?>">
                    </div>
                  </div>
                  <!-- col-6 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>

                      <div class="row mg-t-10">
                        <div class="col-lg-3">
                          <label class="rdiobox">
                            <input name="user_gender" type="radio" value="male" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['gender'] == 'male' ? 'checked' : '' ?>>
                            <span>Male</span>
                          </label>
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                          <label class="rdiobox">
                            <input name="user_gender" type="radio" value="female" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['gender'] == 'female' ? 'checked' : '' ?>>
                            <span>Female</span>
                          </label>
                        </div><!-- col-3 -->
                        <div class="col-lg-3">
                          <label class="rdiobox">
                            <input name="user_gender" type="radio" value="others" <?= spy_sabbir_single_select('users', $_SESSION['user_id'])['gender'] == 'others' ? 'checked' : '' ?>>
                            <span>Others</span>
                          </label>
                        </div><!-- col-3 -->
                      </div><!-- row -->
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Date Of Birth: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="date" name="user_date_of_birth" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['date_of_birth'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">About Me: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" name="about_me" rows="4"><?= spy_sabbir_single_select('users', $_SESSION['user_id'])['about_me'] ?></textarea>
                    </div>
                  </div>
                  <!-- col-6 -->
                </div><!-- row -->
                <div class="row mt-3">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">Facebook Profile Link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="facebook_link" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['facebook_profile_link'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">Twitter Profile Link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="twitter_link" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['twitter_profile_link'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">Instagram Profile Link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="instagram_link" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['instagram_profile_link'] ?>">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="form-control-label">Linkedin Profile Link: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" name="linkedin_link" value="<?= spy_sabbir_single_select('users', $_SESSION['user_id'])['linkedin_profile_link'] ?>">
                    </div>
                  </div>
                </div>

                <div class="form-layout-footer text-center mt-3">
                  <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Edit Profile</a>
                </div><!-- form-layout-footer -->
              </div><!-- form-layout -->
            </form>
          </div>
        </div><!-- card -->
      </div>
    </div><!-- row -->
  </div><!-- tab-pane -->

  <?php
  require_once('footer.php');
  require_once('status.php');
  ?>