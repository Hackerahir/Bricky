<?php
session_start();
   if(!isset($_SESSION['name']))
   {
      header("location:login.php");
   }
else{
	
}
?>
<?php
    
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
        <script src="vendors/js/jquery.waypoints.min.js"> </script>
		<script src="vendors/js/jquery.min.js"> </script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
        <title>BRICKY</title>
						<script>
				$(document).ready(function(){
				  $('.dropdown-submenu a.test').on("click", function(e){
					$(this).next('ul').toggle();
					e.stopPropagation();
					e.preventDefault();
				  });
				});
				</script>
        <script type="text/javascript">
			$(document).ready(function(){
            $(".mobile-nav").click(function(){
            $(".main-nav").toggle(200);
               });
              });
		</script>
		
		
		<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select category first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select service first</option>');
            $('#city').html('<option value="">Select category first</option>'); 
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select category first</option>'); 
        }
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
					 <li><a  href="#">WELCOME <?php
					 echo $_SESSION['name'];
					 ?></a></li>
					 
					 <li><a  href="logout.php">LOGOUT</a></li>
                 </ul>
				<a class="mobile-nav js--mobile-nav"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <header>
			<section class="login-form">
				<div class="login-box2">
					
					<h3 align="center">REGISTER  SERVICE</h3>
					<form name="eqptreg form" action="postservice.php" method="post">
					<div class="textbox">
						<i class="fa fa-user"></i>
						<input type="text" placeholder="Full Name" name="fullname" id="fullname" name="fullname" required>
					</div>
					<div class="textbox">
						<i class="fa fa-phone">></i>
						<input type="number" placeholder="Mobile Number" id="number" name="number" minlength="10" maxlength="11">
					</div>
					<div class="textbox">
						<i class="fa fa-envelope"></i>
						<input type="email" placeholder="Email Address" id="email" name="email" required>
					</div>
						<!--<select id="eqpttype" name="eqpttype"  placeholder="EQ">
							<option selected disabled>Equipment Type</option>
							<option value="EarthMover">Earth Mover</option>
							<option value="Transport">Transport</option>
							<option value="MaterialHandling">Material Handling</option>
							<option value="Concreting">Concreting</option>
							<option value="Generator">Generator</option>
							<option value="Drilling">Drilling</option>
							<option value="RoadConstruction">Road Construction</option>
							<option value="Other">Other</option>
						</select>-->
						<div class="textbox">
						
						
						
							<?php
    //Include database configuration file
    $db = new mysqli("localhost","root","","list");
    
    //Get all country data
    $query = $db->query("SELECT * FROM countries ORDER BY country_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<i class="fa fa-list"></i>						
    <select name="country" id="country" >
        <option value="">Select Service Type</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
    </select>
						</div>						
    <div class="textbox">
	<i class="fa fa-list"></i>	
    <select name="state" id="state">
		
        <option value="">Select service first</option>
    </select></div>
        
    
		<div class="textbox">
			<i class="fa fa-list"></i>
    <select name="city" id="city">
		
        <option value="">Select category first</option>
    </select>
	</div>	
					
					<div class="textbox">
						<i class="fa fa-angle-double-right"></i>
						<input type="textbox" placeholder="Equipmment Name" id="eqptname" name="eqptname" required>
					</div>
					<div>
						<i class="fa fa-calendar"></i>
						<input type="number" placeholder="Make Year" id="year" name="year" min="1990" max="2020" required>
					</div>
					<br>
					<br>
					<input class="loginbtn" type="submit" value="Register" name="submit">
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
       
    </body>


</html>


