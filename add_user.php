<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$sql = "DELETE FROM usertable WHERE uname='" . $_POST['user'] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
