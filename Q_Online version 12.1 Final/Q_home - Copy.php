<?php session_start()?>
<!doctype html>
<html lang="en">
  <head>
    <title>Q_Online</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 <!--styles for the footer-->
      <style>
      .full {
    width: 100%;	
}
.gap {
	height: 30px;
	width: 100%;
	clear: both;
	display: block;
}
.footer {
	background: #EDEFF1;
	height: auto;
	
	position:relative;
	width: 100%;
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #DDDDDD;
}
.footer p {
	margin: 0;
}
.footer img {
	max-width: 100%;
}
.footer h3 {
	border-bottom: 1px solid #BAC1C8;
	color: #54697E;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px 0 10px;
	text-transform: uppercase;
}
.footer ul {
	font-size: 13px;
	list-style-type: none;
	margin-left: 0;
	padding-left: 0;
	margin-top: 15px;
	color: #7F8C8D;
}
.footer ul li a {
	padding: 0 0 5px 0;
	display: block;
}
.footer a {
	color: #78828D
}
.supportLi h4 {
	font-size: 20px;
	font-weight: lighter;
	line-height: normal;
	margin-bottom: 0 !important;
	padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
	background: #FFFFFF;
	display: inline-block;
	float: left;
	height: 30px;
	clear: both;
	width: 100%;
}
.newsletter-box .btn {
	border: medium none;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-o-border-radius: 3px;
	-ms-border-radius: 3px;
	border-radius: 3px;
	display: inline-block;
	height: 40px;
	padding: 0;
	width: 100%;
	color: #fff;
}
.newsletter-box {
	overflow: hidden;
}
.bg-gray {
	background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
	box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
	background: none repeat scroll 0 0 #B5B5B5;
	border: 2px solid #B5B5B5;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
	border-radius: 50%;
	float: left;
	height: 36px;
	line-height: 36px;
	margin: 0 8px 0 0;
	padding: 0;
	text-align: center;
	width: 36px;
	transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-webkit-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
}
.social li:hover {
	transform: scale(1.15) rotate(360deg);
	-webkit-transform: scale(1.1) rotate(360deg);
	-moz-transform: scale(1.1) rotate(360deg);
	-ms-transform: scale(1.1) rotate(360deg);
	-o-transform: scale(1.1) rotate(360deg);
}
.social li a {
	color: #EDEFF1;
}
.social li:hover {
	border: 2px solid #2c3e50;
	background: #2c3e50;
}
.social li a i {
	font-size: 16px;
	margin: 0 0 0 5px;
	color: #EDEFF1 !important;
}
.footer-bottom {
	background: #E3E3E3;
	border-top: 1px solid #DDDDDD;
	padding-top: 10px;
	padding-bottom: 10px;
    
}
.footer-bottom p.pull-left {
	padding-top: 6px;
}
.payments {
	font-size: 1.5em;	
}
      
      </style>
    
    </head>
  <body>
      
    <!--starting navbar-->
                <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
                      <a class="navbar-brand" href="#">Q_Online</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="Q_home%20-%20Copy.php">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="Q_products%20-%20Copy.php">Products</a>
                            <a class="nav-item nav-link" href="Q_user_signup%20-%20Copy.php">Sign Up</a>
                            <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Contact Us</a>
                            <!--user sign up model starting-->
                            <?php
                              $strgtmlin ='<a class="nav-link "href="#"  id="userlogbutton" style="position: absolute;right:275px;"  data-toggle="modal" data-target="#signinModal"><img src="open-iconic-master/png/person-4x.png"></a>';
                                
                               $strgtmlout ='<a class="nav-link "href="#"  id="userlogbutton" style="position: absolute;right:275px;"  data-toggle="modal" data-target="#signoutModal"><img src="open-iconic-master/png/person-4x.png"></a>';
                            if( isset($_SESSION['incorrectpwd']) and $_SESSION['incorrectpwd']==false ){
                                
                              echo $strgtmlout ;
                             
                            }
                            else {
                                echo $strgtmlin ;
                            }
                            ?>   
                            
                            <!--user sign up model ending-->
                            <a href="Q_cart%20-%20Copy.php" style="position: absolute;right:125px;"><img src="open-iconic-master/png/cart-4x.png"></a>
                        </div>
                      </div>
                    </nav>

            
      
    <!--endinging navbar-->  
      
      
    <!--starting contact us model-->
      
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">For Inquiry</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="mail.g.php" method="POST">
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" name="email" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="message" id="message-text"></textarea>
                          </div>
                         <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary">
                      </div>
                    </form>
                      </div>
                     
                    </div>
                  </div>
                </div>
      
    <!--ending contact us model-->  
    
            
      
      
    <!--starting sign in model-->
        
         <div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" >
                      <div class="modal-header" >
                        <h5 class="modal-title" id="signinModalLabel">Sign In</h5>
                         <?php
                            if(isset($_SESSION['incorrectpwd']) and $_SESSION['incorrectpwd']==true ){
                                echo "<h6 class='modal-title'><br>incorect password</h6>";
                            }
                          ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      
                        <form action="signin.php" method="post"><!---- among dive bot-->
                      <div class="modal-body">
                      
                          <div class="form-group">
                            <label for="username_user" class="col-form-label">Username:</label>
                            <input type="text" class="form-control" id="username_user" name="useremail" required>
                          </div>
                            <div class="form-group">
                            <label for="password_user" class="col-form-label">Password:</label>
                            <input type="password" class="form-control" id="password_user" name="userpwd" required>
                          </div>
                         
                      
                      </div>
                      <div class="modal-footer" >
                       
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                      </div>
                       </form><!---- among dive-->
                       
                    </div>
                  </div>
                </div>
      
        
        
        
    <!--ending sign in model-->  
    
        <!--sign out model-->
        
            <div class="modal fade" id="signoutModal" tabindex="-1" role="dialog" aria-labelledby="signinModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h5 class="modal-title " id="signinModalLabel "><img src="open-iconic-master/png/person-4x.png">WELCOME BACK<br></h5> </div>
                         <div class="modal-body">
                     <!---- among dive bot-->
                     
                      
                         <?php
                            
                                echo " <table>
                         <tr><td><h7>First Name:</h7></td><td>    ".$_SESSION['fName']."  " .$_SESSION['lName']."</td></tr></table>";
                              
                          ?>
                                          
                      </div><div class="modal-footer">
                      <form action="signout.php" method="post">
                      
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign out</button>
                      
                       </form></div>
                       
                       <!---- among dive-->
                   
                    
                          
                  </div>
                </div>
        </div>
        
        <!--sign out model-->  
      
      
      
    
     
    <!--starting carosoul--> 
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
          
                <div class="carousel-inner">
                    <div class="carousel-item active" >
                      <img class="d-block w-100" style="max-height:444px;max-width: 1900px; " src="img/slide04.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item" >
                      <img class="d-block w-100" style="max-height:444px;max-width: 1900px;" src="img/slide01.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item" >
                      <img class="d-block w-100" style="max-height:444px;max-width: 1900px;" src="img/slide03.jpg" alt="Third slide">
                    </div>
                </div>
          
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
      </div>
      
      
      
      
    <!--ending carosoul--> 
      <hr>
    <!--starting upcoming_fluid-->
    

      
<div class="container" style=" margin-bottom:10px; ">
 <h2 style="">Upcoming</h2> 
    <div class="row">  
<?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "q_online";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    //echo "Connected successfully";

$sql = "SELECT * FROM product p,upcoming u where p.product_id=u.pro_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        ?>
    


  
      
    <div class="col-sm">
      <div class="card" style="width:20rem; max-height:375px;padding-bottom: 10px; margin-bottom:20px; min-height:375px;">
            <img class="card-img-top" src="<?php echo $row['imgurl']; ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row['model']; ?></h4>
                <p class="card-text" style="min-height:120px;"><?php echo $row['descrip'];?></p>
                
                  <form action="Q_product _add_to_cart - Copy.php" method="POST">
                    
                    <input type="hidden" name="description" value="<?php echo $row['descrip']; ?>">
                    <input type="hidden" name="model" value="<?php echo $row['model']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>">
                    <input type="hidden" name="phval" value="<?php echo $row['imgurl']; ?>">
                    <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
            
                    <input type="submit" class="btn btn-primary" value="View More">
                </form>    
              </div>
        </div>
    </div>
      
<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>   
    
  </div>
  
</div>
      
    
    <!--ending upcoming_fluid--> 
       <hr/>
      
      <!--starting ratings_fluid--> 
       
      
      <div class="container" style=" margin-bottom: 10px; ">
      <h2 style="margin-top:10px; position:relative;" >Top Rated</h2>               
  <div class="row" style="margin-bottom:10px;">
                
               <?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "q_online";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    //echo "Connected successfully";

$sql = "SELECT * FROM product p,toprated u where p.product_id=u.pro_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        ?>
    


  
      
    <div class="col-sm">
      <div class="card" style="width:20rem; max-height:375px;padding-bottom: 10px; margin-bottom:20px; min-height:375px;">
            <img class="card-img-top" src="<?php echo $row['imgurl']; ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row['model']; ?></h4>
                <p class="card-text" style="min-height:120px;"><?php echo $row['descrip'];?></p>
                
                  <form action="Q_product _add_to_cart - Copy.php" method="POST">
                    
                    <input type="hidden" name="description" value="<?php echo $row['descrip']; ?>">
                    <input type="hidden" name="model" value="<?php echo $row['model']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>">
                    <input type="hidden" name="phval" value="<?php echo $row['imgurl']; ?>">
                    <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
            
                    <input type="submit" class="btn btn-primary" value="View More">
                </form>    
              </div>
        </div>
    </div>
      
<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>  
      
      
      
      
      
      
  </div>          
</div>      
      
      
      <!--ending ratings fluid--> 
      <hr>
       <!--starting top_sellers_fluid--> 
      
      <div class="container" style=" margin-bottom: 10px; ">
         <h2 style="">Top Sellers</h2> 
                  
  <div class="row" style="margin-bottom:10px;">
    
    <?php
     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "q_online";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    //echo "Connected successfully";

$sql = "SELECT * FROM product p,topsellers u where p.product_id=u.pro_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        ?>
    


  
      
    <div class="col-sm">
      <div class="card" style="width:20rem; max-height:375px;padding-bottom: 10px; margin-bottom:20px; min-height:375px;">
            <img class="card-img-top" src="<?php echo $row['imgurl']; ?>" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title"><?php echo $row['model']; ?></h4>
                <p class="card-text" style="min-height:120px;"><?php echo $row['descrip'];?></p>
                
                  <form action="Q_product _add_to_cart - Copy.php" method="POST">
                    
                    <input type="hidden" name="description" value="<?php echo $row['descrip']; ?>">
                    <input type="hidden" name="model" value="<?php echo $row['model']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                    <input type="hidden" name="brand" value="<?php echo $row['brand']; ?>">
                    <input type="hidden" name="phval" value="<?php echo $row['imgurl']; ?>">
                    <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
            
                    <input type="submit" class="btn btn-primary" value="View More">
                </form>    
              </div>
        </div>
    </div>
      
<?php
    }
} else {
    echo "0 results";
}
$conn->close();

?>    
  </div>
    
          
</div>      
      
      
      <!--ending top_sellers_fluid--> 
       <hr/>
       
      <!--starting news-->
      <div class="container">
       <h2>Tec News</h2> 
     
          <div id="accordion" role="tablist">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Nokia Releases Deal Breaking Android Models
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Nokia is back, and it’s back with a vengeance. The Finnish company  launched its first-ever Android-powered smartphones in 2017, and while the new devices aren’t made by Nokia, they follow the company’s design guidelines.

                    HMD Global manufactures these devices exclusively. We initially were led to believe there would be four new phones in 2017, but there turned out to be more. Many more.

                      Here’s everything we know about Nokia’s 2017 Android phones so far.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apple Announces iphone 10x
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Our vision has always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      One Plus 5t Be Amazed!!!
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    The OnePlus 5 features the highest resolution dual-camera system on a smartphone today for clearer photos than ever before. Dash Charge, OnePlus’ industry-leading charging technology, gives users a day's power in half an hour. The Qualcomm? Snapdragon? 835 platform, coupled with up to 8 GB of RAM, provides a smooth user experience at a lower power consumption rate. The OnePlus 5 also supports 34 GSM network bands, keeping users connected around the world. 
                    </div>
                </div>
              </div>
        </div>
</div>          
      
      <!--ending news-->
      
      
     
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container-fluid">
            <p class="pull-left"> Copyright © Q_Online 2017. All rights reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
            
    <!--ending footer-->  
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>