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


  <div class="container py-4">
      <div class="row font-weight-bold text-center my-5">
         <div class="col-md-12">
           <h1>Admin Panel</h1>
         </div>
         <div class="btn-group-vertical">
         <div class="row pt-5" style="margin-left:10%;" align="center">
           <div class="col-3" >
             <div class="box--APU">
               <div >
                 <a class="btn btn-primary btn-lg" href="UserInfo.php">Users</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APE">
               <div >
                 <a class="btn btn-primary btn-lg" href="EventInfo.php">Events</a>
               </div>
             </div>
           </div>
           <div class="col-3">
             <div class="box--APB">
               <div>
                 <a class="btn btn-primary btn-lg" href="BlogInfo.php">Blog</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APT">
               <div >
                 <a class="btn btn-primary btn-lg" href="TeacherInfo.php">Teachers</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APC mt-2">
               <div >
                 <a class="btn btn-primary btn-lg" href="ContactInfo.php">ContactUs</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APN mt-2">
               <div >
                 <a class="btn btn-primary btn-lg" href="NewsletterInfo.php">Newsletter</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APF mt-2">
               <div >
                 <a class="btn btn-primary btn-lg" href="ForumInfo.php">Forum</a>
               </div>
             </div>
           </div>
           <div class="col-3" >
             <div class="box--APF mt-2">
               <div >
                 <a class="btn btn-primary btn-lg" href="Classbooking.php">Class Booking</a>
               </div>
             </div>
           </div>
         </div>
   </div>
 </div>
 </div>

<h1 align="center">Welcome To DashBoard</h1>


  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
