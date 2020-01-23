<?php
session_start();
if ($_SESSION['usrnm']==Null) {
    echo "<script>alert('Not Accessible')</script>";
    header("Location:../index.html");
}else{
include('connection.php');
$id=$_GET['id'];

$query="DELETE FROM organizationaldata where id='$id'";
$result=mysqli_query($conn,$query);
if (!$result) {
	echo "Unable to DELETE";
}else{
	echo "<script>alert('Deleted Record Sucessfully')</script>";
	echo "<script>window.open('../updateorganizationaldata.php','_self')</script>";
}
}
?>