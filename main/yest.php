<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printer Icon</title>
    <style>
        body {
            background-color: #ddd; /* Grey background color */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
          }

        /* Add your custom styles here */
        .printer-icon {
            position: fixed; /* Keeps the icon in a fixed position on the screen */
            bottom: 20px; /* Adjust vertical position as needed */
            right: 20px; /* Adjust horizontal position as needed */
            font-size: 24px; /* Adjust icon size as needed */
            color: #000; /* Icon color */
            background-color: #fff; /* Icon background color */
            padding: 10px; /* Add padding to the icon */
            border-radius: 50%; /* Create a circular shape for the icon container */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
            z-index: 9999; /* Set a high z-index to ensure it's above other content */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        /* Use CSS media query for print to hide the icon */
        @media print {
            .printer-icon {
                display: none;
            }
        }

      
    </style>
</head>
<body>
    <div class="printer-icon" onclick="window.print()">
        <i class="fas fa-print"></i> <!-- Font Awesome printer icon -->
    </div>

    <!-- Include Font Awesome for the icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
<body>	
<div style="margin-top: -19px; margin-bottom: 21px;">
			<?php 
			include('../connect.php');
				$result = $db->prepare("SELECT * FROM member ORDER BY table_id ASC");
				$result->execute();
				$rowcount = $result->rowcount();
			?>
			
		
				<div style="text-align:center;">
                <img src="IMAGES/pcealog.png " alt="Avatar" class="avatar"  width="100px" height="200px"><br>
               PCEA MUKINYI CHURCH  <font color="green" style="font:bold 22px 'Aleo';"></font> <br>
			    Total Number of Members:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
			</div>
			
			
</div>


<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="10%"> Membership ID</th>
			<th width="17%"> Full Name </th>
			<th width="5%"> Gender </th>
			<th width="8%"> Date of Birth</th>
			<th width="8%"> Phone </th>
			<th width="8%"> District </th>
        </tr>
	</thead>
	<tbody>
		
			<?php
			
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM member ORDER BY first_name ASC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
				
			?>
			<td align="center"><a href="viewstudent.php?id=<?php echo $row['table_id']; ?>" title="View Member"><?php echo $row['membership_id'] ?></a></td>
			<td><?php echo $row['first_name']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['last_name']; ?></td>
			<td><?php echo $row['gender']; ?></td>
			<td><?php echo $row['DOB']; ?></td>
			<td><?php echo $row['phone_number']; ?></td>
            <td> <?php echo $row['district_name']; ?></td>
			</tr>
			<?php
				}
			?>
			<thead>
		<tr>
			<th width="10%"> Membership ID</th>
			<th width="17%"> Full Name </th>
			<th width="5%"> Gender </th>
			<th width="8%"> Date of Birth</th>
			<th width="8%"> Phone </th>
			<th width="8%"> District </th>
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