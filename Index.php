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
  <link rel="stylesheet" href="slick/slick.css"/>
  <link rel="stylesheet" href="slick/slick-theme.css"/>

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
        <li class="nav-item active">
          <a class="nav-link active" href="Index.php"><h3>Home Page</h3></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AboutUs.php"><h3>About Us</h3></a>
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

<!-- Carousel -->
<div id="MainCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#MainCarousel" data-slide-to="0" class="active"> </li >
    <li data-target="#MainCarousel" data-slide-to="1"> </li>
    <li data-target ="#MainCarousel" data-slide-to="2"> </li>
  </ol >
  <div class="carousel-inner" role="listbox">
    <?php
    $findeventquery = "SELECT * FROM tbl_events ORDER BY Event_Id DESC LIMIT 3";
    $result = $connection->query($findeventquery);
    $i=1;
    while($row = $result->fetch_array()){
    ?>
    <div class="carousel-item <?php if ($c!=1){ echo "active"; } ?>" >
    <?php if ($i==1) { echo '<img  src="Img\Music.jpg" width="100%"  height="900px" alt="singing photo">'; }
      else if($i==2) { echo '<img  src="Img\drama clss.jpg" width="100%"  height="900px" alt="acting photo">'; }
      else if($i==3) { echo '<img  src="Img\dance.jpg" width="100%"  height="900px" alt="dancing photo">'; }
    ?>
      <div class="carousel-caption">
        <div style="margin-bottom:5%;">
          <h2 class="mt-5 text-responsive text-success"><?php echo $row['Event_Name']?></h2>
          <h4 class="text-success"><?php echo $row['Event_Description']?></h4>

          <p class="text-success">
          <i class="fa fa-calendar-o mr-2 text-success"></i><?php echo $row['Event_Date']?>
          </p>
        </div>
      </div>
      <?php $c=1; ?>
    </div>
    <?php
    $i++;}
    ?>
  </div>
  <a class="carousel-control-prev" href="#MainCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"> </span>
  </a>
  <a class="carousel-control-next" href="#MainCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"> </span>
  </a>

</div><hr>
<!-- Carousel -->

    <!-- About Us -->
  <div class="container py-5 ">
    <div class="row font-weight-bold text-center my-5">
      <div class="col-md-12">
        <h1 class="wow fadeIn delay-0s"> About Us</h1>
      </div>
    </div>
      <div class="row mt-5 wow fadeInLeft delay-0s">
        
        <div class="col-md-6">
          <p>The club focus student for the benefits of their talents who are thinking of going to professional with teacher who are master in their own fields. </p>
          <p>This club have been stablished from 2001 and from then the club has produced many people who are good on their own respective field.</p>
          <a class="btn btn-success btn-rounded" href="AboutUs.php">Read More</a>
        </div>
        <div class="col-md-6"><img src="Img/AboutUS.jpg" alt="AvoutUs" class="img-fluid "></div>
      </div>
  </div><hr>
    <!-- About Us -->

<!-- Call to Action -->
  <section id="call-to-action" class="py-5">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="display-4 font-weight-bold text-light mb-0 pt-md-5 pt-5 wow fadeInUp">Our Classes are Ready</h1>
            <h5 class="text-light pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 wow fadeInUp" data-wow-delay="0.2s">Know more about the class activity that we are currently conducting.</h5>
              <?php
                if (isset($_SESSION['login'])!='yes')
                 {
                  ?>
            <div class="wow fadeInUp" data-wow-delay="0.4s">
              <a class="btn btn-danger " href="SignUp.php">Sign up Now!</a>
              <a class="btn btn-danger btn-rounded" href="AboutUs.php">Learn more</a>
            </div>

                    <?php
                  }
                  else
                  {
                     ?>
                     <div class="wow fadeInUp" data-wow-delay="0.4s">
                       <a class="btn btn-success btn-rounded" href="AboutUs.php">Learn more</a>
                     </div>
                     <?php
                   }
                   ?>
          </div>
        </div>
      </div>
    </section><hr>
<!-- Call to Action -->

<!-- Classes -->
    <div class="container wow fadeIn py-5">
        <div class="row font-weight-bold text-center my-5">
           <div class="col-md-12">
             <h1 class="wow fadeIn delay-0s">Classes</h1>
           </div>
           <div class="row">
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
               <div class="box">
                 <h4 class="title"><b>Singing Class</b></h4>
                 <p class="description">Singing class focus in pop, hip-hp and other form of songs.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-danger btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   <iframe height="200" src="https://www.youtube.com/embed/Q5hS7eukUbQ "></iframe>
                 </div>
               </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
               <div class="box">
                 <h4 class="title"><b>Dance Class</b></h4>
                 <iframe height="200" src="https://www.youtube.com/embed/8LnlCo4M-Bg"></iframe>
                 <p class="description">Dance Class focus student so that they can go to professional debut.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-danger btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   
                 </div>
               </div>
             </div>
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
               <div class="box">
                 <h4 class="title"><b>Drama Class</b></h4>
                 <p class="description">Drama Club focus on the people who are trying their best in doing comedy.</p>
                 <div class="wow fadeInUp" data-wow-delay="0.4s">
                   <a class="btn btn-danger btn-rounded mb-3" href="AboutUs.php">Read More</a>
                   <iframe height="200" src="https://www.youtube.com/embed/nnQQFy9CA5A"></iframe>
                 </div>
               </div>
             </div>
           </div>
     </div>
   </div><hr>
<!-- Classes -->

<!-- Newsletter -->
<section id="Newssubscribe">
  <div class="container wow fadeInUp">
    <div class="section-header text-center">
      <h2>Newsletter</h2>
      <p>Subscribe to Our Newslatter for more detail info in our upcoming events.</p>
    </div>
    <form method="post" action="NewsletterAction.php">
      <div class="form-row justify-content-center">
        <div class="col-auto">
          <input type="email" class="form-control" name="Email" placeholder=".........Enter your Email........." required>
        </div>
        <div class="col-auto">
          <input type="submit" class="btn btn-rounded bg-danger text-light" title="Subscribe" name="Subscribe" value="Subscribe"/>
        </div>
      </div>
    </form>
  </div>
</section><hr>
<!-- Newsletter -->

<!-- Upcoming Events -->
<div class="Upcoming-Events">
 <div class="container-fluid bg-dark">
  <div class="container">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeIn">Events and Blog</h2>
    <div class="row wow fadeInRight">
    <?php
    $query = "SELECT * FROM tbl_Blog order by Blog_Id DESC LIMIT 3";

    $result = $connection->query($query);
    while ($row = $result->fetch_array()) {
     ?>
      <div class="col-lg-3 col-md-6">
        <div class="Thumbnail mb-3">
          <img class="img-fluid" src="Img/dance in the park.jpg" alt="Coachella">
        </div>
        <div class="blog-column1">
        <h5 class="font-weight-bold text-center mb-3"><?php echo $row['Blog_Title']?></h3>
        <p class="dark-grey-text text-center"><?php echo $row['Blog_Description'] ?> </p>
        <a class="btn btn-success text-light btn-md mb-3 ml--btn-I" href="Blog.php">Read more</a>
      </div>
    </div>
    <hr class="my-5">
    <?php } ?>
    </div>
  </div>
 </div>
</div><hr>
<!-- Upcoming Events -->

<div class="container bg-dark">
<table width="100%" cellspacing="1" border="hard">
  <thead>
    <tr>
        <th>S.N</th>
        <th>Event Name</th>
        <th>Event Description</th>
        <th>Event Date</th>
        <th>Booking</th>
    </tr>
  </thead>
  <tbody>
        <?php

        $query = "SELECT * FROM tbl_events";

        $result = $connection->query($query);
        $i=1;
        while($row = $result->fetch_array()){
        ?>
    <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['Event_Name']?></td>
        <td><?php echo $row['Event_Description']?></td>
        <td><?php echo $row['Event_Date']?></td>
        <?php
          if (isset($_SESSION['login'])!='yes')
          {
          ?>
                  <td><a href="Login.php" class="btn btn-success">Book Now</a></td>
          <?php
        }
        else
        {
           ?>
                  <td><form method="post" action="bookaction.php">
                    <input type="hidden" name="event" value="<?php echo $row['Event_Id']?>">
                    <input type="submit" class="btn btn-success w-50" name="Book" value="Book Now">
                  </form>
                  </td>
           <?php
         }
         ?>
    </tr>
        <?php
        $i++;}
        ?>
</tbody>
</table>
</div><hr>

<!-- Testimonials -->
<div id="TestimonialsI">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12 wow fadeInUp">
    <h2 class="pt-2 text-center text-light font-weight-bold">Testimonials</h2>
      <div class="thing" id="wrapper">
        <?php
          $query = "SELECT Username,Comment FROM tbl_contactus order by Contact_Id desc LIMIT 3";

          $result = $connection->query($query);
            while ($row = $result->fetch_array()) {
              ?>
              <div class="h5 font-weight-normal one-slide mx-auto">
                <div class="testimonial w-100 text-center text-light justify-content-center flex-wrap align-items-center">
                  <div class="message text-center blockquote w-100"><?php echo $row['Comment']?></div>
                  <div class="blockquote-footer text-light w-100"><?php echo $row['Username']?></div>
                </div>
              </div>
            <?php
            }
        ?>
      </div>
  </div>
</div>
</div>
</div><hr>

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
            <a href="AboutUs.php">AboutUs</a>
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
<!-- Footer -->

<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="slick/slick.min.js"></script>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.thing').slick({
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed:2000
    });
  });
</script>

</body>
</html>
