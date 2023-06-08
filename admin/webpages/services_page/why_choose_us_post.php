<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['why_choose_us_title']) {
    $_SESSION['why_choose_us_title_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_why_choose_us_title'] = $_POST['why_choose_us_title'];
}
if (!$_POST['why_choose_us_details']) {
    $_SESSION['why_choose_us_details_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_why_choose_us_details'] = $_POST['why_choose_us_details'];
}

// why_choose_us_cover_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension = pathinfo($_FILES["why_choose_us_cover_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['why_choose_us_cover_photo']['name']) {
    $_SESSION['why_choose_us_cover_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension, $allowed_image_extension)) {
    $_SESSION['why_choose_us_cover_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["why_choose_us_cover_photo"]["size"] > 2000000) {
    $_SESSION['why_choose_us_cover_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['why_choose_us_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/choose_us/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $why_choose_us_title = $_POST['why_choose_us_title'];
    $why_choose_us_details = htmlspecialchars($_POST['why_choose_us_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("choose_us", "why_choose_us_title, why_choose_us_details, why_choose_us_cover_photo", "'$why_choose_us_title', '$why_choose_us_details', '$new_photo_name'");
    $_SESSION['add_status'] = "Why Choose Us Added Successfully!";
    unset($_SESSION['old_why_choose_us_title']);
    unset($_SESSION['old_why_choose_us_details']);
    unset($_SESSION['old_why_choose_us_cover_photo']);
    header('location: why_choose_us.php');
}else{
    $_SESSION['missing_status'] = "Why Choose Us details missing! Please fill in the required information.";
    header('location: why_choose_us.php');
}
?>