
<?php
session_start();
require_once "../../db.php";

if ($_FILES['new_process_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/working_process/" . $_POST['old_process_cover_photo'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['new_process_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/working_process/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query
    $old_process_cover_photo = $_POST['old_process_cover_photo'];
    $update_query = "UPDATE working_process SET process_cover_photo = '$new_photo_name' WHERE process_cover_photo = '$old_process_cover_photo'";
    mysqli_query(connect_to_db(), $update_query);
}

$working_process_id = $_POST['working_process_id'];
$process_title = $_POST['process_title'];
$process_details = $_POST['process_details'];

$update_query = "UPDATE working_process SET process_title = '$process_title', process_details = '$process_details' WHERE id = '$working_process_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Working Process Edit Successfully!";
header('location: our_working_process.php');

?>