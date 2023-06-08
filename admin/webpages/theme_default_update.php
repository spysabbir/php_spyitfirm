<?php
session_start();
require_once('../db.php');

if ($_FILES['logo_new_photo']['name']) {
    // Photo Delate
    $link1 = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/" . $_POST['logo_old_photo'];
    unlink($link1);
    // Photo Upload Start
    $uploaded_photo = $_FILES['logo_new_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../assets/images/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);

    $logo_old_photo = $_POST['logo_old_photo'];
    $update_query = "UPDATE theme_default SET default_item_value = '$new_photo_name' WHERE default_item_value =
    '$logo_old_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

if ($_FILES['new_main_banner_photo']['name']) {
    // Photo Delate
    $link2 = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/" . $_POST['old_main_banner_photo'];
    unlink($link2);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_main_banner_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../assets/images/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $old_main_banner_photo = $_POST['old_main_banner_photo'];
    $update_query = "UPDATE theme_default SET default_item_value = '$new_photo_name' WHERE default_item_value =
    '$old_main_banner_photo'";
    mysqli_query(connect_to_db(), $update_query);
}
    foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE theme_default SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
    $_SESSION['add_status'] = "Default Content Upload Successfully!";
    header('location: theme_default.php');}

?>