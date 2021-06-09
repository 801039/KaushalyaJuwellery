 <!-- ====== (1) php login form ===== -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>User Login & Registration </title>
		<!-- ======================== Style Sheet decoration add ================================== -->

	<link rel="stylesheet" type="text/css" href="logstyle.css">

</head>

<body>
	<!-- ============== Login form strcucture creation =====================  -->

	<div class="regform"><h1>Login</h1></div> 	<!-- Login word decoration from regform class -->

	<div class="main"> <!-- form decoration by main class -->


	<!-- ============== Validation form link with this to check password & username =============== -->

		<form action="validation.php" method="post">
			<div class="items">
			<label class="firstlabel"><h2>User Name</h2></label> <!-- =============== user name for login ========== -->
			<input type="text" name="user" class="firstname" required>
			
			<label class="firstlabel"><h2>Password</h2></label> <!-- ============= password for login =========== -->
			<input type="password" name="password" class="firstname" required>
			
			<button type="submit">Log in</button>
			</div>
		</form>

		<!-- ============================ SIGN UP link for sign up page ===================  -->

		<div class="info"><p><h3>By continuing, you agree to Kaushalya Jeweller's Conditions of Use and Privacy Notice.</h3> <a id="link" href="signup.php"> create account here SIGN UP</a></p></div>

		

	</div>

</body>

</html>