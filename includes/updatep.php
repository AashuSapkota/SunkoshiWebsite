<?php
include('connection.php');

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];

$date=$_POST['date'];
$bgroup=$_POST['bgroup'];
$profession=$_POST['profession'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$id=$_POST['id'];

$query="UPDATE personaldata SET firstname='$fname',middlename='$mname',lastname='$lname',date='$date',bloodgroup='$bgroup',profession='$profession',email='$email',address='$address',contact='$contact' WHERE id='$id'";
$result=mysqli_query($conn,$query);
if (!$result) {
	echo "<script>alert('Unable to Update')</script>";
}else{
	echo "<script>alert('Updated')</script>";
	echo "<script>window.open('../updatepersonaldata.php','_self')</script>";
}
?>