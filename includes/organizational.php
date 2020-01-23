<?php
$ogname=$_POST['ogname'];
$type=$_POST['type'];
$subtype=$_POST['subtype'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];

include('connection.php');

$query="insert into organizationaldata (orgname,type,subtype,email,address,contact) values ('$ogname','$type','$subtype','$email','$address','$contact')";
$result=mysqli_query($conn,$query);
if (!$result) {
	echo "Unsucessfull";
}else{
	echo "<script>alert('Registered Sucessfully')</script>";
	echo "<script>window.open('../egovservices.html','_self')</script>";
}
?>