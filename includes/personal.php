<?php
include('connection.php');
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$date=$_POST['date'];
$bgr=$_POST['bgroup'];
$profession=$_POST['prf'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['cnt'];
$query="insert into personaldata (firstname,middlename,lastname,date,bloodgroup,profession,email,address,contact) values ('$fname','$mname','$lname','$date','$bgr','$profession','$email','$address','$contact')";
$result=mysqli_query($conn,$query);
if (!$result) {
	echo "Error";
}else{
	echo "<script>alert('Registered Sucessfully')</script>";
	echo "<script>window.open('../egovservices.html','_self')</script>";
}
?>