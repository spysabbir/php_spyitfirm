<?php
session_start();
require_once "../../db.php";

spy_sabbir_delete("contacts_messages", "id", $_GET['id']);
$_SESSION['deleted_status'] = "Message Deleted Successfully!";
header('location: contact_message.php');
?>