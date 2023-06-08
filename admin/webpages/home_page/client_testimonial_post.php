<?php
session_start();
require_once "../../db.php";

$submit_ability = true;
if (!$_POST['client_name']) {
    $_SESSION['client_name_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_client_name'] = $_POST['client_name'];
}
if (!$_POST['client_details']) {
    $_SESSION['client_details_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_client_details'] = $_POST['client_details'];
}
if (!$_POST['client_address']) {
    $_SESSION['client_address_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_client_address'] = $_POST['client_address'];
}
if (!$_POST['client_comments']) {
    $_SESSION['client_comments_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_client_comments'] = $_POST['client_comments'];
}

// project_logo_img
$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension1 = pathinfo($_FILES["project_logo_img"]["name"], PATHINFO_EXTENSION);

if (!$_FILES['project_logo_img']['name']) {
    $_SESSION['project_logo_img_error'] = "Please choose your blog cover photo";
    $submit_ability = false;
} elseif (!in_array($file_extension1, $allowed_image_extension)) {
    $_SESSION['project_logo_img_error'] = "Please choose Jpg, Png or Jpeg images";
    $submit_ability = false;
} elseif ($_FILES["project_logo_img"]["size"] > 2000000) {
    $_SESSION['project_logo_img_error'] = "Please choose Image size exceeds 2MB";
    $submit_ability = false;
}

if ($submit_ability) {
    // Photo Upload Start
    $uploaded_photo = $_FILES['project_logo_img'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/client_testimonials/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $client_name = $_POST['client_name'];
    $client_details = $_POST['client_details'];
    $client_address = $_POST['client_address'];
    $client_comments = $_POST['client_comments'];

    $insert_db = spy_sabbir_insert("client_testimonials", "client_name, client_details, client_address, client_comments, project_logo_img", "'$client_name', '$client_details', '$client_address', '$client_comments', '$new_photo_name'");
    $_SESSION['add_status'] = "Clients Added Successfully!";
    unset($_SESSION['old_client_name']);
    unset($_SESSION['old_client_details']);
    unset($_SESSION['old_client_address']);
    unset($_SESSION['old_client_comments']);
    unset($_SESSION['old_project_logo_img']);
    header('location: client_testimonial.php');
} else {
    $_SESSION['missing_status'] = "Services details missing! Please fill in the required information.";
    header('location: client_testimonial.php');
}
?>