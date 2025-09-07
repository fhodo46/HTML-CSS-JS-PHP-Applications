<?php
session_start();
if(isset($_SESSION['loggedinaccount'])){
	header('location: profile.php');
	exit;
}
?>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
	
	<div>
		<div class="signupcontainer">
			<div class="signupshape">
				<form class="signupform" action="register-process.php" method="post">
					
					<span class="signupformtitle">
						Signup
					</span>
					
					<div class="inputwrap-email">
						<input class="signupinputtext" type="text" name="name" placeholder="Name">
						
					</div>
					
					<div class="inputwrap-password">
						<input class="signupinputtext" type="text" name="surname" placeholder="Surname"> 
						
					</div>
					<div class="inputwrap-password">
						<input class="signupinputtext" type="number" name="age" placeholder="Age"> 
					</div>
					<div class="inputwrap-password">
						<input class="signupinputtext" type="password" name="password" placeholder="Password"> 
					</div>

					<div class="inputwrap-password">
						<input class="signupinputtext" type="email" name="email" placeholder="Email"> 
					</div>

					
					
						<button type="submit" class="signupformbutton">
							Signup
						</button>
					






					<p class="noaccountparagraph">
						Already have an account? <a href="index.php" class="signuplink"> Login </a> or
					</p>
					<br>		
					<a href="https://web.facebook.com/?_rdc=1&_rdr#" class="facebookbutton">
						<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Facebook_circle_pictogram.svg/2048px-Facebook_circle_pictogram.svg.png" alt="FACEBOOK" width="30" height="30">
						Login with Facebook
					</a>
					<a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Dgoogle%2Blogin%26rlz%3D1C1KNTJ_en%26oq%3Dgoogle%2Blogi%26pf%3Dcs%26sourceid%3Dchrome%26ie%3DUTF-8&ec=GAZAAQ&hl=en&ifkv=AdBytiN3Hcq9YTOP1u9STnII6yKI5qgL-Kold74QPIPn8NIRWXK5mjzfclim0nTkr6znoC4rufu3KQ&passive=true&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-754734413%3A1748657174320673" class="googlebutton">
						<img src="icon-google.png" alt="GOOGLE">
						Login with Google
					</a>
				</form>
			</div>
		</div>
	</div>
</body> 
</html>
