<?php
include('includes/db.php');
$id = $_GET['id'];

$query = "DELETE FROM tbl_forums WHERE post_id = '$id'";
$connection->query($query);

header("Location: ForumInfo.php");


?>
