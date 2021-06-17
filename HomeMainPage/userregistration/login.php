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


 	<!-- ============== Login form strcucture creation =====================  -->

 	<div class="regform">
 		<h1>Login</h1>
 	</div> <!-- Login word decoration from regform class -->

 	<div class="main">
 		<!-- form decoration by main class -->


 		<!-- ============== Validation form link with this to check password & username =============== -->

 		<form action="validation.php" method="post">
 			<div class="items">
 				<label class="firstlabel">
 					<h2>User Name</h2>
 				</label> <!-- =============== user name for login ========== -->
 				<input type="text" name="user" class="firstname" required>

 				<label class="firstlabel">
 					<h2>Password</h2>
 				</label> <!-- ============= password for login =========== -->
 				<input type="password" name="password" class="firstname" required>

 				<button type="submit">Log in</button>
 			</div>
 		</form>

 		<!-- ============================ SIGN UP link for sign up page ===================  -->

 		<div class="info">
 			<p>
 			<h3>By continuing, you agree to Kaushalya Jeweller's Conditions of Use and Privacy Notice.</h3> <a id="link" href="signup.php"> create account here SIGN UP</a></p>
 		</div>



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