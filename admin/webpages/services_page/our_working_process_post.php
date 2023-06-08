<?php
session_start();
require_once "../../db.php";

$submit_ability = true;

if (!$_POST['process_title']) {
    $_SESSION['process_title_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_process_title'] = $_POST['process_title'];
}
if (!$_POST['process_details']) {
    $_SESSION['process_details_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_process_details'] = $_POST['process_details'];
}

// process_cover_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension = pathinfo($_FILES["process_cover_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['process_cover_photo']['name']) {
    $_SESSION['process_cover_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension, $allowed_image_extension)) {
    $_SESSION['process_cover_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["process_cover_photo"]["size"] > 2000000) {
    $_SESSION['process_cover_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['process_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/working_process/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $process_title = $_POST['process_title'];
    $process_details = htmlspecialchars($_POST['process_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("working_process", "process_title, process_details, process_cover_photo", "'$process_title', '$process_details', '$new_photo_name'");
    $_SESSION['add_status'] = "Working Process Added Successfully!";
    unset($_SESSION['old_process_title']);
    unset($_SESSION['old_process_details']);
    unset($_SESSION['old_process_cover_photo']);
    header('location: our_working_process.php');
}else{
    $_SESSION['missing_status'] = "Working Process details missing! Please fill in the required information.";
    header('location: our_working_process.php');
}
?>