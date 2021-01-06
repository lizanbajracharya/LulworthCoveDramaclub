<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
checkadmin();
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

  <div class="mynav">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-dark">
      <a class="navbar-brand" href="#" style="font-size: 30px; color: #EEEEEE;">Lulworth Cove Drama Club</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="adminpanel.php"><h3>AdminPanel</h3></a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Welcome <?php echo $_SESSION['login_username']?>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="AdminProfile.php?id=<?php echo $_SESSION['login_Id']?>">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
      </div>
    </nav>
  </div>

 <div class="page-wrapper bg-gradiant-a padding-t-a padding-b-a font-poppins">
          <div class="wrapper wrapper--a">
              <div class="card card-4">
                  <div class="card-body">
                      <h2 class="title text-center font-weight-bold">Registration Form</h2>
                      <form method="post" action="SignUpactionAdmin.php">
                          <div class="row row-space">
                             
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Email</label>
                                      <input class="input--style-a" type="text" required="required" name="ParentEmail" required>
                                  </div>
                              </div>
                          </div>
                          <div class="row row-space">
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Phone Number</label>
                                      <input class="input--style-a" type="text" required="required" name="PhoneNo" required>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-12">
                                  <div class="input-group">
                                      <label class="label">Address</label>
                                      <input class="input--style-a" type="text" required="required" name="Address" required>
                                  </div>
                              </div>
                          </div>
                          <div class=" col-12">
                            <div class="input-group">
                              <label class="label">Password</label>
                              <input class="input--style-a" type="password" required="required" name="password" required>
                            </div>
                          </div>
                          <div class="input-group">
                              <label class="label">Classes</label>
                              <div class="rs-select--a pl-3">
                                  <select name="Class">
                                      <option selected="selected" required="required" required>Choose a Class</option>
                                      <option>Singing</option>
                                      <option>Dancing</option>
                                      <option>Drama</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                              </div>
                          </div>
                          <div class="input-group">
                              <label class="label">UserType</label>
                              <div class="rs-select--a pl-3">
                                  <select name="Usertype">
                                      <option selected="selected" required="required" required>UserType</option>
                                      <option>Admin</option>
                                      <option>User</option>
                                  </select>
                                  <div class="select-dropdown"></div>
                              </div>
                          </div>
                          <div class="button--panel-2">
                              <input type="submit" class="button" title="SignUp" name="SignUp" value="SignUp"></input>
                          </div>
<div class="text-center mt-3">
  <a class="btn btn-success btn-rounded" href="adminpanel.php">Back to Dashboard </a>
</div>
</div>
</div>


  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
