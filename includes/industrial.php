<?php
include('connection.php');

$iname=$_POST['iname'];
$type=$_POST['type'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$query="insert into industrialdata (name,type,email,address,contact) values ('$iname','$type','$email','$address','$contact')";
$result=mysqli_query($conn,$query);
if(!$result){
	echo "Cannot Register";
}else{
	echo "<script>alert('Registered Successfully')</script>";
	echo "<script>window.open('../egovservices.html','_self')</script>";
}
?>