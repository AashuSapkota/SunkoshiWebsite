<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Industrial Data</title>
    <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <style>
    	td{
    		border: 1px solid black;
    	}
        table{
            margin-left: 25%;
            margin-right: 25%;
        }
    </style>
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
        <hr>
        <marquee><h2>Industrial Data</h2></marquee>
        <hr>
    </div>
    <table style="border: 2px solid #FFBF00">
    	<tr>
    		<td><b>SN</b></td>
    		<td><b>Industry Name</b></td>
    		<td><b>Type</b></td>
    		<td><b>Email</b></td>
    		<td><b>Address</b></td>
    		<td><b>Contact</b></td>
    	</tr>
    <?php
    	include('includes/connection.php');
    	$count=1;
    	$query="select * from industrialdata";
    	$result=mysqli_query($conn,$query);
    	while($row=mysqli_fetch_array($result)){
    	echo "<tr><td>".$count."</td><td>".$row['name']."</td><td>".$row['type']."</td><td>".$row['email']."</td><td>".$row['address']."</td><td>".$row['contact']."</td></tr>";
    	$count++;
    }
    ?>
</table>
<br>
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