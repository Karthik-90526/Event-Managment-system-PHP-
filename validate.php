<?php


session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['user'];
$pass=$_POST['password'];
$psw=md5($pass);
$s ="select * from usertable where uname='$name' && password ='$psw'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['name']=$name;
	header('location:home.php');
}
else{
	header('location:srp5.html');
}


?>