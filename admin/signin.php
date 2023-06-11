<?php
session_start();
require_once('db.php')
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

  <title><?= spy_sabbir_update('theme_default', 'company_name'); ?> | Admin Template | Sign In</title>

  <!-- vendor css -->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">

  <!-- Bracket CSS -->
  <link rel="stylesheet" href="css/bracket.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> <?= spy_sabbir_update('theme_default', 'company_name'); ?> <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-60">Authorized sign-in panel for maintenance</div>

      <?php if (isset($_SESSION['signin_error'])) : ?>
        <div class="alert alert-danger">
          <?= $_SESSION['signin_error'] ?>
        </div>
      <?php endif; ?>

      <form action="signin_post.php" method="POST">
        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Email</label>
          <input type="email" class="form-control" name="email_address" placeholder="Enter your email" value="<?= (isset($_SESSION['old_email_address'])) ? $_SESSION['old_email_address'] : '' ?>">
          <?php if (isset($_SESSION['email_address_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['email_address_error'] ?></small>
          <?php endif; ?>
        </div><!-- form-group -->

        <div class="form-group">
          <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter your password">
          <?php if (isset($_SESSION['password_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['password_error'] ?></small>
          <?php endif; ?>
          <?php if (isset($_SESSION['password_wrong_error'])) : ?>
            <small class="text-danger"><?= $_SESSION['password_wrong_error'] ?></small>
          <?php endif; ?>
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        
        <button type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>

     <div class="demo my-2">
        <h5 class="text-center">Demo User Login Details</h5>
        <div class="table-responsive">
          <table class="table table-primary">
            <thead>
              <tr>
                <th>Email</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>admin@email.com</td>
                <td>12345678</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="mg-t-60 tx-center">If you not an authorized person? Please don't try to sign in.</div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="lib/jquery/jquery.js"></script>
  <script src="lib/popper.js/popper.js"></script>
  <script src="lib/bootstrap/bootstrap.js"></script>

</body>

</html>

<?php
session_unset();
?>