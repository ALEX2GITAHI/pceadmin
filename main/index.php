<!DOCTYPE html>
<html>
<head>
<title>
Membership System
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
    
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<link href="IMAGES/pcealog.png" rel="shortcut icon">
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<?php
	require_once('auth.php');
?>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	
</head>
<body>
<?php include('navfixed.php');?>
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='cashier') {
?>

<a href="../index.php">Logout</a>
<?php
}
if($position=='admin') {
?>
	
	<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li><a href="students.php"><i class="icon-group icon-2x"></i>Manage Members</a>       </li>
			<li><a href="addstudent.php"><i class="icon-user icon-2x"></i>Add Member</a>         </li>
			<li><a href="district.php"><i class="icon-sitemap icon-2x"></i>Districts</a>         </li>
      <li><a href="groups.php"><i class="icon-sitemap icon-2x"></i>Groups</a>         </li>
      <li><a href="report.php"><i class="icon-sitemap icon-2x"></i>Reports</a>         </li>


			<br><br>	
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> PCEA Mukinyi Church
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; color:#722290;"><center>Mukinyi's MMS</center></font>
<div id="mainmain">

<h4 class="font-weight-normal mb-3">Total Male Members <i class="mdi mdi-chart-line mdi-24px float-right"></i>
										</h4>                    
										<?php 
                    include('../connect.php');                  
                    $results = $db->prepare("SELECT * FROM membership where gender='female'");
										$results->execute();
                    $rowcount = $results->rowcount();
										?>
										<h2 class="mb-5"> <?php echo $rowcount;?></h2>
									</div>
								</div>
     <style>
      /* General reset for margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Styling for the h4 element */
h4.font-weight-normal.mb-3 {
    font-weight: normal;
    margin-bottom: 1rem; /* 3 translates to approximately 1rem */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Styling for the icon inside h4 */
h4.font-weight-normal.mb-3 i.mdi {
    font-size: 24px;
    float: right;
}

/* Styling for the h2 element */
h2.mb-5 {
    margin-bottom: 3rem; /* 5 translates to approximately 3rem */
}

/* Styling for the .stretch-card class */
.stretch-card {
    display: flex;
    align-items: stretch;
}

/* Styling for the .grid-margin class */
.grid-margin {
    margin-bottom: 30px; /* Example margin value */
}

/* Styling for the .card class */
.card {
    border-radius: 5px; /* Example border radius */
    overflow: hidden;
    position: relative;
}

/* Styling for the .bg-gradient-info class */
.bg-gradient-info {
    background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}

/* Styling for the .card-img-holder class */
.card-img-holder {
    position: relative;
}

/* Styling for the .text-white class */
.text-white {
    color: white;
}

/* Inline style for the height of the card */
.card[style] {
    height: 150px;
}

/* Styling for the .card-body class */
.card-body {
    padding: 20px; /* Example padding value */
}

     </style>
							</div>
							<div class="col-md-6 stretch-card grid-margin">
								<div class="card bg-gradient-info card-img-holder text-white"style="height: 150px;">
									<div class="card-body">  
<?php
}
?>
<br> <br> <br> <br> <br> <br> <br> <br> <br> 
<div class="slideshow-container">
     
        <div class="mySlides">
		<blockquote><b><i>"My house will be called a house of prayer for all nations"</i></b></blockquote>
            <p class="author">- <b>Mark 11:17 NIV</b></p>
          </div>

        <div class="mySlides">
		<blockquote><b><i>"These I will bring to my holy mountain and give them joy in my house of prayer. Their burnt offerings and sacrifices will be accepted on my altar; for my house will be called a house of prayer for all nations"</i></b></blockquote>
          <p class="author">- Isaiah 56:7 NIV</p>
        </div>
        
        <div class="mySlides">
		<blockquote><b><i>"Your ndecrees are very trustworthy; holiness befits your house, LORD, forevermore"</i></b></blockquote>
          <p class="author">- Psalm 93:5 NIV</p>
        </div>
        </div>
        
        <div class="dot-container">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
      
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 15000); // Change image every 2 seconds
            }
            </script>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
