<?php
session_start();
if ($_SESSION['usrnm']==Null) {
    echo "<script>alert('Not Accessible')</script>";
    header("Location:../index.html");
}
?>
<?php
include('connection.php');
$id=$_GET['id'];
$query="select * from organizationaldata where id='$id'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
	$orgname=$row['orgname'];
	$type=$row['type'];
	$subtype=$row['subtype'];
	$email=$row['email'];
	$address=$row['address'];
	$contact=$row['contact'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/vendors/bootstrap.min.css">
</head>
<body>
	<div class="header-container">
        <div class="container-fluid">
            <div class="header-left">
                <div class="header-logo-left">
                    <img src="../images/logo.png" class="img-fluid" alt="NepalGoverment">
                </div>
                <div class="header-text-left">
                    सुनकोशी गाउँपालिका</br>
                    प्रदेश नं ३ "हामी सबैको शान, समृद्ध सुनकोशी हाम्रो अभियान"
                </div>
            </div>
            <div class="header-right">
                <div class="header-logo-right">
                    <img src="../images/nepal.gif" class="img-fluid" alt="NepalFlag(GIF)">
                </div>
                <div class="header-link-right">
                    <a href="https://visitnepal2020.com/" target="_blank">
                        <img src="../images/VisitNepal.png" class="img-fluid" alt="VisitNepal2020"
                            style="width:128px;height:128px;">
                    </a>
                </div>
            </div>
        </div>

    </div>

    </div>
    <div class="navigation">
        <nav class="navbar navbar-expand-sm bg-warning navbar-primary">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../introduction.html">Introduction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#javascript">Ward Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../projects.html">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../notice.html">Notices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../egovservices.html">eGovServices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../electedofficials.html">Elected Officials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login.php">Login</a>
                </li>
            </ul>
        </nav>
    </div>
	<div>
		<h2>Update Info</h2>
		<div class="reg-container">
		<form action="updateo.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			Organizationname:<input type="text" name="orgname" value="<?php echo $orgname ?>"><br>
			Type:<br><input type="text" name="type" value="<?php echo $type ?>">
			SubType:<input type="text" name="subtype" value="<?php echo $subtype ?>"><br>
			ContactInformation:<input type="text" name="email" value="<?php echo $email ?>">
			<input type="text" name="address" value="<?php echo $address ?>">
			<input type="tel" name="contact" value="<?php echo $contact?>"><br>
			<button class="register-btn" type="submit">Update</button>
		</form>
	</div>
	</div>
<div class="footer container-fluid">
        <div class="footer-left container-fluid">
            <h6>Quick Links</h6>
            <ul>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
            </ul>
        </div>
        <div class="footer-center container-fluid">
            <h6>eGovServices</h6>
            <ul>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
            </ul>
        </div>
        <div class="footer-right container-fluid">
            <h6>Contact</h6>
            <ul>
                <li>Lorem</li>
                <li>Lorem</li>
                <li>Lorem</li>
            </ul>
        </div>
    </div>
    <div class="copyright container-fluid">
        copyright&copy; 2019 sabin'screation
    </div>
    <script src="../js/vendors/bootstrap.bundle.min.js"></script>
    <script src="../js/vendors/jQuery[3.3.1].min.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>