<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM membership WHERE username= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: students.php");
?>