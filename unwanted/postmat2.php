<?php
error_reporting(0);
if(isset($_POST['submit'])){
	header('location:index.php');
}

$fullname = $_POST['fullname'];
$number = $_POST['number'];
$email = $_POST['email'];
$mattype = $_POST['mattype'];
$matname = $_POST['matname'];
$year = $_POST['year'];

$conn = new mysqli('localhost','root','','materials');
if($conn->connect-error){
	die('connection failed :'.$conn->connect-error);
}else{
	$stmt = $conn->prepare("insert into materials(fullname,number,email,mattype,matname,year)values(?,?,?,?,?,?)");
	$stmt->bind_param("sisssi",$fullname,$number,$email,$mattype,$matname,$year);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
















