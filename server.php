<?php
session_start();
$showAlert = false; 
$showError = false;
$exists=false;
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";
$db = mysqli_connect('localhost', 'root', '', 'model');
if (isset($_POST['register'])) {  
    $fname  = mysqli_real_escape_string($db, $_POST['fname']);
    $mname  = mysqli_real_escape_string($db, $_POST['mname']);
    $lname  = mysqli_real_escape_string($db, $_POST['lname']);
	$username = mysqli_real_escape_string($db, $_POST['sid']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password1']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
  $dob = mysqli_real_escape_string($db, $_POST['birthday']);
	if (count($errors) == 0) {
		$password = md5($password);
		$query = "INSERT log_in (fristName,middleName,lastName,studentId,studentEmail,password,DOB)
				VALUES ('$fname','$mname','$lname','$username','$email','$password','$dob')";
       
		mysqli_query($db, $query);
 		$_SESSION['userName'] = $username;
		$_SESSION['success'] = "You have logged in";
		header('location: login.php');
	}
}

// User login
if (isset($_POST['logn'])) {
	$username = mysqli_real_escape_string($db, $_POST['sid']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
		$password = md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
    if (mysqli_num_rows($results)) {
      //$query = "INSERT studcorse (studentId)
      //VALUES ('$username')";
      //mysqli_query($db, $query);
			$showAlert = true;
			header('location: main/member.php');
	}
  $showError = "Username or password incorrect";
}
  //course
  if (isset($_POST['submit'])) {  
  $course = mysqli_real_escape_string($db, $_POST['genre']);
  $query = "UPDATE log_in SET course ='".$course. "' WHERE studentId = 'Hellex21'" ;
		$results = mysqli_query($db, $query);
    if (($results)) {
     // $query = "INSERT INTO studcorse (studentId) values( 'mku')";
      //mysqli_query ($db, $query);
			$showAlert = true;
      header('location: index.html');
	}
   

  }
?>


    
    <!-- Required meta tags --> 
    <meta charset="utf-8"> 
    <meta name="viewport" content=
        "width=device-width, initial-scale=1, 
        shrink-to-fit=no">
    
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" type="text/css" href="style.css">
    

<?php
    if($showAlert) {
    
        echo ' <div class="alert success">
        <span class="closebtn">&times;</span>  
        <strong>Success!</strong> Login Successful!!!.
      </div>'; 
    }
    
    if($showError) {
    
        echo '<div class="alert error">
        <span class="closebtn">&times;</span>  
        <strongError!</strong>'. $showError.'</div>'; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="closebtn" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
	 ?>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
    

