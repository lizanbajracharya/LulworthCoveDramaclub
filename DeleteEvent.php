<?php
include('includes/db.php');
$id = $_GET['id'];

$query1 = "DELETE FROM tbl_booking WHERE Event_Id = '$id'";
$connection->query($query1);
$query = "DELETE FROM tbl_events WHERE Event_Id = '$id'";
$connection->query($query);

header("Location: EventInfo.php");


?>
