<?php
session_start();
require_once('../../db.php');

foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE contact_details SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
}
$_SESSION['add_status'] = "Contact Details Upload Successfully!";
header('location: contact_details.php');
?>