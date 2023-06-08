<?php
session_start();
require_once "../../db.php";

$submit_ability = true;
if (!$_POST['service_icon_name']) {
    $_SESSION['service_icon_name_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_service_icon_name'] = $_POST['service_icon_name'];
}
if (!$_POST['services_name']) {
    $_SESSION['services_name_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_services_name'] = $_POST['services_name'];
}
if (!$_POST['services_details']) {
    $_SESSION['services_details_error'] = "Please fill up your blog details";
    $submit_ability = false;
} else {
    $_SESSION['old_services_details'] = $_POST['services_details'];
}

// services_cover_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension1 = pathinfo($_FILES["services_cover_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['services_cover_photo']['name']) {
    $_SESSION['services_cover_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension1, $allowed_image_extension)) {
    $_SESSION['services_cover_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["services_cover_photo"]["size"] > 2000000) {
    $_SESSION['services_cover_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}
// services_banner_photo
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension2 = pathinfo($_FILES["services_banner_photo"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['services_banner_photo']['name']) {
    $_SESSION['services_banner_photo_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension2, $allowed_image_extension)) {
    $_SESSION['services_banner_photo_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["services_banner_photo"]["size"] > 2000000) {
    $_SESSION['services_banner_photo_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo1 = $_FILES['services_cover_photo'];
    $after_explode1 = explode('.', $uploaded_photo1['name']);
    $new_photo_name1 = rand() . time() . "." . end($after_explode1);
    $uploaded_photo_temporary_location1 = $uploaded_photo1['tmp_name'];
    $new_location1 = '../../../assets/images/services/' . $new_photo_name1;
    move_uploaded_file($uploaded_photo_temporary_location1, $new_location1);
    // Photo Upload End

    // Photo Upload Start
    $uploaded_photo2 = $_FILES['services_banner_photo'];
    $after_explode2 = explode('.', $uploaded_photo2['name']);
    $new_photo_name2 = rand() . time() . "." . end($after_explode2);
    $uploaded_photo_temporary_location2 = $uploaded_photo2['tmp_name'];
    $new_location2 = '../../../assets/images/services/' . $new_photo_name2;
    move_uploaded_file($uploaded_photo_temporary_location2, $new_location2);
    // Photo Upload End

    $service_icon_name = $_POST['service_icon_name'];
    $services_name = $_POST['services_name'];
    $services_details = htmlspecialchars($_POST['services_details'], ENT_QUOTES);

    $insert_db = spy_sabbir_insert("services", "service_icon_name, services_name, services_details, services_cover_photo, services_banner_photo", "'$service_icon_name', '$services_name', '$services_details', '$new_photo_name1', '$new_photo_name2'");
    $_SESSION['add_status'] = "Services Added Successfully!";
    unset($_SESSION['old_service_icon_name']);
    unset($_SESSION['old_services_name']);
    unset($_SESSION['old_services_details']);
    header('location: creative_services.php');
}else{
    $_SESSION['missing_status'] = "Services details missing! Please fill in the required information.";
    header('location: creative_services.php');
}
?>