<?php
session_start();
require_once "../db.php";

spy_sabbir_delete("subscribes", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Subscribes Deleted Successfully!";
header('location: subscriber_list.php');
?>