<?php
session_start();

if(isset($_SESSION['name'])){
	session_destroy();
	$_SESSION['name']=$name;
	echo "<script> location.href='srp5.html' </script>";
}
else{
	echo "<script>location.href='srp5.html'</script>";
}
?>