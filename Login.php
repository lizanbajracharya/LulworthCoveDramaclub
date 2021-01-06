<?php
include('includes/db.php');
if(!isset($_SESSION['attempt']))  $_SESSION['attempt'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lulworth Cove Drama Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Links -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/CustomStyle.css">
</head>
<body>
<style>
body{background-image: linear-gradient(to right bottom, #4f5155, #4f6067, #4d7070, #5a7f6b, #7c8960);}
</style>
<!-- Login attempt-->
<?php
 $_SESSION['attempt'];
if ($_SESSION['attempt']>=3) {
  echo "--";
  echo $currentTime = date("Y-m-d H:i:s");
  $diff = strtotime($currentTime)-strtotime($_SESSION['Login_last_attempt']);
  if($diff<=(1*180)){
    die('<h1>Login Blocked</h1>');
    

}
else {
    unset($_SESSION['attempt']);
}
}
?>

<?php
if(isset($_GET['msg'])&&$_GET['msg']=='error') {
    ?>
    <div >
        <p class="text-center">Invalid Email / Password<p>
    </div>
    <?php
}
  ?>

<div class="container">
  <style>
    .container
    {
      padding: 7%;
    }
  </style>
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
        <form class="form-horizontal" method="post" action="loginaction.php">
          <br>
            <fieldset>
         <legend>Login Form</legend>                  
            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="username" id="username"  placeholder="Enter your Email" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                </div>
              </div>
            </div>

        
            <div class="form-group ">
              <input type="submit" class="btn btn-info btn-lg btn-block button" Title="Login" name="login" value="Login"></input>
            </div>
            <div class="reminder--L">
                              <p class="pl-4">Are you a member! If not, <a href="SignUp.php">Sign Up</a></p><br>
                              <p><a href="Index.php">Back to home</a>
                        </div>
            </fieldset>
          </form>

        </div>
      </div>
  </div>  
<!-- Login Form-->

<?php
require('Cookie.php');
?>

<!-- Footer -->
<footer class="page-footer font-small">
    <div class="footer-copyright text-center text-light py-1">Lulworth Cove Drama Club © 2019 Copyright</div>
</footer>
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
