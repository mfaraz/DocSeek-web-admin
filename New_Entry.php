<?php
$admin=NULL;
if(isset($_POST['admin']))
{
	$admin= $_POST['admin'];
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- META TAGS -->
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Title -->
<title>Doc Seek</title>
<!-- Font CSS Link -->
<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
<!-- Font CSS Link -->
<!-- Start CSS Link -->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link type="text/css" rel="stylesheet" href="assets/css/graha-pink.css">
<link type="text/css" id="main-style" rel="stylesheet" href="#">
<link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/jquery-ui.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/palette_switcher.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="assets/css/toggles.css" type="text/css" media="screen"/>
<!-- End CSS Link -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script>

$(document).ready(function(){

    $('#newentry').click(function (e) {
      e.preventDefault();
      $.post("php/new_entry.php", $("#formnew").serialize(),function(response){
      	$('#anewentry').text(response);
      	$('#reset').click(function (e){
         $('#anewentry').html(null);
      	});
      });
     return false;
    });
    
  })
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53604114-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!--Menu wrapper Start-->
<div id="menu-wrapper">
		<div class="container">
			<div class="menu-container">
				<div class="top-menu navbar">
					<div class="navbar-inner">
						<div class="moblogo visible-phone visible-tablet">
							<a href="#"><img src="assets/img/docseek_logo.png" alt="logo"></a>
						</div>
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</a>
						<ul class="nav nav-collapse collapse">
							<li><a><?php echo $admin;?></a></li>
							<li>
							<div class="home-logo">
								<div>
									<a href="index.php"><img src="assets/img/docseek_logo.png" alt="logo"></a>
								</div>
							</div>
							</li>
							<li><a href="logout.php">log out</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Menu wrapper End-->

<div id="content-wrapper">
	<!--Home content start-->
	<div class="container">
		<div id="single-content">
			<div class="row">
				<div class="span1"></div>
				<div class="span10">
					<div class="heading-area">
						<h2>New Entry</h2>
						<form action="index.php" method="post">
						   <input type='hidden' name='back' value='<?php echo $admin;?>'>
						    <button class="pull-right btn btn-main" style="font-size:18px" type="submit">BACK</button>
						    <br>
						</form>
					</div>
					<div class="single-wrapper clearfix " style="text-align:center">
						<form class="list-form" action="php/new_entry.php" method="post" id="formnew" > 
							<a href="#" id="anewentry" class="span7"style="font-size:18px;text-align:center"></a>
							<br>
                            <input class="span7" type="text" name="empid" placeholder="EMP_ID" required>
                            <input class="span7" type="text" name="cnic_no" placeholder="CNIC_NO" required>
                            <input class="span7" type="text" name="Nomenclature" placeholder="Nomenclature" required>
                            <input class="span7" type="text" name="FullName" placeholder="FullName" required>
                            <input class="span7" type="text" name="Service_status" placeholder="Service_status" required>
                            <input class="span7" type="text" name="FatherName" placeholder="FatherName" required>
                            <input class="span7" type="text" name="Gender" placeholder="Gender" required>
                            <input class="span7" type="text" name="DOB" placeholder="DOB" required>
                            <input class="span7" type="text" name="Domicile" placeholder="Domicile" required>
                            <input class="span7" type="text" name="Cadre" placeholder="Cadre" required>
                            <input class="span7" type="text" name="PlaceofCurrentPosting" placeholder="PlaceofCurrentPosting" required>
                            <input class="span7" type="text" name="DateofCurrentPosting" placeholder="DateofCurrentPosting" required>
                            <input class="span7" type="text" name="Status" placeholder="Status" required>
                            <input class="span7" type="text" name="BPS" placeholder="BPS" required>
                            <input class="span7" type="text" name="Remarks" placeholder="Remarks" required>
                            <input class="span7" type="text" name="mistake" placeholder="mistake" required>
                            <input class="span7" type="text" name="Personal_No" placeholder="Personal_No" required>
                            <input class="span7" type="text" name="FacilityName" placeholder="FacilityName" required>

                            <button type="reset" id="reset" style="width:180px" class="btn btn-main">RESET</button>
							<button type="submit" id="newentry" style="width:180px" class="btn btn-main">New Entry</button>

						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--Home content end-->
</div>

<section>
	<br>
	<br>
	<br><br><br><br><br>
	</section>
<!--Footer   area   start-->
<div class="footer-wrapper clearfix">
	<div class="container">
		<div class="row">
			<div class="span10">
				<div class="footer">
					 &copy; 2014 DocSeekapp.com | All rights reserved.
				</div>
			</div>
		</div>
	</div>
</div>

			
<!-- Start JS Link -->
<script src="assets/js/modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC_aOgBOH5a6C5rWkb9Sb2Q3IpVJD7DUiQ&amp;sensor=false"></script>
<script type="text/javascript" src="assets/js/gmap3.infobox.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.min.js"></script>
<script type="text/javascript" src="assets/js/gmap3.clusterer.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/jquery.cookie.js"></script>
<script type="text/javascript" src="assets/js/switcher.js"></script>
<script defer src="assets/js/jquery.prettyPhoto.js"></script>
<script defer src="assets/js/jquery.flexslider.js"></script>
<script defer src="assets/js/custom.js"></script>
<script defer src="assets/js/toggles.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.panorama.js"></script>
<script type="text/javascript" src="assets/js/url_parser.js"></script>
<script>$('#widget').draggable();</script>
<!-- End JS Link -->

</body>
</html>