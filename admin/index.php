<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="<?= spy_sabbir_update('theme_default', 'company_name'); ?>">

  <title><?= spy_sabbir_update('theme_default', 'company_name'); ?> | Admin Panel</title>

</head>

<body>
  <script>
    // similar behavior as an HTTP redirect
    window.location.replace("dashboard.php");
  </script>
</body>

</html>