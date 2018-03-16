<?php session_start();

if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){
        
       $array_id_col=array_column($_SESSION["shopping_cart"],"item_id"); 
            if(!in_array($_GET['id'],$array_id_col)){
                $count=count($_SESSION["shopping_cart"]);
                $item_array=array(
                                    'item_brand'=>$_POST['hd_brand'],
                                    'item_model'=>$_POST['hd_model'],
                                    'item_price'=>$_POST['hd_price'],
                                    'item_img'=>$_POST['hd_img'],
                                    'item_id'=>$_POST['hd_id'],
                                    'item_qty'=>$_POST['prdct_copy_qty'],
                                    );
                
                $_SESSION["shopping_cart"][$count]=$item_array;
                
                 echo '<script>alert("Item Added")</script>';
        
            }
        
    }else{
        $item_array=array(
                            'item_brand'=>$_POST['hd_brand'],
                            'item_model'=>$_POST['hd_model'],
                            'item_price'=>$_POST['hd_price'],
                            'item_img'=>$_POST['hd_img'],
                            'item_id'=>$_POST['hd_id'],
                            'item_qty'=>$_POST['prdct_copy_qty'],
                                  
                            );

        $_SESSION["shopping_cart"][0]=$item_array;
        echo '<script>alert("Item Added")</script>';
    }
    
}



if(isset($_GET["action"])){
    
    if($_GET["action"]=="delete"){
        
         foreach($_SESSION["shopping_cart"] as $key => $values){
              
             if($values["item_id"] ==$_GET["id"] ){
                 unset($_SESSION["shopping_cart"][$key]);
                 echo '<script>alert("removed")</script>';
                 echo '<script>window.location="Q_cart - Copy.php"</script>';
             } 
         }  
    }
    
}














?>
<!doctype html>
<html lang="en">
  <head>
    <title>Q_Online Cart</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


    <style>
                    .table>tbody>tr>td, .table>tfoot>tr>td{
                    vertical-align: middle;
                }
                @media screen and (max-width: 600px) {
                    table#cart tbody td .form-control{
                        width:20%;
                        display: inline !important;
                    }
                    .actions .btn{
                        width:36%;
                        margin:1.5em 0;
                    }

                    .actions .btn-info{
                        float:left;
                    }
                    .actions .btn-danger{
                        float:right;
                    }

                    table#cart thead { display: none; }
                    table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
                    table#cart tbody tr td:first-child { background: #333; color: #fff; }
                    table#cart tbody td:before {
                        content: attr(data-th); font-weight: bold;
                        display: inline-block; width: 8rem;
                    }



                    table#cart tfoot td{display:block; }
                    table#cart tfoot td .btn{display:block;}

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
      
      
      
      
      
      
      
<!--starting items_cart-->      
      
  <div class="container" style="margin-top:100px;">
	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					
        
        <?php  
        $total=0;
        
            if(!empty($_SESSION["shopping_cart"])){
                
                
                foreach($_SESSION["shopping_cart"] as $key => $values ){
                    
                    
              ?>
      
                    <tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-9">
										<h4 class="nomargin"><?php echo $values['item_model']."     ".$values['item_brand'] ?></h4>
										
									</div>
								</div>
							</td>
							<td data-th="Price">RS <?php echo $values['item_price'] ?>
                            <input type="hidden" name="prc"   class="form-control text-center" value=" <?php echo $values['item_price'] ?>">
                                
                            </td>
							<td data-th="Quantity">
                                
                                <input type="text"  class="form-control text-center" value="<?php echo $values['item_qty'] ?> ">
                            
							</td> 
							<td data-th="Subtotal" class="text-center" >
                                <input type="text" name="sub"  id="" class="form-control text-center" value=" <?php echo number_format($values['item_qty']*$values['item_price'],2); ?> ">
                               
                            </td>
							<td class="actions" data-th="">
                                <a href="Q_cart%20-%20Copy.php?action=delete&id=<?php echo $values['item_id'] ?>">
                                <button class="btn btn-danger btn-sm"><img src="open-iconic-master/png/trash-3x.png">
                                    </button>	
                                </a>    
							</td>
						</tr>
					</tbody>
					
          <?php
                  $total=$total+($values['item_qty']*$values['item_price']);
                    
             ?>
        
        
        <?php          
                }
                
                
                
                
            }
        
        ?>
        

                    <tfoot>
						
						<tr>
							<td><a href="Q_products%20-%20Copy.php" class="btn btn-warning"><img src="open-iconic-master/png/chevron-left-2x.png"> Continue Shopping</a></td>
							<td colspan="2" class="hidden-xs"></td>
							
                            <td><a href="#" class="btn btn-success btn-block">Checkout<img src="open-iconic-master/png/chevron-right-2x.png"></a><div><strong>Total   :<?php echo number_format($total,2); ?></strong></div></td>
						</tr>
					</tfoot>
				</table>
</div>
      
<!--ending items_cart-->      
      
      
      
      
      
      
      
    <!--starting footer--> 
       <div class="footer" id="footer" style="max-height:204px;">
        <div class="container-fluid" style="max-height:204px;">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            
            
            <!--/.row--> 
           </div>
           
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
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