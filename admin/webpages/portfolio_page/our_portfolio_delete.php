<?php
session_start();
require_once "../../db.php";

spy_sabbir_delete_with_dubble_photo("portfolios","id", $_GET['id'], "portfolio", "portfolio_cover_photo", "portfolio_banner_photo");

$_SESSION['deleted_status'] = "Portfolio Deleted Successfully!";
header('location: our_portfolio.php');
?>