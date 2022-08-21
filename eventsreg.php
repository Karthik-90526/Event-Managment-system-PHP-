<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$section=$_POST['section'];
$eventname=$_POST['eventname'];
$description=$_POST['description'];
$filename = $_FILES['uploadfile']['name'];
$tmpname = $_FILES['uploadfile']['tmp_name'];
$folder ='uploads/';
move_Uploaded_file($tmpname,$folder.$filename);
$s ="select * from images where Rollno='$rollno'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "username already taken";
}
else{
	
	$reg="insert into images(Rollno,name,branch,section,eventname,eventdescription,imagepath) values ('$rollno','$name','$branch','$section','$eventname','$description','$filename')";
	mysqli_query($con,$reg);
	echo "registration sucessfull";
}

?>

