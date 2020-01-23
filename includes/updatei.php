<?php
	include('connection.php');
	$name=$_POST['name'];
	$type=$_POST['type'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];

	$id=$_POST['id'];

	$query="UPDATE industrialdata SET name='$name',type='$type',email='$email',address='$address',contact='$contact' where id='$id'";

	$result=mysqli_query($conn,$query);
		if (!$result) {
			echo "<script>alert('Unable to Update')</script>";
		}else{
			echo "<script>alert('Updated')</script>";
			echo "<script>window.open('../updateindustrialdata.php','_self')</script>";
		}
?>