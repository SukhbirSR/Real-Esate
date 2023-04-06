<?php
include 'connect.php';
if (isset($_POST['delete'])) {
	$uid=$_POST['uid'];
	$sql="delete from registration where uid='$uid' ";
	$query_run=mysqli_query($con,$sql);
	if ($query_run) {
		echo '<script> alert("User Deleted"); </script>';
		header("location:usermanagement.php");
	}
	else{
		echo '<script> alert("User Not Deleted"); </script>';
	}
}
?>