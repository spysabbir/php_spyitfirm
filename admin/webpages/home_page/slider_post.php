<?php
session_start();
require_once "../../db.php";

$submit_ability = true;
if (!$_POST['slider_content_title']) {
    $_SESSION['slider_content_title_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_slider_content_title'] = $_POST['slider_content_title'];
}
if (!$_POST['slider_content_subtitle']) {
    $_SESSION['slider_content_subtitle_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_slider_content_subtitle'] = $_POST['slider_content_subtitle'];
}
if (!$_POST['slider_details']) {
    $_SESSION['slider_details_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_slider_details'] = $_POST['slider_details'];
}
if (!$_POST['slider_btn_name']) {
    $_SESSION['slider_btn_name_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_slider_btn_name'] = $_POST['slider_btn_name'];
}
if (!$_POST['slider_btn_link']) {
    $_SESSION['slider_btn_link_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_slider_btn_link'] = $_POST['slider_btn_link'];
}

// slider_banner_img
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension1 = pathinfo($_FILES["slider_banner_img"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['slider_banner_img']['name']) {
    $_SESSION['slider_banner_img_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension1, $allowed_image_extension)) {
    $_SESSION['slider_banner_img_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["slider_banner_img"]["size"] > 2000000) {
    $_SESSION['slider_banner_img_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if ($submit_ability) {
    // Photo Upload Start
    $uploaded_photo = $_FILES['slider_banner_img'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/slider/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $slider_content_title = $_POST['slider_content_title'];
    $slider_content_subtitle = $_POST['slider_content_subtitle'];
    $slider_details = $_POST['slider_details'];
    $slider_btn_name = $_POST['slider_btn_name'];
    $slider_btn_link = $_POST['slider_btn_link'];

    $insert_db = spy_sabbir_insert("sliders", "slider_content_title, slider_content_subtitle, slider_details, slider_btn_name, slider_btn_link, slider_banner_img", "'$slider_content_title', '$slider_content_subtitle', '$slider_details', '$slider_btn_name', '$slider_btn_link', '$new_photo_name'");
    $_SESSION['add_status'] = "Clients Added Successfully!";
    unset($_SESSION['old_slider_content_title']);
    unset($_SESSION['old_slider_content_subtitle']);
    unset($_SESSION['old_slider_details']);
    unset($_SESSION['old_slider_btn_name']);
    unset($_SESSION['old_slider_btn_link']);
    unset($_SESSION['old_slider_banner_img']);
    header('location: slider.php');
} else {
    $_SESSION['missing_status'] = "Services details missing! Please fill in the required information.";
    header('location: slider.php');
}
?>