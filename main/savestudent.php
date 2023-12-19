<?php
session_start();
include('../connect.php');
$a = $_POST['first_name'];
$m = $_POST['middle_name'];
$k = $_POST['last_name'];
$f = $_POST['membership_id'];
$e = $_POST['DOB'];
$d = $_POST['phone_number'];
$b = $_POST['district_name'];
//$c=$_POST['unity']; 
//$checked=implode(",",$c);
$g = $_POST['gender'];
// query

  //do your write to the database filename and other details   
$sql = "INSERT INTO member (first_name,middle_name,last_name,membership_id,DOB,phone_number,district_name,gender)
 VALUES (:a,:m,:k,:f,:e,:d,:b,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':m'=>$m,':k'=>$k,':f'=>$f,':e'=>$e,':d'=>$d,':b'=>$b,':g'=>$g));
header("location: students.php");

	
?>