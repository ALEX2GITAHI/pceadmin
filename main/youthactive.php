<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("UPDATE youth SET status = 'activated'WHERE username= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: youthcard.php");
?>