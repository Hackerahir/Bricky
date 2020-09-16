<?php
error_reporting(0);
if(isset($_POST['submit'])){
	header('location:index.php');
}

$fullname = $_POST['fullname'];
$number = $_POST['number'];
$email = $_POST['email'];
$eqpttype = $_POST['eqpttype'];
$eqptname = $_POST['eqptname'];
$year = $_POST['year'];

$conn = new mysqli('localhost','root','','equipments');
if($conn->connect-error){
	die('connection failed :'.$conn->connect-error);
}else{
	$stmt = $conn->prepare("insert into equipments(fullname,number,email,eqpttype,eqptname,year)values(?,?,?,?,?,?)");
	$stmt->bind_param("sisssi",$fullname,$number,$email,$eqpttype,$eqptname,$year);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
















