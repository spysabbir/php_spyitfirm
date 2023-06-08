<?php
session_start();
require_once('db.php');

$email_address = $_POST['email_address'];
$password = md5($_POST['password']);

//Sign In Check
$count_query = "SELECT COUNT(*) AS signin_capability FROM users WHERE email_address = '$email_address' AND password = '$password'";
$output_from_db = mysqli_query(connect_to_db(), $count_query);
$output_from_db_after_assoc = mysqli_fetch_assoc($output_from_db);

// Email Check
$email_address_check_query = "SELECT COUNT(*) AS email_check FROM users WHERE email_address = '$email_address'";

if ($output_from_db_after_assoc['signin_capability'] == 1) {
    $_SESSION['signin_status'] = true;
    $_SESSION['user_email_address'] = $email_address;

    $select_query = "SELECT * FROM users WHERE email_address = '$email_address'";
    $_SESSION['user_id'] = mysqli_fetch_assoc(mysqli_query(connect_to_db(), $select_query))['id'];
    header("location: dashboard.php");
} elseif (mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1 && $_POST['password']) {
    $_SESSION['old_email_address'] = $_POST['email_address'];
    $_SESSION['password_wrong_error'] = "Your password is wrong!";
    header("location: signin.php");
} elseif (mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_address_check_query))['email_check'] == 1 && !$_POST['password']) {
    $_SESSION['old_email_address'] = $_POST['email_address'];
    $_SESSION['password_error'] = "Please fill up your password";
    header("location: signin.php");
} elseif (!$_POST['email_address'] && !$_POST['password']) {
    $_SESSION['email_address_error'] = "Please fill up your Email";
    $_SESSION['password_error'] = "Please fill up your password";
    header("location: signin.php");
} else {
    $_SESSION['signin_error'] = "Your Email And Password is not Correct!";
    header("location: signin.php");
};

?>
