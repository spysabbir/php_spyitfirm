
<?php
session_start();
require_once "../../db.php";

if ($_FILES['new_slider_banner_img']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/slider/" . $_POST['old_slider_banner_img'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_slider_banner_img'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/slider/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query

    $old_slider_banner_img = $_POST['old_slider_banner_img'];
    $update_query = "UPDATE sliders SET slider_banner_img = '$new_photo_name' WHERE slider_banner_img = '$old_slider_banner_img'";
    mysqli_query(connect_to_db(), $update_query);
}

$slider_id = $_POST['slider_id'];
$slider_content_title = $_POST['slider_content_title'];
$slider_content_subtitle = $_POST['slider_content_subtitle'];
$slider_details = $_POST['slider_details'];
$slider_btn_name = $_POST['slider_btn_name'];
$slider_btn_link = $_POST['slider_btn_link'];
$update_query = "UPDATE sliders SET slider_content_title = '$slider_content_title', slider_content_subtitle = '$slider_content_subtitle', slider_details = '$slider_details', slider_btn_name = '$slider_btn_name', slider_btn_link = '$slider_btn_link' WHERE id = '$slider_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Client Edit Successfully!";
header('location: slider.php');

?>