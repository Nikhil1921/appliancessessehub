<?php
include('include/connection.php');

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')
{
  $_POST = array_map(function($input){
      return filter_var($input, FILTER_SANITIZE_STRING);
  }, $_POST);

  extract($_POST);
  
  $sql = $conn->prepare("SELECT id FROM login WHERE mobile = ? AND password = MD5(?)");
  $sql->bind_param("ss", $mobile, $password);
  $sql->execute();
  $result = $sql->get_result();
  $user = $result->fetch_assoc();
  $sql->close();
  $conn->close();

  if($user)
  {
    session_start();
    $_SESSION['uid'] = $user['id'];
    echo '<script>alert("Login successfull.");</script>';
    echo '<script>location.href="index.php";</script>';
  }
  else
  {
    echo '<script>alert("Username or Password is invalid");</script>';
    echo '<script>location.href="login.php";</script>';
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - <?= APP_NAME ?></title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1><?= APP_NAME ?></h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">Mobile</label>
            <input class="form-control" type="text" name="mobile" placeholder="Mobile" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" placeholder="Password">
          </div>
          
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="login"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>