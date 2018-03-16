<?php  
session_start();
/*
if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){
        
       $array_id_col=array_column($_SESSION["shopping_cart"],"item_id"); 
            if(!in_array($_POST['hd_id'],$array_id_col)){
                $count=count($_SESSION["shopping_cart"]);
                $item_array=array(
                                    'item_brand'=>$_POST['hd_brand'],
                                    'item_model'=>$_POST['hd_model'],
                                    'item_price'=>$_POST['hd_price'],
                                    'item_img'=>$_POST['hd_img'],
                                    'item_id'=>$_POST['hd_id'],    
                                    );
                
                $_SESSION["shopping_cart"][$count]=$item_array;
        
            }
        
    }else{
        $item_array=array(
                            'item_brand'=>$_POST['hd_brand'],
                            'item_model'=>$_POST['hd_model'],
                            'item_price'=>$_POST['hd_price'],
                            'item_img'=>$_POST['hd_img'],
                            'item_id'=>$_POST['hd_id'],    
                            );

        $_SESSION["shopping_cart"][0]=$item_array;
        echo '<script>alert("Item Added")</script>';
    }
    
}
*/

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product Review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <style>
                ul > li{margin-right:25px;font-weight:lighter;cursor:pointer}
                li.active{border-bottom:3px solid silver;}

                .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
                .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
                .btn-success{width:100%;border-radius:0;}
                .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
                .title-price{margin-top:30px;margin-bottom:0;color:black}
                .title-attr{margin-top:0;margin-bottom:0;color:black;}
                .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
                .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
                div.section > div {width:100%;display:inline-flex;}
                div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
                .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
                .attr.active,.attr2.active{ border:1px solid orange;}

                @media (max-width: 426px) {
                    .container {margin-top:0px !important;}
                    .container > .row{padding:0 !important;}
                    .container > .row > .col-xs-12.col-sm-5{
                        padding-right:0 ;    
                    }
                    .container > .row > .col-xs-12.col-sm-9 > div > p{
                        padding-left:0 !important;
                        padding-right:0 !important;
                    }
                    .container > .row > .col-xs-12.col-sm-9 > div > ul{
                        padding-left:10px !important;

                    }            
                    .section{width:104%;}
                    .menu-items{padding-left:0;}
                }

      </style>
      
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
	padding-bottom: 30px;
	position: relative;
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
    position: absolute;
    bottom: 0px;
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
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send</button>
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
      
      
      
    
     
      <?php
      
      $brand=$_POST['brand'];
      $model=$_POST['model'];
      $price=$_POST['price'];
      $pimg =$_POST['phval'];
      $description=$_POST['description'];
      $prod_id=$_POST['pro_id'];
     
      
      ?>
      
      
      
      
      
      
      
      
      
      
      <!--starting the review container-->
      
     <div class="container" style="margin-top: 100px;">
        	<div class="row">
               <div class="col-xs-4 item-photo float-left" style="position:absolute; left: 0px; " >
                    <img style="max-width:100%;min-width:600px; min-width:600px;" src="<?php echo $pimg;?>" />
                </div>
                <div class="col-xs-8 float-right" style="border:0px solid gray; position: absolute;left: 700px;">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?php echo $model; ?></h3>    
                    <h5 style="color:#337ab7">Branded <a href="#"><?php echo $brand; ?></a> · <small style="color:#337ab7">(5054 views)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Price</small></h6>
                    <h3 style="margin-top:0px;">RS <?php echo $price; ?></h3>
        
                    <!-- Detalles especificos del producto -->
                    <div class="section">
                        <h6 class="title-attr" style="margin-top:15px;" ><small>Colour</small></h6>                    
                        <div>
                            <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                            <div class="attr" style="width:25px;background:white;"></div>
                        </div>
                    </div>
                    <div class="section" style="padding-bottom:5px;">
                        <h6 class="title-attr"><small>Description</small></h6>                    
                        <div>
                            <?php echo $description; ?>
                        </div>
                    </div>   
                <form method="POST" action="Q_cart - Copy.php?action=add&id=<?php echo $prod_id;?>"> 
                     
                    <div class="section" style="padding-bottom:20px;">
                        <h6 class="title-attr"><small>Quantity</small></h6>                    
                        <div>
                                <input type="text"  name="prdct_copy_qty" value="1" />
                         </div>
                    </div>   
        
                    <!-- Botones de compra -->
                    
                        <div class="section" style="padding-bottom:20px;">
                            <input type="hidden" name="hd_brand" value="<?php echo $brand; ?>">
                            <input type="hidden" name="hd_model"  value="<?php echo $model; ?>">
                            <input type="hidden" name="hd_price"  value="<?php echo $price; ?>">
                            <input type="hidden" name="hd_img"  value="<?php echo $phval; ?>">
                            <input type="hidden" name="hd_id"  value="<?php echo $prod_id; ?>">                            <input type="submit" class="btn btn-success"name="add_to_cart" value="Add to Cart">
                        </div>  
                    </form>    
                </div>                              
    		
            </div>
         
          
        </div>  

      
      
    <!--starting the review container-->
      
      
      
      
      
      
      
      
      <script type="text/javascript">
      /*
         $(document).ready(function(){
            //-- Click on detail
            $("ul.menu-items > li").on("click",function(){
                $("ul.menu-items > li").removeClass("active");
                $(this).addClass("active");
            })

            $(".attr,.attr2").on("click",function(){
                var clase = $(this).attr("class");

                $("." + clase).removeClass("active");
                $(this).addClass("active");
            })

            //-- Click on QUANTITY
            $(".btn-minus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1 > 0){ now--;}
                    $(".section > div > input").val(now);
                }else{
                    $(".section > div > input").val("1");
                }
            })            
            $(".btn-plus").on("click",function(){
                var now = $(".section > div > input").val();
                if ($.isNumeric(now)){
                    $(".section > div > input").val(parseInt(now)+1);
                }else{
                    $(".section > div > input").val("1");
                }
            })                        
        }) 
      */
      </script>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>