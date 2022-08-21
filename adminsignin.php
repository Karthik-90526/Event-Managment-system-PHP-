<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$name=$_POST['email'];
$pass=$_POST['password'];
$psw=md5($pass);
$s ="select * from admintable where name='$name' && password ='$psw'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['name']=$name;
	header('location:mainpage.php');
}
else{
	header('location:adminlogin.html');
}
?>