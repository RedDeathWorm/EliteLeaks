<?php
include 'auth/constants.php';

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo sitetitle; ?></title>
		<link rel="stylesheet" href="assets/css/hamburgers.min.css">
		<!-- Check out http://materializecss.com/ for more information and help on Materialize CSS -->
		<link rel="stylesheet" href="assets/css/materialize.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
<body>
	<nav class="nav-main">
		<!--<button class="hamburger hamburger__elastic" type="button"> ( _ = - )
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>-->
		<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large red">
				<i class="material-icons menu">menu</i>
			</a>
			<ul>
				<li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
				<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
				<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
				<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
			</ul>
		</div> 
		<center>
			<div class="logo"><?php echo sitetitle; ?></div>
		</center>
	</nav>


	<div class="container">
		<div class="input-field col s12">
			<!-- <font color="red">Testing the click button......works</font><a href="#">Click me</a><br /> -->
			<textarea cols="50" rows="20" class="materialize-textarea" style="color: #fff;" id="main_textarea" autofocus=""></textarea>
			<label for="main_textarea">Paste Data: </label>
		</div>
	</div>

<script src="assets/js/jquery-2.2.3.min.js"></script>
<script src="assets/js/materialize.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>