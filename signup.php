<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="stle.css">
  <title>Document</title>
  <script>
    <!--
      var ScrollMsg= "PCEA Mukinyi System - "
      var CharacterPosition=0;
      function StartScrolling() {
      document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
      ScrollMsg.substring(0, CharacterPosition);
      CharacterPosition++;
      if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
      window.setTimeout("StartScrolling()",150); }
      StartScrolling();
    // -->
  </script>
<?php 
//require_once('main/auth.php');
?>
  <link href="assets/pcealog.png" rel="shortcut icon">
  <link rel="stylesheet" href="assets/css/login.css">
  <script src="logininfo.js"></script>
</head>
<body>
<div class="imgcontainer">
<img src="main/IMAGES/logopcea.png" alt="Avatar" class="avatar"  width="25px" height="120px">
<form action="main/savemember.php" method="post" enctype="multipart/form-data"> <br>
<div style="margin-top: -19px; margin-bottom: 21px;">
<center><h4><i class="icon-edit icon-large"></i>REGISTER</h4></center>
<hr><center>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>First Name : </span><input type="text" style="width:265px; height:30px;"  name="first_name" Required /><br>
<span>Middle Name : </span><input type="text" style="width:265px; height:30px;"  name="middle_name" Required /><br>
<span>Last Name : </span><input type="text" style="width:265px; height:30px;"  name="last_name" Required /><br>
<span>Memebr ID: </span><input type="text" style="width:265px; height:30px;"  value="MC20-<?php
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="membership_id" readonlyired /><br>
<span>Password : </span><input type="password" style="width:265px; height:30px;" id="pswd2"   name="password1" Required /><br>
<input type="checkbox" onclick="Shossword()">Show Password <br>
<script>
    function Shossword() {
        var x = document.getElementById("pswd1");
        var x = document.getElementById("pswd2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }

</script>
<span> Confirm Password: </span><input type="password" style="width:265px; height:30px;" id="pswd1"   name="password2" Required /><br>
<span>Phone: </span><input type	="text" style="width:265px; height:30px;" name="phone_number" required /><br>
<span>Gender: </span>
<select name="gender" style="width:265px; height:30px; margin-left:-5px;" >
<option>Female</option>
<option>Male</option>
</select><br><br>
<span>D.O.B: </span><input type	="date" style="width:265px; height:30px;" name="DOB" required /><br><br>
<span>District: </span>
<select name="district_name" id="district_name" style="width:265px; height:30px; margin-left:-5px;" >
<option>WENDO</option>
<option>KIONEKI</option>
<option>WITIKIO</option>
<option>GIKENO</option>
<option>MUNYAKA</option>
<option>MWANGAZA</option>
<option>HIGHWAY</option>
<option>IMMANUEL</option>
<option>EBENEZER</option>
<option>BETHSAIDA</option>
<option>UTUGI</option>
</select><br><br>
<div >
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>Register</button> <br>
Already having an account?
            <a href="logn.php">
                Login Here!
</div>
</div>
</form>
</center>
  </div>
</body>
</html>