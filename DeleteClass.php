<?php
include('includes/db.php');
$id = $_GET['id'];

$query1 = "DELETE FROM tbl_classbookings WHERE classbook_id = '$id'";
$connection->query($query1);

header("Location: ClassUser.php");


?>