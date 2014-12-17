<?php include '../../config.php';
	if(isset($_SESSION['faculty'])){
		header('Location: class');
	}
?>
<!DOCTYPE HTML>
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

	<script type="text/javascript" src="../source/scripts/js.js"></script>
	<script type="text/javascript" src="../source/scripts/ui.js"></script>
	<script>
		$(function(){
			$('div.overlay').hide();
			$('div.loading').hide().ajaxStart(function(){ $(this).show();}).ajaxStop(function(){ $(this).hide();});
		
			$('#login').click(function(){
				if($('#list-instructors').val()=="Select Your Account"){
					alert('Please select your account.');
				}else if($('#password').val()==""){
					alert('Please enter your password.');
				}else{
					$.ajax({
						url:"functions/login.php?username="+$('#list-instructors').val()+"&password="+$('#password').val(),
						success:function(i){
							if(i==1){
								window.location='class';
							//}else if(i==2) {
								//alert('Account is not yet verified. Please check your e-mail to confirm your account.');
							}else if(i==3) {
								alert('Incorrect password.');
							}
						}
					});
				}
			});
			
			function validation(a){
				$('#register-error').css('color','red');
				$('#register-error').html(a);
			}
			
			$('#register').click(function(){
				$.ajax({
					url:"functions/checkemail.php?email="+$('#code').val(),
					success:function(i){
						if(i==0){
							validation('E-mail already registered.');
						}else{
							if($('#code').val()==""){
								validation('Enter your E-mail');
							}else if($('#lastname').val()==""){
								validation('Enter your Last Name');
							}else if($('#firstname').val()==""){
								validation('Enter your First Name');
							}else if($('#position').val()==""){
								validation('Enter your Position');
							}else if($('#password2').val()==""){
								validation('Enter your Password');
							}else if($('#password3').val()==""){
								validation('Re-enter your Password');
							}else if($('#password2').val()!=$('#password3').val()){
								validation('Password does not match');
							}else {
								$.ajax({
									url:"functions/register.php",
									data:{
										code:$('#code').val(),
										lastname:$('#lastname').val(),
										firstname:$('#firstname').val(),
										middlename:$('#middlename').val(),
										position:$('#position').val(),
										password:$('#password2').val()
									},
									success:function(){
										alert("Registration was successful.\nPlease wait for the approval of your account.");
										$('input').val('');
										$('#register-error').css('color','green');
										$('#register-error').html('Fill-up all fields.');
									}
								});
							}	
						}
					}
				});
			
			});
		});
	</script>
</head>
<body>
<div data-role="page" id="index" data-theme="f" data-position="fixed" style="background-image:url('images/bg1.png'); background-size:cover; background-repeat:no-repeat;">
<div data-role="header" data-theme="b" data-tap-toggle="false" align="center" data-position="fixed" style="background-color:#085dad">
 <img src="images/header1.png" style="margin: auto; display: block;" width="100%" />
</div>
		<div class="page-content" align="center" style="color:#fff;">
		<br />
		<img src="images/faculty.png" width="50%">
			<div id="login-form" >
					<div style="font-size:15px; color:#000033"></div>
					<div class="ui-btn ui-icon-user ui-btn-icon-left"><select id="list-instructors" data-theme="c">
							<option>Select Your Account</option>
							<?php
							function list_instructors(){
								$q=mysql_query("select a.username,b.lastname,b.firstname,b.middlename,a.status from raccounts as a inner join rinstructors as b on a.username=b.instr where a.status='1'");
								while($r=mysql_fetch_array($q)){
									echo '
									<option value="'.$r[0].'">'.strtoupper($r[1].', '.$r[2].' '.$r[3]).'</option>
									';
								}
							}
							list_instructors();
							?>
						</select>
					</div>
					<div class="ui-btn ui-icon-lock ui-btn-icon-left" style="font-size:15px; color:#000033"><span class="inline"></span><input type="password" class="txt" id="password" placeholder="Enter your Password" style="font-size:16px;" data-theme="g"></div>
					<button id="login" data-theme="a">Login</button>
					<a href="../index.html" data-role="button" id="index" data-theme="a">Home</a>

			</div>
		</div>
		</div>
</body>
</html>