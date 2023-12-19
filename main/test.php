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
			<i class="icon-table"></i> Members
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Members</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
			<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM member ORDER BY table_id ASC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
		
				<div style="text-align:center;">
			Total Number of Members:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
			</div>
			
			
</div>


<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Members..." autocomplete="off" />
<a href="addstudent.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Student</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
            <th width="5%"> NO</th>
			<th width="10%"> Membership ID</th>
			<th width="16%"> Full Name </th>
			<th width="5%"> Gender </th>
			<th width="10%"> Date of Birth</th>
			<th width="10%"> Phone </th>
			<th width="7%"> District </th>
			<th width="15%"> Action </th>
		</tr>
	</thead>
	<tbody>
    <?php
    // Database connection code (replace with your database credentials)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'model';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Calculate the total number of entries in the database
    $total_entries_query = "SELECT COUNT(*) AS total FROM member";
    $total_entries_result = $conn->query($total_entries_query);
    $total_entries = $total_entries_result->fetch_assoc()["total"];

    $entries_per_page = 6;
    $total_pages = ceil($total_entries / $entries_per_page);

    // Determine the current page
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $start = ($current_page - 1) * $entries_per_page;

    // Retrieve data for the current page
    $data_query = "SELECT * FROM member LIMIT $start, $entries_per_page";
    $data_result = $conn->query($data_query);
    $row_number = $start + 1; // Initialize the row number
    if ($data_result->num_rows > 0) {
        while ($row = $data_result->fetch_assoc()) {
          				
			?>
            <td><?php echo $row_number++; ?></td>
			<td align="center"><a href="viewstudent.php?id=<?php echo $row['table_id']; ?>" title="View Member"><?php echo $row['membership_id'] ?></a></td>
			<td><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['DOB']; ?></td>
			<td><?php echo $row['phone_number']; ?></td>
            <td> <?php echo $row['district_name']; ?></td>
			<td><a title="Click to view the Member" href="viewstudent.php?id=<?php echo $row['table_id']; ?>"><button class="btn btn-success btn-mini"><i class="icon-search"></i> View</button> </a>
			<a  title="Click to edit the Member" href="editstudent.php?id=<?php echo $row['table_id']; ?>"><button class="btn btn-warning btn-mini"><i class="icon-edit"></i> Edit</button> </a>
			<a  href="#" id="<?php echo $row['table_id']; ?>" class="delbutton" title="Click To Delete"><button class="btn btn-danger btn-mini"><i class="icon-trash"></i> Delete</button></a></td>
			</tr>
			<?php
				}
			
    } else {
        echo "<tr><td colspan='6'>No entries found.</td></tr>";
    };
 

    // Pagination links
    echo "<div class='pagination'>";
    if ($total_pages > 1) {
        if ($current_page > 1) {
            echo "<a href='test.php?page=" . ($current_page - 1) . "'>Previous</a>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='test.php?page=$i'>$i</a>";
        }
        if ($current_page < $total_pages) {
            echo "<a href='test.php?page=" . ($current_page + 1) . "'>Next</a>";
        }
    }
    echo "</div>";

    $conn->close();
    ?>
			<thead>
		<tr>
        <th width="5%"> NO</th>
			<th width="10%"> Membership ID</th>
			<th width="16%"> Full Name </th>
			<th width="5%"> Gender </th>
			<th width="10%"> Date of Birth</th>
			<th width="10%"> Phone </th>
			<th width="7%"> District </th>
			<th width="15%"> Action </th>
		</tr>
	</thead>
		
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