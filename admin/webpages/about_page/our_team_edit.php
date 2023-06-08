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
            <a class="breadcrumb-item" href="webpages/about_page/our_team.php">Our Team</a>
            <span class="breadcrumb-item active">Edit Our Team</span>
        </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Edit Our Team</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="card pd-20 pd-sm-40 mt-4">
            <h6 class="card-body-title">Edit Our Team</h6>
            <p class="mg-b-20 mg-sm-b-30">A form with a label on top of each form control.</p>

            <form method="POST" action="webpages/about_page/our_team_edit_post.php" enctype="multipart/form-data" id="edit_form">
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_name" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_name'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Designation: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_designation" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_designation'] ?>">
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="row mg-b-25">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Facebook Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_facebook_link" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_facebook_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Twitter Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_twitter_link" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_twitter_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Instagram Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_instaggram_link" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_instaggram_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label">Team Member Linkedin Link: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="team_member_linkedin_link" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_linkedin_link'] ?>">
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Team Member Photo: <span class="tx-danger">*</span></label>
                                        <input class="form-control mb-2" type="file" name="new_team_member_photo" onchange="readURL(this);">
                                        <small>Photo Size 640*520 px</small><br>
                                        <img class="hidden img-thumbnail" id="new_team_member_photo" src="#" alt="Team Member New Photo" />
                                        <script>
                                            function readURL(input) {
                                                if (input.files && input.files[0]) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        $('#new_team_member_photo').attr('src', e.target.result);
                                                    };
                                                    $('#new_team_member_photo').removeClass('hidden');
                                                    reader.readAsDataURL(input.files[0]);
                                                }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Team Member Old Photo: <span class="tx-danger">*</span></label>
                                        <input type="hidden" name="old_team_member_photo" class="form-control" value="<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_photo'] ?>">
                                        <input type="hidden" name="team_member_id" class="form-control" value="<?= $_GET['id'] ?>">
                                        <img height="160px" width="120px" class="img-thumbnail" src="../assets/images/team_member/<?= spy_sabbir_single_select('team_members', $_GET['id'])['team_member_photo'] ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer">
                        <a class="btn btn-info mg-r-5 text-white" id="edit_btn">Edit Team Member</a>
                        <a class="btn btn-danger mg-r-5 text-white" href=" webpages/about_page/our_team.php">Cancel</a>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div>

    </div><!-- br-pagebody -->

    <?php
    require_once('../../footer.php');
    require_once('../../status.php');
    ?>