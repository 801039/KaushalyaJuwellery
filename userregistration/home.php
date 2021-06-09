 <!-- ====== (4) php sample home  ===== -->
<?php 

session_start();
if(!isset($_SESSION['username'])) {
	header('location:login.php');
}

 ?>
<!-- ======================== Sample home page ================================== -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title>HOME PAGE</title>
 </head>
 <body>

 	<!-- ======================== log out link ================================== -->
 	<a href="logout.php">logout</a>

 	<!-- ======================== This welcome to User ================================== -->
 	<h1>WELCOME <?php echo $_SESSION['username']; ?> </h1>



 </body>
 </html>