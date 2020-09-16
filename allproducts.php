<?php
session_start();
   if(!isset($_SESSION['name']))
   {
	  
      header("location:login.php");
   }
else{
	
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
                    <li><a  href="#">ALL PRODUCTS</a></li>
                    <li><a  href="order.php">MY ORDER</a></li>
                    <li><a  href="cart.php">CART</a></li>
                    <li><a  href="myaccount.php">MY ACCOUNT</a></li>
					  <li><a  href="#">WELCOME <?php
					 echo $_SESSION['name'];
					 ?></a></li>
					 
					 <li><a  href="logout.php">LOGOUT</a></li>
                 </ul>
				<a class="mobile-nav js--mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <header>
			<div class="main-head"><p class="main-heading">ALLL PRODUCTS</p></div>
			<section class="body2">
				<div class="container2">
				<div class="box2">
					<div class="content2">
						<a href="equipments.php?id=1"><img src="resource/img/equipments.jpg" class="img-show2" ></a>
						<div><a class="btn2" href="equipments.php?id=1">EQUIPMENTS</a></div>
						
							<p>There are several equipment that is been used in the Construction Industry. These are used for both large and small scale purposes. Various types of Equipment are been used for Building & structural Construction, Road construction, underwater and other marine construction work Power projects etc.</p>
						
					</div>
				</div>
				<div class="box2">
					<div class="content2">
						<a href="equipments.php?id=2"><img src="resource/img/construction_materials_bricks.jpg" class="img-show2"></a>
						
						<div><a class="btn2" href="equipments.php?id=2">MATERIALS</a></div>
							<p >Building material is any material used for construction purpose such as materials for house building. Wood, cement, aggregates, metals, bricks, concrete, clay are the most common type of building material used in construction. The choice of these are based on their cost effectiveness for building projects.</p>
						
					</div>
				</div>
				<div class="box2">
					<div class="content2">
						<a href="equipments.php?id=3"><img src="resource/img/lab.jpg" class="img-show2" ></a>
						
						<div><a class="btn2" href="equipments.php?id=3">LABOUR</a></div>
							<p >A construction worker is a manual laborer employed in the physical construction of the built environment and its infrastructure.The term construction worker is a broad and generic term and most construction workers are primarily described by the level and type of work they perform.</p>
						
					</div>
				</div>
				</div>
			</section>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				<!--<div class="row">
					<h2>ALL PRODUCTS</h2>
				</div>
				<div class="row">
				<div class="col span-1-of-3">
					<div class="catg-box">
						<div><a href="#"><img src="resource/img/equipments.jpg" class="img-show"></a></div>
						<div><a class="btn2" href="#">EQUIPMENTS</a></div>
						<div>
							<p class="info_cat">There are several equipment that is been used in the Construction Industry. These are used for both large and small scale purposes. Various types of Equipment are been used for Building & structural Construction, Road construction, underwater and other marine construction work Power projects etc.There are various operations that are involved in construction projects, Excavation and digging of large quantities of earth,</p>
						</div>
					</div>
				</div>
				<div class="col span-1-of-3">
					<div class="catg-box">
						<div><a href="#"><img src="resource/img/construction_materials_bricks.jpg" class="img-show"></a></div>
						<div><a class="btn2" href="#">MATERIALS</a></div>
						<div>
							<p class="info_cat">Building material is any material used for construction purpose such as materials for house building. Wood, cement, aggregates, metals, bricks, concrete, clay are the most common type of building material used in construction. The choice of these are based on their cost effectiveness for building projects. Apart from naturally occurring materials, many man-made products are in use, some more and some less synthetic.</p>
						</div>
					</div>
				</div>
				<div class="col span-1-of-3">
					<div class="catg-box">
						<div><a href="#"><img src="resource/img/lab.jpg" class="img-show"></a></div>
						<div><a class="btn2" href="#">LABOUR</a></div>
						<div>
							<p class="info_cat">A construction worker is a manual laborer employed in the physical construction of the built environment and its infrastructure.The term construction worker is a broad and generic term and most construction workers are primarily described by the level and type of work they perform. Labourers carry out a wide range of practical tasks to help tradespersons on construction sites.</p>
						</div>
					</div>
				</div>
				</div>-->
				
        </header>
        
        <footer class="js==footer">
            <div class="row">
                <div class="col span-1-of-3">
                    <h3>USEFUL LINKS</h3>
                    <ul class="footer-nav">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="#">ALL PRODUCTS</a></li>
                        <li><a href="order.php">MY ORDER</a></li>
                        <li><a href="cart.php">CART</a></li>
                        <li><a href="myaccount.php">MY ACCOUNT</a></li>
                        <li><a href="allproducts.php">HIRE SERVICE</a></li>
                      <li><a href="postservice.php">POST SERVICE</a></li> 
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
    </body>


</html>


