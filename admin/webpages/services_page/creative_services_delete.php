
<?php
session_start();
require_once "../../db.php";

spy_sabbir_delete_with_dubble_photo("services","id", $_GET['id'], "services", "services_cover_photo", "services_banner_photo");

$_SESSION['deleted_status'] = "Service Deleted Successfully!";
header('location: creative_services.php');
?>