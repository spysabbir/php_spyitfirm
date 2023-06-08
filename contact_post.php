<?php
session_start();
require_once('admin/db.php');

$full_name = ($_POST["full_name"]);
$email_address = ($_POST["email_address"]);
$phone_number = ($_POST["phone_number"]);
$subject = ($_POST["subject"]);
$message = ($_POST["message"]);
// Date Time
date_default_timezone_set('Asia/Dhaka');
$current_date_time = date('Y-m-d H:i:s');

$contact_status = true;

if(!$_POST['full_name']){
    $_SESSION['full_name_error'] = "Please enter your full name";
    $contact_status = false;
}else{
    $_SESSION['old_full_name'] = $_POST['full_name'];
}
if(!$_POST['email_address']){
    $_SESSION['email_address_error'] = "Please enter your email address.";
    $contact_status = false;
}else{
    $_SESSION['old_email_address'] = $_POST['email_address'];
}
if(!$_POST['phone_number']){
    $_SESSION['phone_number_error'] = "Please enter your phone number.";
    $contact_status = false;
}else{
    $_SESSION['old_phone_number'] = $_POST['phone_number'];
}
if(!$_POST['subject']){
    $_SESSION['subject_error'] = "Please enter your subject.";
    $contact_status = false;
}else{
    $_SESSION['old_subject'] = $_POST['subject'];
}
if(!$_POST['message']){
    $_SESSION['message_error'] = "Please enter your message.";
    $contact_status = false;
}else{
    $_SESSION['old_message'] = $_POST['message'];
}


if($contact_status){
    $insert_query = "INSERT INTO contacts_messages (full_name, email_address, phone_number, subject, message, message_sending_date) VALUES ( '$full_name', '$email_address', '$phone_number', '$subject', '$message', '$current_date_time');";
    mysqli_query(connect_to_db(), $insert_query);
    $_SESSION['successfully_status'] = "Message Send Successfully.";
    unset($_SESSION['old_full_name']);
    unset($_SESSION['old_email_address']);
    unset($_SESSION['old_phone_number']);
    unset($_SESSION['old_subject']);
    unset($_SESSION['old_message']);
    header("location: contact.php");
}else{
    $_SESSION['error_status'] = "Message Not Send.";
    header("location: contact.php");
}

?>
