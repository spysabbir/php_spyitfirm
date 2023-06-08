<?php
session_start();
require_once "../../db.php";

// Service Delete
spy_sabbir_delete_with_photo("choose_us", "id", $_GET['id'], "choose_us", "why_choose_us_cover_photo");
$_SESSION['deleted_status'] = "Working Process Deleted Successfully!";
header('location: why_choose_us.php');
?>