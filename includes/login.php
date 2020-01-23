<?php
	session_start();
	include('connection.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from user_admin";
	$result=mysqli_query($conn,$query);
	while ($row=mysqli_fetch_array($result)) {
		$usrnm=$row['username'];
		$pswd=$row['password'];
		$_SESSION['usrnm']=$usrnm;
		if ($username == $usrnm && $password == $pswd){
			echo "<!DOCTYPE html>
					<html>
					<head>
				<title>Update Events</title>
				<link rel='stylesheet' type='text/css' href='../css/style.css'>
   			 	<link rel='stylesheet' href='../css/vendors/bootstrap.min.css'>
   			 	<style>
   			 		#div1{
   			 			background-color:tomato;
   			 		}
   			 		#div1:hover,#div2:hover,#div3:hover{
   			 			background-color:purple;
   			 		}
   			 		#div2{
   			 			background-color:#8FBC8F;
   			 		}
   			 		#div3{
   			 			background-color:#FFA500;
   			 		}
   			 	</style>
				</head>
				<body>
				<div class='header-container'>
        <div class='container-fluid'>
            <div class='header-left'>
                <div class='header-logo-left'>
                    <img src='../images/logo.png' class='img-fluid' alt='NepalGoverment'>
                </div>
                <div class='header-text-left'>
                    सुनकोशी गाउँपालिका</br>
                    प्रदेश नं ३ 'हामी सबैको शान, समृद्ध सुनकोशी हाम्रो अभियान''
                </div>
            </div>
            <div class='header-right'>
                <div class='header-logo-right'>
                    <img src='../images/nepal.gif' class='img-fluid' alt='NepalFlag(GIF)'>
                </div>
                <div class='header-link-right'>
                    <a href='https://visitnepal2020.com/' target='_blank'>
                        <img src='../images/VisitNepal.png' class='img-fluid' alt='VisitNepal2020'
                            style='width:128px;height:128px;'>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class='navigation'>
        <nav class='navbar navbar-expand-sm bg-warning navbar-primary'>
            <ul class='navbar-nav'>
                <li class='nav-item active'>
                    <a class='nav-link' href='../index.html'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../introduction.html'>Introduction</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../projects.html'>Projects</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../notice.html'>Notices</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../egovservices.html'>eGovServices</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../electedofficials.html'>Elected Officials</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../gallery.html'>Gallery</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../contact.html'>Contact</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='../login.php'>Login</a>
                </li>
            </ul>
        </nav>
    </div>
	<div>
				</div>
				<div class='container'>
					<div class='row'>
						<div id='div1' class='col-lg-4'>
								<a href='../updatepersonaldata.php' style='text-decoration: none;'><h4 style='text-align:center;color:white;'><b>Update Personal Data </b></h4><br>
								<img src='../images/personaldata1.png' height='250px' width='250px'>
								</a>
						</div>
						<div id='div2' class='col-lg-4'>
							<a href='../updateorganizationaldata.php' style='text-decoration:none;'>
							<h4 style='text-align:center;color:white;'><b>Update Organizational Data </b></h4><br>
							<img src='../images/organizationaldata.png' height='250px' width='250px'>
							</a>
						</div>
						<div id='div3' class='col-lg-4'>
						<a href='../updateindustrialdata.php' style='text-decoration:none;'>
							<h4 style='text-align:center;color:white;'><b>Update Industrial Data </b></h4><br>
							<img src='../images/industrialdata.png' height='250px' width='250px'>
						</a>
						</div>
					</div>
				</div>
				<br>
				<div class='footer container-fluid'>
        <div class='footer-left container-fluid'>
            <h6>Quick Links</h6>
            <ul>
                <li><a href='notice.html'>सामाजिक परिचाल </a></li>
                <li><a href='notice.html'>संघ, संस्था, परमार्श सेवा </a></li>
                <li><a href='notice.html'>भकारो सुधार कार्यक्रम</a></li>
            </ul>
        </div>
        <div class='footer-center container-fluid'>
            <h6>eGovServices</h6>
            <ul>
                <li> <a href='egovpersonalregister.html'>Register Personal Data</a> </li>
                <li> <a href='egovorganizationalregister'>Register Organizational Data</a></li>
                <li> <a href='egovindustrialregister.html'>Register Industrial Data</a></li>
            </ul>
        </div>
        <div class='footer-right container-fluid'>
            <h6>Contact</h6>
            <ul>
                <li><a href='contact.html'>Sindupalchowk, Sunkoshi Municipality - 3</a></li>
                <li><a href='contact.html'>Postal Code: 45300</a></li>
                <li><a href='contact.html'>011-224578</a></li>
            </ul>
        </div>
        </div>
    <div class='copyright container-fluid'>
        copyright&copy; 2019 sabin'screation
    </div>
    	<script src='../js/vendors/bootstrap.bundle.min.js'></script>
    	<script src='../js/vendors/jQuery[3.3.1].min.js'></script>
    	<script src='../js/custom.js'></script>
	</body>
	</html>";
		}else{
			echo "<script>alert('Username Or Password is Incorrect !!')</script>";
			echo "<script>window.open('../login.php','_self')</script>";
		}
	}
?>