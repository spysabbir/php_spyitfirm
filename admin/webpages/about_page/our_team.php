<base href="../../">
<?php
$about_page = true;
$our_team = true;
require_once('../../header.php');
require_once('../../db.php');
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <span class="breadcrumb-item">Webpages</span>
      <span class="breadcrumb-item">About Page</span>
      <span class="breadcrumb-item active">Our Team</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagebody">

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Add Our Team</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>

    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Add Our Team</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <form method="POST" action="webpages/about_page/our_team_post.php" enctype="multipart/form-data">
        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Team Member Name: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_name_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_name" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_name'])) ? $_SESSION['old_team_member_name'] : '';
                                                                                                                                                                                                  unset($_SESSION['old_team_member_name']) ?>">
                <?php if (isset($_SESSION['team_member_name_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_name_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_name_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Team Member Designation: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_designation_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_designation" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_designation'])) ? $_SESSION['old_team_member_designation'] : '';
                                                                                                                                                                                                                unset($_SESSION['old_team_member_designation']) ?>">
                <?php if (isset($_SESSION['team_member_designation_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_designation_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_designation_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Team Member Photo: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_photo_error'])) ? 'is-invalid' : '' ?>" type="file" name="team_member_photo">
                <small>Photo Size 640*520 px</small>
              </div>
              <?php if (isset($_SESSION['team_member_photo_error'])) : ?>
                <small class="text-danger"><?= $_SESSION['team_member_photo_error'] ?></small>
              <?php endif;
              unset($_SESSION['team_member_photo_error'])
              ?>
            </div><!-- col-4 -->
          </div><!-- row -->

          <div class="row mg-b-25">
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Team Member Facebook Link: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_facebook_link_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_facebook_link" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_facebook_link'])) ? $_SESSION['old_team_member_facebook_link'] : '';
                                                                                                                                                                                                                    unset($_SESSION['old_team_member_facebook_link']) ?>">
                <?php if (isset($_SESSION['team_member_facebook_link_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_facebook_link_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_facebook_link_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Team Member Twitter Link: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_twitter_link_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_twitter_link" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_twitter_link'])) ? $_SESSION['old_team_member_twitter_link'] : '';
                                                                                                                                                                                                                  unset($_SESSION['old_team_member_twitter_link']) ?>">
                <?php if (isset($_SESSION['team_member_twitter_link_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_twitter_link_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_twitter_link_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Team Member Instagram Link: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_instaggram_link_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_instaggram_link" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_instaggram_link'])) ? $_SESSION['old_team_member_instaggram_link'] : '';
                                                                                                                                                                                                                        unset($_SESSION['old_team_member_instaggram_link']) ?>">
                <?php if (isset($_SESSION['team_member_instaggram_link_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_instaggram_link_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_instaggram_link_error'])
                ?>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-3">
              <div class="form-group">
                <label class="form-control-label">Team Member Linkedin Link: <span class="tx-danger">*</span></label>
                <input class="form-control <?= (isset($_SESSION['team_member_linkedin_link_error'])) ? 'is-invalid' : '' ?>" type="text" name="team_member_linkedin_link" placeholder="Enter Blog Headline" value="<?= (isset($_SESSION['old_team_member_linkedin_link'])) ? $_SESSION['old_team_member_linkedin_link'] : '';
                                                                                                                                                                                                                    unset($_SESSION['old_team_member_linkedin_link']) ?>">
                <?php if (isset($_SESSION['team_member_linkedin_link_error'])) : ?>
                  <small class="text-danger"><?= $_SESSION['team_member_linkedin_link_error'] ?></small>
                <?php endif;
                unset($_SESSION['team_member_linkedin_link_error'])
                ?>
              </div>
            </div><!-- col-4 -->
          </div><!-- row -->

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Add Team Member</button>
          </div><!-- form-layout-footer -->
        </div><!-- form-layout -->
      </form>
    </div>

    <div class="title text-center my-5">
      <h4 class="tx-gray-800">Our Team List</h4>
      <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
    </div>
    <div class="card pd-20 pd-sm-40 mt-4">
      <h6 class="card-body-title">Blog List</h6>
      <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

      <div class="row">
        <table class="table table-hover table-bordered table-striped">
          <thead class="bg-info">
            <tr>
              <th class="text-center">Team Member Img</th>
              <th class="text-center">Team Member Details</th>
              <th class="text-center">Team Member Link</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            foreach (spy_sabbir_all('team_members') as $single_team_member) :
            ?>
              <tr>
                <td><img height="140px" width="100px" src="../assets/images/team_member/<?= $single_team_member['team_member_photo'] ?>" alt=""></td>
                <td>
                  <small>Team Member Name: </small>
                  <p><?= $single_team_member['team_member_name'] ?></p>
                  <small>Designation: </small>
                  <p><?= $single_team_member['team_member_designation'] ?></p>
                </td>
                <td>
                  <small>Facebook Link: </small>
                  <p class="m-0"><?= $single_team_member['team_member_facebook_link'] ?></p>
                  <small>Twitter Link: </small>
                  <p class="m-0"><?= $single_team_member['team_member_twitter_link'] ?></p>
                  <small>Instagram Link: </small>
                  <p class="m-0"><?= $single_team_member['team_member_instaggram_link'] ?></p>
                  <small>Linkedin Link: </small>
                  <p class="m-0"><?= $single_team_member['team_member_linkedin_link'] ?></p>
                </td>
                <td>
                  <div class="action text-center mt-5">
                    <a href="webpages/about_page/our_team_edit.php?id=<?= $single_team_member['id'] ?>" class=" btn btn-sm btn-info">Edit</a>
                    <button value="webpages/about_page/our_team_delete.php?id=<?= $single_team_member['id'] ?>" class="btn btn-sm btn-danger delete_btn">Delete</button>
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
  require_once('../../status.php');
  ?>