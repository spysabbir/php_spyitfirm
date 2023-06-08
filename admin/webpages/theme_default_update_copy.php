<?php
session_start();
require_once('../db.php');

$allowed_image_extension = array("png", "jpg", "jpeg", "gif");
$file_extension = pathinfo($_FILES["logo_new_photo"]["name"], PATHINFO_EXTENSION);

if ($_FILES['logo_new_photo']['name']) {
    if (!in_array($file_extension, $allowed_image_extension)) {
        $_SESSION['logo_new_photo_error'] = "Please choose Jpg, Png, Jpeg of Gif images";
        $_SESSION['missing_status'] = "Please choose Jpg, Png, Jpeg of Gif images.";
        header('location: theme_default.php');
        $submit_ability = false;
    } elseif ($_FILES["logo_new_photo"]["size"] > 2000000) {
        $_SESSION['logo_new_photo_error'] = "Please choose Image size exceeds 2MB";
        $_SESSION['missing_status'] = "Please choose Image size exceeds 2MB.";
        header('location: theme_default.php');
        $submit_ability = false;
    } else {
        // Photo Delate
        $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/" . $_POST['logo_old_photo'];
        unlink($link);
        // Photo Upload Start
        $uploaded_photo = $_FILES['logo_new_photo'];
        $after_explode = explode('.', $uploaded_photo['name']);
        $new_photo_name = rand() . time() . "." . end($after_explode);
        $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
        $new_location = '../../assets/images/' . $new_photo_name;
        move_uploaded_file($uploaded_photo_temporary_location, $new_location);

        $logo_old_photo = $_POST['logo_old_photo'];
        $update_query = "UPDATE theme_default SET default_item_value = '$new_photo_name' WHERE default_item_value = '$logo_old_photo'";
        mysqli_query(connect_to_db(), $update_query);
        
        foreach ($_POST as $default_item_name => $default_item_value) {
            $update_query = "UPDATE theme_default SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
            mysqli_query(connect_to_db(), $update_query);
        }

        $_SESSION['add_status'] = "Default Content Upload Successfully!";
        header('location: theme_default.php');
    }
}
else{
    foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE theme_default SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['add_status'] = "Default Content Upload Successfully!";
    header('location: theme_default.php');
    }
}
