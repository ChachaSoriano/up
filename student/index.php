<?php include '../../config.php';?>
<?php
	if(isset($_SESSION['student'])){
		header("Location: grades");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CEAS Access Point | Student Portal</title>
	<link rel="stylesheet" href="themes/mobiletheme.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="js/jquery.mobile.structure-1.4.3.min.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,600,500,300,200,100' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="css/jquery.mobile.flatui.css" />
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.mobile-1.4.3.min.js"></script>
	<script type="text/javascript" src="js/jquery_validate.js"></script>

	<script src="../js/jquery.carouFredSel-5.5.0-packed.js"></script>
	<script src="../js/functions.js"></script>
	<script type="text/javascript" src="../source/scripts/js.js"></script>
	<script type="text/javascript" src="../source/scripts/ui.js"></script>
	<script type="text/javascript" src="functions/script.js"></script>
	
</head>
<body>
<div data-role="page" id="index" data-theme="f" data-position="fixed" style="background-image:url('images/bg1.png'); background-size:cover; background-repeat:no-repeat;">
<div data-role="header" data-theme="b" data-tap-toggle="false" align="center" data-position="fixed" style="background-color:#085dad">
 <img src="images/header1.png" style="margin: auto; display: block;" width="100%" />
</div>
	<div class="page-content" align="center" style="color:#000033;">
	<br />
	<img src="images/student.png" width="50%">
			<div id="login-form">
				<div>
					<div class="login-error" style="color:red;"></div>
				</div>
				<div class="ui-btn ui-icon-user ui-btn-icon-left"><span class="inline"></span><input type="text" class="txt" id="username" maxlength="9" placeholder="Enter your Student Number" data-theme="g">
				</div>
				<div class="ui-btn ui-icon-lock ui-btn-icon-left"><span class="inline"></span><input type="password" class="txt" id="password" placeholder="Enter your Password" data-theme="g">
				</div>
				<button id="login" data-theme="a">Login</button>
				<a href="../index.html" data-role="button" id="index" data-theme="a">Home</a>
		
				</div>
		</div>
	</div>
      </div>
      </div>
</body>
</html>