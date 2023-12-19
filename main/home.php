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
<?php
}
?>
<?php 
			include('../connect.php');
				// Fetch total number of registered members
            $sqlTotalMembers = "SELECT * FROM membership";
            $resultTotalMembers = $db->query($sqlTotalMembers);
            $rwcount = $resultTotalMembers->rowcount();
            // Fetch total number of youths (assuming there's an age column)
           // $sqlTotalYouths = "SELECT * FROM membership WHERE gender = 'male'";
            //$resultTotalYouths = $db->query($sqlTotalYouths);
           // $rowTotalYouths = $resultTotalYouths->execute();
            //$rowcount = $rowTotalYouths->rowcount();

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Include your preferred charting library -->
    <!-- For example, include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Statistical Dashboard</h1>
    <div>
        <h2>Total Number of Registered Members: <?php echo $rwcount; ?></h2>
        <h2>Total Number of Youths: <?php //echo $rowcount; ?></h2>
    </div>
    <!-- Add your charts here using the fetched data -->
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        // Use JavaScript to create charts (Example using Chart.js)
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Members', 'Total Youths'],
                datasets: [{
                    label: 'Statistics',
                    data: [<?php echo $rwcount; ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
