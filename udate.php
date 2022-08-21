<?php
 
 $con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['name'];
$s ="select * from totalevents ";
$m ="select * from studentparticipation where name='$name'";
$k ="select * from usertable where uname='$name'";
$rt=mysqli_query($con,$m);
$row=mysqli_fetch_row($rt);
$sql = "UPDATE studentparticipation SET totalevents =totalevents+1,won =won+1,ceritified = ceritified+1 WHERE Rollno='$name'";
$query = mysqli_query($con,$sql);
if(!$query)
{
    echo "Query does not work.".mysqli_error($con);die;
}
else
{
    echo "Data successfully updated";
}
 
?>