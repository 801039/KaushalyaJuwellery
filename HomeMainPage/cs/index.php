<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$phone = $_POST['phone'];

	$sql = "INSERT INTO comment (name, email,phone, comment)
			VALUES ('$name', '$email','$phone','$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Requirment added successfully. Our customer serivice representative will conect you shortly.')</script>";
	} else {
		echo "<script>alert('Something went wrong! Please try again.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>


	<link rel="stylesheet" type="text/css" href="style.css">

	<title> customer service </title>
</head>

<body>
	<!-- ********************************Nav Bar******************************************* -->
	<!--menu bar-->
	<div class="menu-btn">
		<div class="menu-btn_burger">

		</div>

		<div class="nav" id="nav"></div>
		<div class="text">
			<ul>
				<p></p>
				<li id="home"><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/KaushalyaHome.php">🏠Home</a></li>
				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/userregistration/login.php">🚶Join Us</a></li>
				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/Bracelet.php">🏢Shop</a></li>
				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/offers/index.php">🎁Offers</a></li>
				<li><a href="/WebProject/KaushalyaJuwellery/HomeMainPage/about_us/about.php" target="_blank">👨‍About Us</a></li>
				<li><a href="#">💬Chat</a></li>
			</ul>
		</div>
	</div>

	<script src="cs.js"></script>







	<div class="cs">
		<h1">Customer Service<h1>
	</div>
	<div class="p">
		<p>We are committed to providing services for your needs.</p>
	</div>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
				</br>
				<div class="input-group">
					<label for="phone">Phone No</label>
					<input type="tel" name="phone" id="phone" placeholder="Enter your Phone Number" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Submit your requirement</label>
				<textarea id="comment" name="comment" placeholder="Enter your requirement" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</button>
			</div>
		</form>

	</div>
</body>

</html>