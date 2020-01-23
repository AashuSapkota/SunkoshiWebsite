<?php
	include('connection.php');
	$orgname=$_POST['orgname'];
	$type=$_POST['type'];
	$subtype=$_POST['subtype'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];

	$id=$_POST['id'];

	$query="UPDATE organizationaldata SET orgname='$orgname',type='$type',subtype='$subtype',email='$email',address='$address',contact='$contact' where id='$id'";

	$result=mysqli_query($conn,$query);
		if (!$result) {
			echo "<script>alert('Unable to Update')</script>";
		}else{
			echo "<script>alert('Updated')</script>";
			echo "<script>window.open('../updateorganizationaldata.php','_self')</script>";
		}

?>