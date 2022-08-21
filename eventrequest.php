<?php
$db = mysqli_connect("localhost","root","","userregistration");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>
<head>
 <style>
 .abcd{
	 display:flex;
	 background: rgba( 184, 136, 190, 0.25 );
     box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
     backdrop-filter: blur( 4px );
     -webkit-backdrop-filter: blur( 4px );
     border-radius: 10px;
     border: 1px solid rgba( 255, 255, 255, 0.18 );
     width:100%;
     height:50px;
	
 }
 .efgh{
	 
	 background: rgba( 104, 196, 176, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
width: 100px;	 
margin-left:50px;
margin-top:10px;
height:25px;
 }
 .efghii{
background: rgba( 57, 27, 82, 0.5 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 5.5px );
-webkit-backdrop-filter: blur( 5.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );	 
width: 200px;	 
margin-left:70px;
margin-top:10px;
height:25px;
text-align:center;
color:white;
 }
 
 .efghi{
	 
	 background: rgba( 104, 196, 176, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
width: 100px;	 
margin-left:70px;
margin-top:10px;
height:25px;
text-align:center;
color:white;
 }
 
 </style>
</head>
<body>
<h2>Event Details</h2>

<?php
$records = mysqli_query($db,"select * from images"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <div class="abcd">
    <div class="efgh"><?php echo $data['Rollno']; ?></div>
	<div class="efghii" width="200px"><?php echo $data['eventname']; ?></div>
	<div class="efghi"><?php echo $data['branch']; ?></div>
	<div class="efghi"><?php echo $data['section']; ?></div>
	<div class="efghi"><button>Approve</button></div>
	<div class="efghi"><button>Reject</button></div>
  </div>
<br>  <br>
<?php
}
?>
<?php mysqli_close($db); // Close connection ?>
</body>
</html>