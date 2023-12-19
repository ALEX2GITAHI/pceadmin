<html>
<head>
<title>
Model :: Student Information System
</title>

<?php 
require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="dataTables.min.css">
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
</head>
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

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt4').value;
			 var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
				}
			
        }
</script>


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

<body>
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li class="active"><a href="students.php"><i class="icon-group icon-2x"></i>Manage Members</a>  </li>
			<li><a href="addstudent.php"><i class="icon-group icon-2x"></i>Add Member</a>     </li>
			<li><a href="district.php"><i class="icon-sitemap icon-2x"></i>DISTRICTS</a>         </li>

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
			<i class="icon-table"></i> DISTRICTS
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">District</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Members..." autocomplete="off" />
<a href="addstudent.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Student</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="20%"> District Name</th>
			<th width="20%"> Elder Name</th>
			<th width="20%"> Elders Phone </th>
		</tr>
	</thead>
	<tbody>
			<td align="center"><a href="wendo.php">WENDO</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-2e7d' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-2e7d' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="kioneki.php">KIONEKI</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-0968' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-0968' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="munyaka.php">MUNYAKA</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-a4d0' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-a4d0' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="immanuel.php">IMMANUEL</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-dd0f' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-dd0f' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="utugi.php">UTUGI</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-f2b7' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-f2b7' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="gikeno.php">GIKENO</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-579b' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-579b' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="witikio.php">WITIKIO</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-b761' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-b761' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="bethsaida.php">BETHSAIDA</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-df27' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-df27' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="highway.php">HIGHWAY</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-92f8' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-92f8' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="mwangaza.php">MWANGAZA</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-b657' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-b657' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<tbody>
			<td align="center"><a href="ebenezer.php">EBENEZER</a></td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT * FROM member WHERE membership_id = 'MC20-3796' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> ELDER  
			<a title="Click to view the member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>">	<?php echo $row['first_name']; ?></a>
			<?php
				}
			?>
			</td>
			<td>
			<?php
			include('../connect.php');
			$result = $db->prepare("SELECT phone_number FROM member WHERE membership_id = 'MC20-3796' ");
			$result->execute();
			for($i=0; $row = $result->fetch();) { ?> 
			<?php echo $row['phone_number']; ?>
			<?php
				}
			?>
			</td>
			</tr>
			<thead>
		<tr>
			<th width="20%"> District Name</th>
			<th width="20%"> Elder Name</th>
			<th width="20%"> Elders Phone </th>
		</tr>
	</thead>
		
		
	</tbody>
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Student? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletestudent.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>

