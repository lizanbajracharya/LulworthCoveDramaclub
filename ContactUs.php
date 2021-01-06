<?php
require('includes/db.php');
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
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c2dcf9582491369baa04d18/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>
<body>

<!-- Navbar -->
<div class="mynav">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-dark">
   <a class="navbar-brand" href="Index.php" style="font-size: 30px; color: #EEEEEE;">Lulworth Cove Drama Club</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Index.php"><h3>Home Page</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php"><h3>About Us</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.php"><h3>Blog</h3></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="ContactUs.php"><h3>ContactUs</h3><span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <?php
        if (isset($_SESSION['login'])!='yes')
         {
          ?>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="Login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SignUp.php">Register</a>
              </li>
            </ul>
           <form class="form-inline my-1">
    <div class="md-form form-sm my-0">
      <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
    </div>
    <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
  </form>
  </div>
        <?php
      }
      else
      {
         ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false" style="cursor:pointer;">
          Welcome <?php echo $_SESSION['login_username']?>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="UserProfile.php?id=<?php echo $_SESSION['login_Id']?>">Profile Info</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
     <form class="form-inline my-1">
    <div class="md-form form-sm my-0">
      <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
    </div>
    <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
  </form>
      <?php
    }
      ?>
    </div>
  </nav>
</div><hr>
<!-- Navbar -->

<div class="container">
<div class="row mt-3 pt-5">
<div class="col-12">
  <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=lulworth%20cove%2C%20dorset+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe></div><br />
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-6">
  <div class="page-wrapper padding-t-C padding-b-C ">
      <div class="wrapper wrapper--C">
          <div class="card ">
              <div class="card-body">
                  <h2 class="title text-center font-weight-bold">Contact Form</h2>
                  <form method="post" action="ContactUsAction.php">
                      <div class="row row-space">
                          <div class="input-group px-3">
                              <input class="input--style-C" type="text" required="required" name="username" placeholder="Your Name" required>
                          </div>
                          <div class="input-group px-3">
                              <input class="input--style-C" type="email" required="required" name="Email" placeholder="Your Email" required>
                          </div>
                      </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-C" required="required" name="Comment" placeholder="Comment" required></textarea>
                            </div>
                        </div>
                      <div class="button--panel-C">
                          <input type="submit" class="button" title="Submit" name="Submit" value="Submit"></input>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="col-3">
<div class="container">
    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Info</h5>
    <ul class="list-unstyled">
      <p>
      <i class="fa fa-home mr-3"></i> Lulworth Cove, Dorset , UK</p>
    <p>
      <i class="fa fa-envelope mr-3"></i> lukworth@gmail.com</p>
    <p>
      <i class="fa fa-phone mr-3"></i> + 01 234 567 89</p>
    </ul>
  </div>
</div>
</div>
</div>

<!-- ContactUs Form -->

<?php
require('Cookie.php');
?>

<footer class="page-footer font-small unique-color-dark wow fadeInDown delay-0s">

    <div style="background-color: #6351ce;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a href="https://www.facebook.com" class="btn-floating fa fa-facebook mx-2"></a>
            <!-- Twitter -->
            <a href="https://twitter.com" class="btn-floating fa fa-twitter mx-2"></a>
            <!-- Google +-->
            <a href="https://plus.google.com" class="btn-floating fa fa-google mx-2"></a>
           
            <!--Instagram-->
            <a href="https://www.instagram.com" class="btn-floating fa fa-instagram mx-2"></a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Lulworth Cove Drama Club</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Want to be a professional singer, dancer and increase your drama capability. Join today...</p>
            <p><a class="btn btn-primary" href="SignUp.php">Become A Member</a></p>
        </div>
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="Index.php">Home</a>
          </p>
          <p>
            <a href="AboutUs.php">AboutUs</a>
          </p>
          <p>
            <a href="ContactUs.php">ContactUs</a>
          </p>
          <p>
            <a href="Login.php">Login</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Lulworth Cove, Dorset , UK</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> lulworth@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 89</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Lulworth © 2018 Copyright:
    </div>
    <!-- Copyright -->

  </footer>
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</body>
</html>
