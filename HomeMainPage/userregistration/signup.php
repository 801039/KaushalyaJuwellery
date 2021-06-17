 <!-- ====== (6) sign up php ===== -->
 <!DOCTYPE html>
 <html lang="en">

 <head>

 	<title>Sign Up</title>

 	<!-- ====== signup style connct ===== -->
 	<link rel="stylesheet" type="text/css" href="signupstyle.css">

 </head>

 <body>
 	<!-- ***********************Nav bar***************************** -->
 	<div class="menu-btn">
 		<div class="menu-btn_burger">

 		</div>

 		<div class="nav" id="nav"></div>
 		<div class="text">
 			<ul>
 				<p></p>
 				<li id="home"><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/KaushalyaHome.php">🏠Home</a></li>
 				<li><a href="#">🚶Join Us</a></li>
 				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/Bracelet.php">🏢Shop</a></li>
 				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/offers/index.php">🎁Offers</a></li>
 				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/about_us/about.php" target="_blank">👨‍About Us</a></li>
 				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/cs/index.php">💬Chat</a></li>
 			</ul>
 		</div>
 	</div>
 	<!--class nav over here-->


 	<!-- ======================== sign up FORM ================================== -->
 	<div class="regform">
 		<h1>SIGN UP</h1>
 	</div>
 	<div class="main">
 		<form action="registration.php" method="post">
 			<div class="items">
 				<h1 class="firstlabel">First Name</h1> <!-- ====== first name label ===== -->
 				<input type="text" name="fname" class="firstname" required><!-- ====== first name input ===== -->
 				<br><br>

 				<h1 class="firstlabel">Last Name</h1><!-- ====== last name label ===== -->
 				<input type="text" name="lname" class="firstname" required><!-- ====== last name input ===== -->
 				<br><br>

 				<h1 class="firstlabel">Date of Birth</h1><!-- ====== Birth Dy label ===== -->
 				<input type="date" name="date" class="firstname" required><!-- ====== birdth day input ===== -->
 				<br><br>

 				<h1 class="firstlabel">E mail</h1><!-- ====== email label ===== -->
 				<input type="email" name="email" class="firstname" required><!-- ====== email input ===== -->
 				<br><br>

 				<h1 class="firstlabel">User Name</h1><!-- ====== user  name label ===== -->
 				<input type="text" name="user" class="firstname" required><!-- ====== username input ===== -->
 				</br><br>

 				<h1 class="firstlabel">Password</h1><!-- ====== password label ===== -->
 				<input type="password" name="password" class="firstname" required> <!-- ======password input ===== -->
 				<br>

 				<button type="submit">Register</button> <!-- ====== register  ===== -->

 			</div>
 		</form>

 		<!-- ====== link to login page  ===== -->
 		<p class="info">Already have a ACCOUNT ?<a id="link" href="login.php"> Log in</a></p>

 	</div>

 	<script>
 		//Hamburger menu
 		const menuBtn = document.querySelector('.menu-btn');
 		let menuOpen = false;
 		menuBtn.addEventListener('click', () => {
 			if (!menuOpen) {
 				menuBtn.classList.add('open');
 				menuOpen = true;
 			} else {
 				menuBtn.classList.remove('open');
 				menuOpen = false;
 			}
 		})
 	</script>

 </body>

 </html>