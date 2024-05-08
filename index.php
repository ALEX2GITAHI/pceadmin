<?php include ('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>

  <script>
    var ScrollMsg = "PCEA MUKINYI "
    var CharacterPosition = 0;
    function StartScrolling() {
      document.title = ScrollMsg.substring(CharacterPosition, ScrollMsg.length) +
        ScrollMsg.substring(0, CharacterPosition);
      CharacterPosition++;
      if (CharacterPosition > ScrollMsg.length) CharacterPosition = 0;
      window.setTimeout("StartScrolling()", 150);
    }
    StartScrolling();
    // -->
  </script>

  <link href="assets/must.png" rel="shortcut icon">
  <link href="main/IMAGES/logopcea.png" rel="shortcut icon">
  <link rel="stylesheet" href="login.css">
  <script src="logininfo.js"></script>
</head>

<body class="hold-transition login-page">
<style type="text/css">
		body {
			background-image: url(./main/img/Screenshot\ 2024-03-26\ 081345.png);
			background-size: cover;
			padding-top: 60px;
			padding-bottom: 40px;
		}

		.sidebar-nav {
			padding: 9px 0;
		}
	</style>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  <?php
			if (isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) > 0) {
				foreach ($_SESSION['ERRMSG_ARR'] as $msg) {
					echo '<div style="color: red; text-align: center;">', $msg, '</div><br>';
				}
				unset($_SESSION['ERRMSG_ARR']);
			}
			?>
  <div class="container">
    <section id="content">
      <form action="login.php" method="post">
        <img src="main/IMAGES/pcealog.png" alt="Avatar" class="avatar" width="100px" height="115px">
        <b>
          <h1>PCEA MUKINYI</h1>
        </b>
        <div>
          <label for="uname"><b>Username</b></label>
          <input placeholder="Enter Your Membership No" class="stdinpt" id="stdid" type="text" name=" username" required
            size="15">
        </div>
        <div>
          <label for="uname"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" id="pswd2" name="password">
          <input type="checkbox" onclick="ShowPassword()">Show Password <br> <br>
        </div>
        <div>
          <input type="submit" value="Login" name="login" href="dashboard.html"> <br>
        </div>
      </form><!-- form -->
    </section><!-- content -->
  </div><!-- container -->
</body>

</html>