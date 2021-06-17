 <!-- ======  registration DBMS php ===== -->
<?php 
	
	session_start();

	/* =============== connecting to DATABASR  ============= */
	$conn = mysqli_connect('localhost' , 'root' , '');

	/* =============== Variable Dicleration  ============= */
	mysqli_select_db($conn, 'userregistration');
		$lim = $_POST['limit'];
		$visa = $_POST['visa'];
		$crd = $_POST['card'];
		$postl = $_POST['postal'];
		$add = $_POST['address'];
		
		
		
$regi = "insert into solditem( count, cardType , card , postal, address) values ('$lim','$visa','$crd','$postl', '$add')";

			mysqli_query($conn , $regi);

			echo "<script> alert('You are Registed Successfully ! Login from HERE ');window.location='login.php' </script>";

		
		

?>

