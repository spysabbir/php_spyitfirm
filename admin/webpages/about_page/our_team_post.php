<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['team_member_name']) {
    $_SESSION['team_member_name_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_name'] = $_POST['team_member_name'];
}
if (!$_POST['team_member_designation']) {
    $_SESSION['team_member_designation_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_designation'] = $_POST['team_member_designation'];
}
if (!$_POST['team_member_facebook_link']) {
    $_SESSION['team_member_facebook_link_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_facebook_link'] = $_POST['team_member_facebook_link'];
}
if (!$_POST['team_member_twitter_link']) {
    $_SESSION['team_member_twitter_link_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_twitter_link'] = $_POST['team_member_twitter_link'];
}
if (!$_POST['team_member_instaggram_link']) {
    $_SESSION['team_member_instaggram_link_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_instaggram_link'] = $_POST['team_member_instaggram_link'];
}
if (!$_POST['team_member_linkedin_link']) {
    $_SESSION['team_member_linkedin_link_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_team_member_linkedin_link'] = $_POST['team_member_linkedin_link'];
}

// team_member_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension1 = pathinfo($_FILES["team_member_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['team_member_photo']['name']) {
    $_SESSION['team_member_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension1, $allowed_image_extension)) {
    $_SESSION['team_member_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["team_member_photo"]["size"] > 2000000) {
    $_SESSION['team_member_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['team_member_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/team_member/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $team_member_name = $_POST['team_member_name'];
    $team_member_designation = $_POST['team_member_designation'];
    $team_member_facebook_link = $_POST['team_member_facebook_link'];
    $team_member_twitter_link = $_POST['team_member_twitter_link'];
    $team_member_instaggram_link = $_POST['team_member_instaggram_link'];
    $team_member_linkedin_link = $_POST['team_member_linkedin_link'];

    $insert_db = spy_sabbir_insert("team_members", "team_member_name, team_member_designation, team_member_facebook_link, team_member_twitter_link, team_member_instaggram_link, team_member_linkedin_link, team_member_photo", "'$team_member_name', '$team_member_designation', '$team_member_facebook_link', '$team_member_twitter_link', '$team_member_instaggram_link', '$team_member_linkedin_link', '$new_photo_name'");
    $_SESSION['add_status'] = "Team Member Added Successfully!";
    unset($_SESSION['old_team_member_name']);
    unset($_SESSION['old_team_member_designation']);
    unset($_SESSION['old_team_member_facebook_link']);
    unset($_SESSION['old_team_member_twitter_link']);
    unset($_SESSION['old_team_member_instaggram_link']);
    unset($_SESSION['old_team_member_linkedin_link']);
    header('location: our_team.php');
}else{
    $_SESSION['missing_status'] = "Team Member details missing! Please fill in the required information.";
    header('location: our_team.php');
}
?>