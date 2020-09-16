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
$sqln = "SELECT * FROM users WHERE number='$number'";
$resulte = mysqli_query($conn,$sqle);
$resultu = mysqli_query($conn,$sqlu);
$resultn = mysqli_query($conn,$sqln);

if(mysqli_num_rows($resulte) > 0)
{
	$erroremail="E-mail alredy exist";

}
elseif(mysqli_num_rows($resultu) > 0)
{
	$erroruser="Username is taken";

}
elseif(mysqli_num_rows($resultn) > 0)
{
	$errornumb="Number is registered";

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
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css"> 
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="resource/css/style.css">
        <link rel="stylesheet" type="text/css" href="resource/css/query.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="resource/css/logincss.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"> </script>
        <title>BRICKY</title>
        <script type="text/javascript">
			$(document).ready(function(){
            $(".mobile-nav").click(function(){
            $(".main-nav").toggle(200);
               });
              });
		</script>
        
    </head>
    <body>
        <nav>
            <div class="row">
                 <img src="resource/img/lg2.JPG" alt="Bricky.com" class="logo">
                 <ul class="main-nav">
                    <li><a  href="index.php">HOME</a></li>
                    <li><a  href="allproducts.php">ALL PRODUCTS</a></li>
                    <li><a  href="order.php">MY ORDER</a></li>
                    <li><a  href="cart.php">CART</a></li>
                    <li><a  href="myaccount.php">MY ACCOUNT</a></li>
                 </ul>
				<a class="mobile-nav js--mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <header class="headersignup">
			<section class="login-form">
				<div class="login-box2">
					<img src="resource/img/lg2.JPG" class="logo2">
					<h3 align="center">Create Account</h3>
					<form name="signup form"  method="post">
                
					<div class="textbox">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Full Name" id="fullname" name="fullname" required>
					</div>
						<div class="textbox">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="User Name" id="username" name="username" required>
					</div>
                    <div style=colour:#f9b101;font-size:2px;>
                    <?php if (isset($erroruser)): ?>
      	            <span style=font-size:10px;><?php echo $erroruser; ?></span>
                     <?php endif ?>
					</div>	
					<div class="textbox">
						<i class="fa fa-phone">></i>
						<input type="number" placeholder="Mobile Number" id="number" name="number" minlenght="10" required>
						<br>	
                    <div id="recaptcha-container" ></div>
						<button type="button" class="loginbtn" onclick="phoneAuth();">send code</button>
					</div>
						<div class="textbox">
							<i class="fa fa-phone"></i>
							<input type="text" id="verificationcode" placeholder="Enter OTP">
							<br>
		                  <button type="button" class="loginbtn"  onclick="codeverify();">verify</button>
						</div>
                    <?php if (isset($errornumb)): ?>
      	            <?php echo $errornumb; ?>
                    <?php endif ?>
					<div class="textbox">
						<i class="fa fa-envelope"></i>
						<input type="email" placeholder="Email Address" id="email" name="email" required>
					</div>
                    <div style=colour:#f9b101;font-size:15px;>
                    <?php if (isset($erroremail)): ?>
      	            <?php echo $erroremail; ?>
                    <?php endif ?>
					</div>	
					<div class="textbox" >
						<i class="fa fa-lock"></i>
						<input type="password" onfocus="msgbox()" placeholder="Password" id="password" name="password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
					</div>
                    <div id="message" class="message">
                        <p>Password must contain upercase,lowercase,number and 8 digit</p>
                    </div>
					<div class="textbox">
						<i class="fa fa-table"></i>
						<input type="date" placeholder="Birthdate" id="birthdte" name="birthdate" required>
					</div>
					<div>
						<i class="fa fa-venus-mars"></i>
						
						<input type="radio" id="male" name="gender" value="m" >
						<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="f">
						<label for="female">Female</label>
					</div>
					
					<br>
					<br>
					<input class="loginbtn" type="submit" value="Sign up" name="submit" >
						</form>
					
    
				</div>
			</section>
			
		</header>	
        <footer class="js==footer">
            <div class="row">
                <div class="col span-1-of-3">
                    <h3>USEFUL LINKS</h3>
                    <ul class="footer-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="allproducts.php">ALL PRODUCTS</a></li>
                        <li><a href="order.php">MY ORDER</a></li>
                        <li><a href="cart.php">CART</a></li>
                        <li><a href="myaccount.php">MY ACCOUNT</a></li>
                        <li><a href="allproducts.php">HIRE SERVICE</a></li>
                      <li><a href="#">POST SERVICE</a></li> 
                    </ul>
                    
                </div>
                <div class="col span-1-of-3">
                    <h3>ABOUT US</h3>
                    <p class="about">Bricky is a online platform which aims to create fair priced,Transparent and User Friendly construction equipment renting ecosystem,It facilate the equipment rental across india with the equipment base spred over 30,000+ equipments. </p>
                    
                </div>
                <div class="col span-1-of-3">
                   <h3>CONTACT US</h3>
                    <ul class="social">
                    <li><a href="#"><i class="fa fa-phone">  +91-8264197211</i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"> Hackerahir@gmail.com</i></a></li>
                    </ul>    
                    <br>
                    <ul class="social2">
                    <li><a href="https://www.facebook.com/HACKERAHIR"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="https://twitter.com/hacker_ahir"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/hacker__ahir/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/piyush-chetariya-21a3a3193/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    

                </div>
                
            </div>

        </footer>
		<script type="text/javascript" >
			$(window).on("scroll",function(){
				if($(window).scrollTop()){
					$('nav').addClass('sticky');
				}
				else{
					$('nav').removeClass('sticky');
				}
			})
        </script>
        <script>
            function msgbox()
            {
                document.getElementById("message").style.display = "block";
            }
        </script>   
        <script  type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-analytics.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-auth.js"></script>
  <script type="application/javascript" src="https://www.gstatic.com/firebasejs/7.17.2/firebase-firestore.js"></script>
	
 
    <script>
   
		const firebaseConfig = {
  apiKey: "AIzaSyBZxq7dAAdMEsG6OrkhmYgXtbBXnEcRudg",
  authDomain: "bricky-266813.firebaseapp.com",
  databaseURL: "https://bricky-266813.firebaseio.com",
  projectId: "bricky-266813",
  storageBucket: "bricky-266813.appspot.com",
  messagingSenderId: "787492591280",
  appId: "1:787492591280:web:3e618e987172dbd2464d75",
  measurementId: "G-XNLHS64K0M"
};
    firebase.initializeApp(firebaseConfig);
  </script>
	<script type="application/javascript" src="NumberAuthentication.js"></script>
    
   
    </body>


</html>


