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
        <li class="nav-item active">
          <a class="nav-link" href="Blog.php"><h3>Blog</h3><span class="sr-only">(current)</span></a>
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

<!-- Upcoming Events -->
<div class="Upcoming-Events pt-5">
 <div class="container-fluid bg-light">
  <div class="container ">
    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeInUp"><u>Upcoming Events</u></h2>
    <div class="row wow fadeInRight">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/Coachella.jpg" alt="Coachella">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Coachella</strong></h3>
        <p class="dark-grey-text"><strong>Coachella</strong> Valley Music and Arts Festival is an annual music and arts festival held at the Empire Polo Club in Indio, California, located in the Inland Empire's Coachella Valley in the Colorado Desert. The event features musical artists from many genres of music, including rock, indie, hip hop, and electronic dance music, as well as art installations and sculptures.This year its gonna happen in April 12-14 2019 and April 19-21 2019.It will include lots of artists such as DJ snake, Zedd, Khalid, Ariana Grande, BlackPink, Diplo, J Balvin, Billie Eilish and many more. </p>
        <p>by <a class="font-weight-bold">Lizan Bajracharya</a>, 05/01/2019</p>
      </div>
    </div>
    <hr class="my-5">

    <h2 class="h1-responsive font-weight-bold text-center my-5 wow fadeInDown"><u>Blogs</u></h2>
    <div class="row wow fadeInRight">
      <div class="col-lg-5 col-xl-4">
        <div class="mb-3">
          <img class="img-fluid" src="Img/dance in the park.jpg" alt="RedBullBCOne">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      </div>
      <div class="col-lg-7 col-xl-8">
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <p class="dark-grey-text"><strong>DANCING IN THE PARK</strong> IS FREE EVENT FEATURES PERFORMANCES BY DANCERS, MUSICIANS, AND PERFORMANCE ARTISTS. ALSO INCLUDED ARE ACTIVITIES SUCH AS OUR DREAM BALLOON EVENT, STILT WALKERS, GAMES, FACE-PAINTING AND MORE TO MAKE THIS FAMILY-FRIENDLY EVENT A HIGHLIGHT OF THE FESTIVAL.
 </p>
          <p>by <a class="font-weight-bold">Lizan Bajracharya</a>, 05/01/2019</p>
      </div>
    </div>
    <hr class="my-5">
  </div>
 </div>
</div>

  <h4 class="text-center dark-grey-text w-responsive mx-auto mb-5 wow fadeIn"><u>Upcoming Events</u></h4>

<div class="container wow fadeIn">
<table width="100%" cellspacing="1" border="dark">
  <thead>
    <tr>
      <th>S.No</th>
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
</div>
<!-- Upcoming Events -->

  <div class="container-fluid bg-light py-5">
  	<h1 class="text-center wow fadeIn"><u>Forum</u></h1>
  	<?php
  	$findforumquery = "SELECT * FROM tbl_forums ORDER BY posted_date DESC LIMIT 3";
  	$result = $connection->query($findforumquery);
  	$i=1;
  	while($row = $result->fetch_array()){
  	?>

  	<div class="container col-lg-8 col-sm-9 col-xs-10 my-5 wow fadeInUp delay-0.5s">
  		<h1 class="font-weight-bold"><u><?php echo $row['Title']?></u></h1>
  		<div class="text-justify"><p><?php echo $row['Content']?></p>

  		<div>
            <p style="text-transform:capitalize;">
              <i class="fa fa-calendar mr-2"></i><?php echo $row['posted_date']?>
              <?php
              $findusernamequery = "SELECT * FROM registerusers WHERE U_id ='{$row['U_id']}'";
              $resultusername = $connection->query($findusernamequery);
              $uname = $resultusername->fetch_array()
              ?>
                    <i class="fa fa-user mr-2 ml-5"></i><?php echo $uname['Parent_Name'] ?></p>
          </div>
  			<p class="btn btn-rounded  btn-outline-danger">Comments</p>
  			<?php
  			$findcommentquery = "SELECT * FROM tbl_comments WHERE post_id = '{$row['post_id']}' ORDER BY comment_date DESC";
  			$resultcmt = $connection->query($findcommentquery);
  			$c=1;
  			while($cmt = $resultcmt->fetch_array()){

  				$findcmtusernamequery = "SELECT * FROM registerusers WHERE U_id = '{$cmt['U_id']}'";
  				$cmtusername = $connection->query($findcmtusernamequery);
  				$cmtuname = $cmtusername->fetch_array()
  				?>
  				<div class="bg-secondary pl-2 rounded">
  					<p class="text-light">" <?php echo $cmt['comment'] ?> " <i class="fa fa-user mr-2 ml-5"></i><?php echo $cmtuname['Parent_Name'] ?> </p>
  				</div>
  			<?php
  			$c++;}
  			?>

  		<form class="form-addcomment" method="post" name="addcomment" id="addcommet" action="addcomment.php">
  		  <div class="form-group">
  			<textarea class="form-control" id="post_comment" rows="2" name="post_comment" placeholder="<?php if (empty($_SESSION['login_username'])) { echo "Login required"; } else{echo "Comment on this post."; } ?>" <?php if (empty($_SESSION['login_username'])) { echo "disabled"; } ?>  required></textarea>
  		  </div>
  		  <input type="hidden" value="<?php echo $row['post_id'] ?>" name="post_id" id="post_id" />

  		  <div class="form-group row">
  			  <div class="col-md-6">
  				<button type="submit" class="btn btn-success btn-rounded" <?php if (empty($_SESSION['login_username'])) { echo "disabled"; } ?> >Submit</button>
  			  </div>
  		  </div>
  		</form>

  		</div>
  		</div>

  	<?php
  	$i++;}
  	?>

  </div>


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
