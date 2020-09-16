<?php
error_reporting(0);
if(isset($_POST['submit'])){
	header('location:index.php');
}

$fullname = $_POST['fullname'];
$number = $_POST['number'];
$email = $_POST['email'];
$labtype = $_POST['labtype'];
$labname = $_POST['labname'];
$no = $_POST['no'];

$conn = new mysqli('localhost','root','','labour');
if($conn->connect-error){
	die('connection failed :'.$conn->connect-error);
}else{
	$stmt = $conn->prepare("insert into labour(fullname,number,email,labtype,labname,no)values(?,?,?,?,?,?)");
	$stmt->bind_param("sisssi",$fullname,$number,$email,$labtype,$labname,$no);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
















