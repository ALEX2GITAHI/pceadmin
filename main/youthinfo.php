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
<link rel="stylesheet" href="path/to/your/css/file.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
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
			<li><a href="youth.php"><i class="icon-group icon-2x"></i>Youths</a>       </li>
			<li><a href="youthregistered.php"><i class="icon-user icon-2x"></i>Registered</a>         </li>
			<li><a href="youthcard.php"><i class="icon-sitemap icon-2x"></i>Card Only</a>         </li>
            <li><a href="youthnotregistered.php"><i class="icon-sitemap icon-2x"></i>Not Registered</a>         </li>


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
			<i class="icon-dashboard"></i> PCEA Mukinyi Youth
			</div>
			<ul class="breadcrumb">
			<li><a href="member.php">Dashboard</a></li> /
            <li><a href="groups.php">Groups</a></li> /
			<li class="active">Youth</li>
			</ul>
			<font style=" font:bold 44px 'Aleo'; color:#722290;"><center>Youth Fellowship</center></font><br><br>
			<div class="container">
                    <div class="left-column">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Youth Members <i
                                        class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                                <?php 
                        include('../connect.php');                  
                        $results = $db->prepare("SELECT * FROM membership ");
                        $results->execute();
                        $rowcount = $results->rowcount();
                        ?>
                                <h2 class="mb-5"><?php echo $rowcount;?></h2>
                            </div>
                        </div>
                        <div class="card bg-gradient-danger card-img-holder text-white">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Registered<i
                                        class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
                                <?php
                        include('../connect.php');                  
                        $results = $db->prepare("SELECT * FROM guild ");
                        $results->execute();
                        $rowcount = $results->rowcount();
                        ?>
                                <h2 class="mb-5"><?php echo $rowcount;?></h2>
                            </div>
                        </div>
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Card Only<i
                                        class="mdi mdi-diamond mdi-24px float-right"></i></h4>
                                <?php 
                        include('../connect.php');                  
                        $results = $db->prepare("SELECT * FROM pcmf ");
                        $results->execute();
                        $rowcount = $results->rowcount();
                        ?>
                                <h2 class="mb-5"><?php echo $rowcount;?></h2>
                            </div>
                        </div>
                        <div class="card bg-gradient-purple card-img-holder text-white">
                            <div class="card-body">
                                <h4 class="font-weight-normal mb-3">Not Registered<i
                                        class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
                                <?php
                        include('../connect.php');                  
                        $results = $db->prepare("SELECT * FROM youth ");
                        $results->execute();
                        $rowcount = $results->rowcount();
                        ?>
                                <h2 class="mb-5"><?php echo $rowcount;?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="chart-container">
                            <canvas id="membershipChart"></canvas>
                        </div>
                    </div>
                </div>

                <script>
                <?php
                        include('../connect.php');                  
                        $results = $db->prepare("SELECT gender, COUNT(*) as count FROM youth GROUP BY gender");
                        $results->execute();
                        $data = $results->fetchAll(PDO::FETCH_ASSOC);
                        
                        $labels = [];
                        $counts = [];

                        foreach ($data as $row) {
                            $labels[] = ucfirst($row['gender']);  // Capitalize first letter
                            $counts[] = $row['count'];
                        }
                        ?>

                const labels = <?php echo json_encode($labels); ?>;
                const counts = <?php echo json_encode($counts); ?>;

                const ctx = document.getElementById('membershipChart').getContext('2d');
                const membershipChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Number of Members',
                            data: counts,
                            backgroundColor: ['#4e73df', '#1cc88a'],
                            borderColor: ['#4e73df', '#1cc88a'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        let label = context.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        if (context.parsed !== null) {
                                            label += context.parsed;
                                        }
                                        return label;
                                    }
                                }
                            }
                        }
                    }
                });
                </script>
<div id="mainmain">                    
<?php
}
?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<?php include('footer.php'); ?>
</html>
