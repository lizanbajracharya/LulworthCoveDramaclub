<?php
include('includes/db.php');
include('includes/functions.php');
checkLogin();
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
    <a class="navbar-brand" href="Index.php"><h1>Lulworth Cove Drama Club</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="Index.php"><h3>Home Page</h3></a>
        </li>
        <li class="nav-item ">
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
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
            </form>

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
            <a class="dropdown-item" href="UserProfile.php?id=<?php echo $_SESSION['login_Id']?>">Profile</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0 " type="submit"><i class="fa fa-search"></i></button>
      </form>
      <?php
    }
      ?>
    </div>
  </nav>
</div>

<div class="Class-U--UI">
<div class="container mt-5 pt-5">
<div class="font-weight-bold text-uppercase text-center">
  <h1> Class Booked Info</h1>
</div>

<div class="Class-UI--UI">
<table class="table" border="dark">
			  <thead>
				<tr>
				  <th scope="col">Class Type</th>
				  <th scope="col">Schedule Type</th>
				  <th scope="col">Users</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
				$findclassbookingsquery = "SELECT * FROM tbl_classbookings ORDER BY schedule_type DESC";
				$result = $connection->query($findclassbookingsquery);
				$c=1;
				while($data = $result->fetch_array()){
				?>
				
				<tr>
					<td><?php echo $data['class_type']?></td>
					<td><?php echo $data['schedule_type']?></td>
					
					<?php
					$findusernamequery = "SELECT * FROM registerusers WHERE U_id='{$data['U_id']}'";
					$resultusername = $connection->query($findusernamequery);
					$uname = $resultusername->fetch_array()
					?>
					<td style="text-transform:capitalize;"><?php echo $uname['Parent_Name'] ?></td>
          <td><a class="btn btn-rounded btn-success" href="DeleteClass.php?id=<?php echo $data['classbook_id']?>" onclick="Javascript: return confirm('Are you sure you want to delete?');">Delete</a></td>
				</tr>
					<?php
					$c++;}
					?>

			  </tbody>
			</table>
      <div class="text-center my-3">
  <a class="btn btn-success btn-rounded" href="Index.php">Back to Home </a>
</div>
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

