<?php
session_start();
require_once('../../db.php');

foreach($_POST as $default_item_name => $default_item_value){
    $update_query = "UPDATE company_overviews SET default_item_value = '$default_item_value' WHERE  default_item_name = '$default_item_name'";
    mysqli_query(connect_to_db(), $update_query);
}
$_SESSION['add_status'] = "Company Overviews Upload Successfully!";
header('location: company_overview.php');
?>