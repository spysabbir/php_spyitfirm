
<?php
session_start();
require_once "../../db.php";

if ($_FILES['clients_new_cover_photo']['name']) {
    // Photo Delate
    $link = $_SERVER['DOCUMENT_ROOT'] . "/Spy_IT_Firm/assets/images/clients/" . $_POST['clients_old_photo_name'];
    unlink($link);
    // Photo Upload Start
    $uploaded_photo = $_FILES['clients_new_cover_photo'];
    $after_explode = explode('.', $uploaded_photo['name']);
    $new_photo_name = rand() . time() . "." . end($after_explode);
    $uploaded_photo_temporary_location = $uploaded_photo['tmp_name'];
    $new_location = '../../../assets/images/clients/' . $new_photo_name;
    move_uploaded_file($uploaded_photo_temporary_location, $new_location);
    // Update Query

    $clients_old_photo_name = $_POST['clients_old_photo_name'];
    $update_query = "UPDATE clients SET project_logo_img = '$new_photo_name' WHERE project_logo_img = '$clients_old_photo_name'";
    mysqli_query(connect_to_db(), $update_query);
}

$client_id = $_POST['client_id'];
$clients_name = $_POST['clients_name'];
$project_link = $_POST['project_link'];
$update_query = "UPDATE clients SET clients_name = '$clients_name', project_link = '$project_link' WHERE id = '$client_id'";
mysqli_query(connect_to_db(), $update_query);
$_SESSION['edit_status'] = "Client Edit Successfully!";
header('location: our_amazing_clients.php');

?>