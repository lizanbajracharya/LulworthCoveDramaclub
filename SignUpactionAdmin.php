7<?php
include('includes/db.php');


$ParentEmail = $_POST['ParentEmail'];
$PhoneNo = $_POST['PhoneNo'];
$address = $_POST['Address'];
$password = md5($_POST['password']);
$class = $_POST['Class'];
$usertype=$_POST['Usertype'];

$query1="SELECT * FROM registerusers WHERE User_Type='User'";
$result=$connection->query($query1);
$i=1;
while($row=$result->fetch_array())
{
	if($ParentEmail==$row['Parent_Email'])
	{
		header("Location:SignUp.php?msg=errorEmail");
		
		die();
	}
	$i++;
}

$query = "INSERT INTO registerusers (`Parent_Email`, `Phone_No`, `Address`,`Password`,`Class`,`User_Type`) VALUES ( '$ParentEmail','$PhoneNo','$address','$password','$class','$usertype')";


if($connection->query($query) === true){
    header("Location: adminpanel.php");
} else{
    echo "ERROR: Could not able to execute $query. " . $connection->error;
}

?>
