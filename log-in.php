<?php
error_reporting(0);
$conn = new mysqli('localhost','root','','users');

session_start();
if(isset($_POST['submit'])){
	$email = $_POST['email'];
    $password = $_POST['password'];
	
	$query = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	if($num==1){
		
		$_SESSION["user_name"]=$email; 
		header('location:index.php');
	}else{
		 echo "Invalid Credentials";
	}
	
}
?>