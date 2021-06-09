 <!-- ====== (3) php validation ===== -->
<?php 
	
	session_start();

	/* =============== connect to DATABASE  ============= */
	$con = mysqli_connect('localhost' , 'root' , '');

	mysqli_select_db($con, 'userregistration');

	/* =============== variable decleration  ============= */

		$name = $_POST['user'];
		$pass = $_POST['password'];

		$s = "select * from usertable where name='$name' && password= '$pass'";

		$result = mysqli_query($con , $s);

		$num = mysqli_num_rows($result);

	/* =============== condition check and connect to HOME  ============= */

		if($num == 1){
			$_SESSION['username']  = $name;
			header('location:home.php');
		}

	/* =============== if wrong connect to login again  ============= */

		else{

			echo "<script> alert('Wrong user name and password');window.location='login.php' </script>";
		}



 ?>