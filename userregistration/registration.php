 <!-- ====== (7) registration DBMS php ===== -->
<?php 
	
	session_start();

	/* =============== connecting to DATABASR  ============= */
	$con = mysqli_connect('localhost' , 'root' , '');

	/* =============== Variable Dicleration  ============= */
	mysqli_select_db($con, 'userregistration');
		$fn = $_POST['fname'];
		$ln = $_POST['lname'];
		$date = $_POST['date'];
		$em = $_POST['email'];
		$name = $_POST['user'];
		$pass = $_POST['password'];
		

		/* =============== select data from DB  ============= */
		$s = "select * from usertable where name='$name'";

		$result = mysqli_query($con , $s);

		$num = mysqli_num_rows($result);

		/* =============== user name checking   ============= */
		if($num == 1){
			echo "<script> alert('User Name Already Taken ! TRY AGAIN');window.location='signup.php' </script>";
		}


		/* =============== insert data into database   ============= */
		else{
			$reg = "insert into usertable(fname, lname, date , email, name , password) values ('$fn','$ln','$date','$em','$name' , '$pass')";
			mysqli_query($con , $reg);
			echo "<script> alert('You are Registed Successfully ! Login from HERE ');window.location='login.php' </script>";

		}
		

?>

