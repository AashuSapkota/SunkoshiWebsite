<?php
session_start();
if ($_SESSION['usrnm']==Null) {
    echo "<script>alert('Not Accessible')</script>";
    header("Location:index.html");
}
?>
<?php
include('includes/connection.php');
$id=$_GET['id'];
$query="select * from personaldata where id='$id'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
	$fname=$row['firstname'];
	$mname=$row['middlename'];
	$lname=$row['lastname'];
	$date=$row['date'];
	$bgroup=$row['bloodgroup'];
	$profession=$row['profession'];
	$email=$row['email'];
	$address=$row['address'];
	$contact=$row['contact'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div class="header-container">
        <div class="container-fluid">
            <div class="header-left">
                <div class="header-logo-left">
                    <img src="./images/logo.png" class="img-fluid" alt="NepalGoverment">
                </div>
                <div class="header-text-left">
                    सुनकोशी गाउँपालिका</br>
                    प्रदेश नं ३ "हामी सबैको शान, समृद्ध सुनकोशी हाम्रो अभियान"
                </div>
            </div>
            <div class="header-right">
                <div class="header-logo-right">
                    <img src="./images/nepal.gif" class="img-fluid" alt="NepalFlag(GIF)">
                </div>
                <div class="header-link-right">
                    <a href="https://visitnepal2020.com/" target="_blank">
                        <img src="./images/VisitNepal.png" class="img-fluid" alt="VisitNepal2020"
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
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="introduction.html">Introduction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects.html">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notice.html">Notices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="egovservices.html">eGovServices</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="electedofficials.html">Elected Officials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </nav>
    </div>

	<div>
		<h2>Update Info</h2>
        <div class="reg-container">
		<form action="includes/updatep.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			Firstname:<input type="text" name="fname" value="<?php echo $fname ?>">
			Middlename:<input type="text" name="mname" value="<?php echo $mname ?>">
			Lastname:<input type="text" name="lname" value="<?php echo $lname ?>"><br>
			Date:<br><input type="date" name="date" value="<?php echo $date ?>">
			BloodGroup:<input type="text" name="bgroup" value="<?php echo $bgroup?>">
			Profession:<input type="text" name="profession" value="<?php echo $profession ?>"><br>
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
                <li><a href="notice.html">सामाजिक परिचाल </a></li>
                <li><a href="notice.html">संघ, संस्था, परमार्श सेवा </a></li>
                <li><a href="notice.html">भकारो सुधार कार्यक्रम</a></li>
            </ul>
        </div>
        <div class="footer-center container-fluid">
            <h6>eGovServices</h6>
            <ul>
                <li> <a href="egovpersonalregister.html">Register Personal Data</a> </li>
                <li> <a href="egovorganizationalregister">Register Organizational Data</a></li>
                <li> <a href="egovindustrialregister.html">Register Industrial Data</a></li>
            </ul>
        </div>
        <div class="footer-right container-fluid">
            <h6>Contact</h6>
            <ul>
                <li><a href="contact.html">Sindupalchowk, Sunkoshi Municipality - 3</a></li>
                <li><a href="contact.html">Postal Code: 45300</a></li>
                <li><a href="contact.html">011-224578</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright container-fluid">
        copyright&copy; 2019 Web Tech Pvt. Ltd.
    </div>
    <script src="/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/js/vendors/jQuery[3.3.1].min.js"></script>
    <script src="/js/custom.js"></script>
</body>
</html>