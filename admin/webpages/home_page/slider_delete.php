<?php
session_start();
require_once "../../db.php";


// Client Delete
spy_sabbir_delete_with_photo("sliders", "id", $_GET['id'], "slider", "slider_banner_img");
$_SESSION['deleted_status'] = "Client Deleted Successfully!";
header('location: slider.php');
?>