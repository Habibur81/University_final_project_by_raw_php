<?php
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
?>


<?php

    if(isset($_GET['pro_id'])){
        
        $product_id = $_GET['pro_id'];
        
        $get_product = "select * from products where product_id='$product_id'";
        
        $run_product = mysqli_query($con,$get_product);
        
        $row_product = mysqli_fetch_array($run_product);
        
        $p_cat_id =  $row_product['p_cat_id'];
        
        $pro_title =  $row_product['product_title'];
        
        $pro_price =  $row_product['product_price'];
        
        $pro_desc =  $row_product['product_desc'];
        
        $pro_img1 =  $row_product['product_img1'];
        
        $pro_img2 =  $row_product['product_img2'];
        
        $pro_img3 =  $row_product['product_img3'];
        
        $get_p_cat = "select * from product_categories where p_cat_id = ' $p_cat_id '";
        
        $run_p_cat = mysqli_query($con,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title =  $row_p_cat['p_cat_title'];
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>My Shop </title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- font-awssome -->
    <link rel="stylesheet"  href="font-awsome/css/font-awesome.min.css">
    
    <!-- own style css -->
    <link rel="stylesheet"  href="styles/style.css">

    
  </head>
  <body>
  	<div id="top"><!--start top-->  
	      <div class="container-fluid"><!--start container-fluid-->  

		        <div class="row"><!--start row-->  
		          
			          <div class="col-md-6 offer">
                         <a href="#"class="btn btn-secondary btn-sm">
                         
                             <?php
                                
                                if(!isset($_SESSION['customer_email'])){
                                    echo"Hi";
                                }else{
                                    echo"Hi ".$_SESSION['customer_email']." ";
                                }
                             
                             ?>
                         
                         </a>
                          <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
			          </div>

			          <div class="col-md-6" ><!--start col-md-6 -->  
				            <ul class="menu"><!--start menu -->  
					            <li>
					             	<a href="customer_register.php">Register</a>
					            </li>
					            <li>
					             	<a href="customer/my_account.php">My Account</a>
					            </li>
					            <li>
					             	<a href="cart.php">Go To Cart</a>
					            </li>
					            <li>
					             	<a href="checkout.php">
					             	    
					             	     <?php 
                           
                                           if(!isset($_SESSION['customer_email'])){

                                                echo "<a href='checkout.php'> Login </a>";

                                               }else{

                                                echo " <a href='logout.php'> Log Out </a> ";

                                               }

                                        ?>
					             	
					             	</a>
					            </li>
				            </ul><!--end menu -->  
			          </div><!--end col-md-6 -->  
		          
		        </div><!--end row-->  
	      </div><!--end container-fluid-->  
    </div>    <!--finish top-->  
     

    <div id="main_menu"><!--start menu_menu -->  

      <div class="container-fluid"><!--start container-fluid-->  

        <div class="row"><!--start row-->  

          <div class="col-md-12"><!--start col-md-12 -->  

                <nav class="navbar navbar-expand-lg navbar-light bg-light"><!--start nav -->  
                   <a class="navbar-brand" href="index.php"><img src="images/ecom-logo.png"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                     <div class="collapse navbar-collapse" id="navbar"><!--start collapse -->  

                        <ul class="navbar-nav mr-auto active">

                            <li class="nav-item <?php if($active=='Home') echo"active"; ?>">
                                <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                            </li>

                            <li class="nav-item <?php if($active=='Shop') echo"active"; ?>">
                               <a class="nav-link" href="shop.php" target="blank">Shop</a>
                            </li>

                            <li class="nav-item <?php if($active=='Account') echo"active"; ?>">
                                
                                <?php
                                    
                                    if(!isset($_SESSION['customer_email'])){
                                        
                                        echo"<a class='nav-link' href='checkout.php' target='blank'>My Account</a>";
                                    }else{
                                        
                                        echo"<a class='nav-link' href='customer/my_account.php?my_orders' target='blank'>My Account</a>";
                                        
                                    }   
                                
                                ?>
                            </li>

                            <li class="nav-item <?php if($active=='Cart') echo"active"; ?>">
                                <a class="nav-link" href="cart.php" target="blank">Shopping Cart</a>
                            </li>

                            <li class="nav-item <?php if($active=='Contact') echo"active"; ?>">
                                <a class="nav-link" href="contact.php" target="blank">Contact Us</a>
                            </li>

                        </ul>

                        <form class="form-inline my-2 my-lg-0" method="get" action="result.php">
                              <input class="form-control mr-sm-2 input" type="text" placeholder="Search" aria-label="Search" name="user_query" required>

                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="search">
                                  <i class="fa fa-search"></i>
                              </button>
                        </form>
                      </div><!--end collapse --> 
                  </nav><!--end nav -->  
            
          </div><!--end col-md-12 -->  

        </div><!--end row-->  
        
      </div> <!--end containe-fluid -->  
      
      </div> <!--end menu_menu --> 