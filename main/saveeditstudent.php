<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['first_name'];
$h = $_POST['middle_name'];
$b = $_POST['last_name'];
$c = $_POST['membership_id'];
$d = $_POST['DOB'];
$e = $_POST['phone_number'];
$f = $_POST['district_name'];
$g = $_POST['gender'];
// query

$sql = "UPDATE member 
        SET first_name=?,middle_name=?,last_name=?,username=?,DOB=?,phone_number=?,district_name=?,gender=?
		WHERE table_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$h,$b,$c,$d,$e,$f,$g,$id));
header("location: students.php");

?>