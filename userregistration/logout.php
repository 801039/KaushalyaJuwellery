<!-- ======================== (5) php log out algo ================================== -->
<?php 
session_start();
session_destroy();

header('location:login.php');

 ?>