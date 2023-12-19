<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="assets/pcealog.png" rel="shortcut icon">
  <link rel="stylesheet" href="login.css">
  <script src="logininfo.js"></script>
  
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
</head>
</head>
<body class="hold-transition login-page">
<br><br><br><br><br><br><br><br>
<div class="container">
  <section id="content">
  <?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
  <form class="modal-content animate"  id="myform"  action="server.php" method="post" name="form" required>
    <img src="assets/pcealog.png" alt="alternative text" width="55px" height="65px">
      <b><h1>PCEA MUKINYI</h1></b>
      <div>
      <label for="uname"><b>Username</b></label>
        <input placeholder="Enter Your Membership No" class="stdinpt" id="stdid" type="text" name=" username" required size="15" >
      </div>
      <div>
      <label for="uname"><b>Password</b></label>
      <input type="password" placeholder="Enter Password"  id="pswd2" name="password" > 
      <input type="checkbox" onclick="ShowPassword()">Show Password <br> <br>
        </div>
        <div >
        <input type="submit" value="Login"  name="login" onclick=" validateForm()"> <br>
        <p>
        <b><a href="signup.php"> Click here to register!</a>
        <b><a href="index.php"> Admin Login</a></b>
    </p>
    </div>
    </form><!-- form -->
  </section><!-- content -->
</div><!-- container -->
</body>
</html>