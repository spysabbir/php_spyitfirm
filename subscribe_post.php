<?php
require_once('admin/db.php');
session_start();

$subscribe_ability = true;

    if(!$_POST['subscriber_email']){
        $_SESSION['subscriber_email_error'] = "Please fill up your email address";
		$subscribe_ability = false;
    }
    else {
    $_SESSION['old_email'] = $_POST['subscriber_email'];
    }

    if($subscribe_ability){
        $subscriber_email = $_POST['subscriber_email'];
        $email_address_check_query = "SELECT COUNT(*) AS email_check FROM subscribes WHERE subscriber_email = '$subscriber_email'";
        if(mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1) {
            $_SESSION['error_status'] = "Email is not sent. Sorry something went wrong!";
            $_SESSION['same_email_check_error'] = "This Email Already Taken";
            header('location: index.php');
        }else{
            date_default_timezone_set('Asia/Dhaka');
            $current_date_time = date('Y-m-d H:i:s');

            $insert_query = "INSERT INTO subscribes (subscriber_email, subscribe_date) VALUES ('$subscriber_email', '$current_date_time') ";
            mysqli_query(connect_to_db(), $insert_query);
            unset($_SESSION['old_email']);
            $_SESSION['successfully_status'] = "Your subscribe completed.";
            header('location: index.php');
        };

    }else{
        $_SESSION['error_status'] = "Email is not sent. Sorry something went wrong!";
        header('location: index.php');
    }
?>