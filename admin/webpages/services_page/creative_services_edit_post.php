
<?php
session_start();
require_once "../../db.php";

if ($_FILES['services_new_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/services/" . $_POST['services_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['services_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/services/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $services_old_photo_name = $_POST['services_old_photo_name'];
    $update_query = "UPDATE services SET services_cover_photo = '$new_photo_name' WHERE services_cover_photo = '$services_old_photo_name'";
    mysqli_query(connect_to_db(), $update_query);
}
if ($_FILES['services_new_banner_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/services/" . $_POST['services_old_banner_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['services_new_banner_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/services/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $services_old_banner_photo = $_POST['services_old_banner_photo'];
    $update_query = "UPDATE services SET services_banner_photo = '$new_photo_name' WHERE services_banner_photo = '$services_old_banner_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$service_icon_name = $_POST['service_icon_name'];
$services_name = $_POST['services_name'];
$services_id = $_POST['services_id'];
$services_details = $_POST['services_details'];
$update_query = "UPDATE services SET service_icon_name = '$service_icon_name', services_name = '$services_name', services_details = '$services_details' WHERE id = '$services_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Services Edit Successfully!";
header('location: creative_services.php');

?>