<?php
session_start();
require_once "../../db.php";

$submit_ability = true;
if (!$_POST['clients_name']) {
    $_SESSION['clients_name_error'] = "Please Select your service icon name";
    $submit_ability = false;
} else {
    $_SESSION['old_clients_name'] = $_POST['clients_name'];
}
if (!$_POST['project_link']) {
    $_SESSION['project_link_error'] = "Please fill up your blog headline";
    $submit_ability = false;
} else {
    $_SESSION['old_project_link'] = $_POST['project_link'];
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

if($submit_ability){
    // Photo Upload Start
    $uploaded_photo = $_FILES['project_logo_img'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand().time().".".end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/clients/'.$new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Photo Upload End

    $clients_name = $_POST['clients_name'];
    $project_link = $_POST['project_link'];

    $insert_db = spy_sabbir_insert("clients", "clients_name, project_link, project_logo_img", "'$clients_name', '$project_link', '$new_photo_name'");
    $_SESSION['add_status'] = "Clients Added Successfully!";
    unset($_SESSION['old_clients_name']);
    unset($_SESSION['old_project_link']);
    unset($_SESSION['old_project_logo_img']);
    header('location: our_amazing_clients.php');
}else{
    $_SESSION['missing_status'] = "Services details missing! Please fill in the required information.";
    header('location: our_amazing_clients.php');
}
?>