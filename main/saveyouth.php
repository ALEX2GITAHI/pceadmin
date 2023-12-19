<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$m = $_POST['middle_name'];
$k = $_POST['last_name'];
$f = $_POST['username'];
$e = $_POST['DOB'];
$d = $_POST['phone_number'];
$b = $_POST['district_name'];
$c = $_POST['registered'];
$g = $_POST['gender'];
// query

  //do your write to the database filename and other details   
$sql = "INSERT INTO youth (first_name,middle_name,last_name,membership_id,date_of_birth,phone_number,district_name,registered,gender)
 VALUES (:a,:m,:k,:f,:e,:d,:b,:c,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':m'=>$m,':k'=>$k,':f'=>$f,':e'=>$e,':d'=>$d,':b'=>$b,':c'=>$c,':g'=>$g));
header("location: member.php");

	
?>