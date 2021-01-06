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
        <li class="nav-item">
          <a class="nav-link" href="Index.php"><h3>Home Page</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="AboutUs.php"><h3>About Us</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Blog.php"><h3>Blog</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ContactUs.php"><h3>ContactUs</h3></a>
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

    <!-- About Us -->
  <div class="container py-5 ">
    <div class="row font-weight-bold text-center my-5">
      <div class="col-md-12">
        <h1 class="wow fadeIn delay-0s"><u>About Us</u></h1>
      </div>
    </div>
      <div class="row mt-5 wow fadeInLeft delay-0s">
       
        <div class="col-md-6">
          <p>The club focus student for the benefits of their talents who are thinking of going to professional with teacher who are master in their own fields. </p>
          <p>This club have been stablished from 2001 and from then the club has produced many people who are good on their own respective field.</p>
        </div>
         <div class="col-md-6"><img src="Img/AboutUs.jpg" alt="Ballet" class="img-fluid "></div>
      </div>
  </div><hr>
    <!-- About Us -->

<!-- Classes -->
<div class="Classes">
 <div class="container-fluid bg-light">
  <div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeIn delay-0s">Classes</h2>
    <div class="row wow fadeInLeft ">
      <div class="col-lg-5 col-xl-4 wow ">
        <div class="mb-3">
          <img class="img-fluid" src="Img/class dance.jpg" alt="Coachella">
        </div>
      </div>
      <div class="col-lg-7 col-xl-8 ">
        <h3 class="font-weight-bold mb-3"><strong>Dance Class</strong></h3>
        <p class="dark-grey-text"> This institute that exposes the grooving talent hidden inside you. All we do is transform all your moves into dance steps. Express through your body what your words cannot. Whether it’s Kathak or Ballet, Bharat Natyam or Contemporary, Classical or Modern or any other forms, just roll in and live your desire.</p>
        <p> Come be a part of LCDC and explore yourself and your abilities to move your body to the beats of music. We believe Dance is the hidden language of the soul and is the visible form of Music. So Join to communicate in this divine language.</p>
        <?php
          if (isset($_SESSION['login'])!='yes')
          {
          ?>
          <a class="btn btn-success text-light btn-md" href="SignUp.php" >Join Now</a>
          <?php
        }
        else
        {
           ?>

           <?php
         }
         ?>
      </div>
    </div>
    <hr class="my-5">
    <div class="row wow fadeInUp">
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Drama Class</strong></h3>
        <p class="dark-grey-text">Basic drama classes introduce students to the fundamental skills of the physical and emotional craft of acting through the study of specific acting methods and exercises. Drama students practice character analysis and learn how to create a dramatic character.</p>
        <p> Students may learn by performing the works of classic playwrights, such as Stanislavsky, Meisner and Chekhov. Acting skills are developed through improvisations, scene work, focused theater exercises, group work and monologues. A fundamentals class is usually taken at the beginning of a program</p>
          <?php
            if (isset($_SESSION['login'])!='yes')
            {
            ?>
            <a class="btn btn-success text-light btn-md" href="SignUp.php" >Join Now</a>
            <?php
          }
          else
          {
             ?>

             <?php
           }
           ?>
      </div>
      <div class="col-lg-5 col-xl-4 ">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Drama-Class.jpg" alt="Sample image">
        </div>
      </div>
    </div>
    <hr class="my-5">
    <div class="row wow fadeInRight">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/class.jpg" alt="Sample image">
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Singing Class</strong></h3>
        <p class="dark-grey-text">Our classes are fun, welcoming and celebrate the joy of singing. Our professional singing tutors specialise in a range of techniques with a focus all singing types from rock and roll to fully high pitched classical stuff.</p>
        <p> We provide an excellent foundation for absolute beginners, as well as for those who have had some basic vocal training but want to develop their singing technique and vocal skills.Don’t worry if you’re a little nervous - this course focuses on singing as a group and building your confidence. And it doesn't matter if you don't get it right first time round; it's all about practising and enjoying singing! </p>
          <?php
            if (isset($_SESSION['login'])!='yes')
            {
            ?>
            <a class="btn btn-success text-light btn-md mb-2" href="SignUp.php">Join Now</a>
            <?php
          }
          else
          {
             ?>

             <?php
           }
           ?>
      </div>
    </div>
  </div>
 </div>
</div>
<!-- Classes -->

<section id="Teacher">
      <div class="container fello--12 wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title text-center"><u>Our Teachers</u></h3>
        </div>
        <div class="row hello--123">
      <?php

        $query = "SELECT * FROM tbl_teachers";

        $result = $connection->query($query);
        while ($row = $result->fetch_array()) {
        ?>

          <div class="col-lg-4 egpg">
            <div class="member py-3">
              <img src="Img/teacher.jpg" alt="" style="width:100%;">
              <h4 class="text-center mt-2"><?php echo $row['Teacher_Name']?></h4>
              <h5 class="text-center mt-2"><?php echo $row['Teacher_Job']?></h5>
            </div>
          </div>
        <?php
      }
        ?>

      </div>
    </section>
<section class="container my-5">
  <h1 class="text-center wow fadeInUp delay-0.5s"><u>Book Classes</u></h1>
  <div class="col-8 mx-auto">
  <form class="form-register text-center" method="post" name="register" id="register" action="classbookaction.php">
    <p>Please choose the class schedule you want to book:</p>
    <div class="form-group row">
    <div class="col-6">
        <select class="form-control" id="classes" name="classtype">
          <option value="acting">Acting</option>
          <option value="singing">Singing</option>
          <option value="dancing">Dancing</option>
        </select>
    </div>
    <div class="col-6">   
        <select class="form-control" id="classes" name="scheduletype">
          <option value="morning">Morning</option>
          <option value="day">Day</option>
          <option value="evening">Evening</option>
        </select>
    </div>
    </div>
    <?php if(!empty($_SESSION['login_username'])){?>
    <button type="submit" class="btn btn-success btn-md">Join</button>
  <?php }
  else
    {?>
      <button type="submit" class="btn btn-success btn-md" disabled>Join</button>
      <p class="mt-3 d-none d-xl-block">You need to<a href="Login.php"> Login </a>to book the classes</p><?php } ?>
  </form>
  </div>
  
</section>
    <?php
    require('Cookie.php');
    ?>

<!-- Footer -->
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
            <a href="Blog.php">Blog</a>
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
<script>
var wow = new WOW(
  {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       0,
    mobile:       true,
    live:         true,
    callback:     function(box) {
    },
    scrollContainer: null,
    resetAnimation: true,
  }
);
wow.init();
</script>

</body>
</html>
