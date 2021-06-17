 <!-- ====== php validation ===== -->
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

			echo "<script> alert('Wrong user name and password');window.location='buynow.php' </script>";
		}

		mysqli_close($con);

		 

	
	session_start();

	/* =============== connecting to solditem DB  ============= */
	$conn = mysqli_connect('localhost' , 'root' , '');

	/* =============== Variable Dicleration for process  ============= */
	mysqli_select_db($conn, 'userregistration');
		$lim = $_POST['limit'];
		$visa = $_POST['visa'];
		$crd = $_POST['card'];
		$postl = $_POST['postal'];
		$add = $_POST['address'];
		
		/* === Value passing ====================================*/
		
$regi = "insert into solditem( count, cardType , card , postal, address) values ('$lim','$visa','$crd','$postl', '$add')";

			mysqli_query($conn , $regi);

			echo "<script> alert('You are Registed Successfully ! Login from HERE ');window.location='login.php' </script>";

		
		

?>



