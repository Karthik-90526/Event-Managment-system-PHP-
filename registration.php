<?php


session_start();
header('location:srp5.html');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$uname=$_POST['user'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$section=$_POST['section'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$uploadfile=$_POST['uploadfile'];
$rollno=$_POST['rollno'];


$s ="select * from usertable where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "username already taken";
}
else{
	$reg="insert into usertable(uname,name,branch,section,email,password,uploadfile,Rollno) values ('$uname','$name','$branch','$section','$email','$password','$uploadfile','$rollno')";
	mysqli_query($con,$reg);
	echo "registration sucessfull";
}
?>