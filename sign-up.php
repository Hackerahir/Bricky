<?php
error_reporting(0);

$conn = new mysqli('localhost','root','','users');

if(isset($_POST['submit']))
{
$fullname = $_POST['fullname'];
$username=$_POST['username'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];

$sqle = "SELECT * FROM users WHERE email='$email' ";
$sqlu = "SELECT * FROM users WHERE username='$username'";
$resulte = mysqli_query($conn,$sqle);
$resultu = mysqli_query($conn,$sqlu);

if(mysqli_num_rows($resulte) > 0)
{
	$erroremail="EMAIL alredy EXIST";

}
elseif(mysqli_num_rows($resultu) > 0)
{
	$erroruser="Username is taken";

}
else
{
	$stmt = $conn->prepare("insert into users(fullname,username,number,email,password,birthdate,gender)values(?,?,?,?,?,?,?)");
	$stmt->bind_param("ssissss",$fullname,$username,$number,$email,$password,$birthdate,$gender);
	$stmt->execute();
	$stmt->close();
	$conn->close();
	header('location:login.php');

}
}

?>
