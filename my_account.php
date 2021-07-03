<?php
    session_start();
    
    if(!isset($_SESSION['customer_email'])){
        
        echo "<script>window.open('../checkout.php','_self')</script>";
    }else{

    include("includes/db.php");
    include("functions/functions.php");
?>
    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Shop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- font-awssome -->
    <link rel="stylesheet"  href="font-awsome/css/font-awesome.min.css">
    <!-- own style css -->
    <link rel="stylesheet"  href="styles/style.css">

    
  </head>
  <body>
  	<div id="top"><!--start top-->  
	      <div class="container-fluid">

		        <div class="row">
		          
			          <div class="col-md-6 offer">
                         <a href="#"class="btn btn-secondary btn-sm">
                         
                             <?php
                                
                                if(!isset($_SESSION['customer_email'])){
                                    echo"Hi.....!!!!";
                                }else{
                                    echo"Hi ".$_SESSION['customer_email']." ";
                                }
                             
                             ?>
                         
                         </a>
                          <a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?> </a>
			          </div>

			          <div class="col-md-6" >
				            <ul class="menu">
					            <li>
					             	<a href="../customer_register.php">Register</a>
					            </li>
					            <li>
					             	<a href="my_account.php">My Account</a>
					            </li>
					            <li>
					             	<a href="../cart.php">Go To Cart</a>
					            </li>
					            <li>
					             	<a href="../checkout.php">
					             	    
					             	    <?php 
                           
                                           if(!isset($_SESSION['customer_email'])){

                                                echo "<a href='checkout.php'> Login </a>";

                                               }else{

                                                echo " <a href='logout.php'> Log Out </a> ";

                                               }

                                        ?>
                                        
					             	</a>
					            </li>
				            </ul>
			          </div>
		          
		        </div>
	      </div>
    </div><!--finish top-->  

    <div id="main_menu">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   <a class="navbar-brand" href="../index.php"><img src="images/ecom-logo.png"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                     <div class="collapse navbar-collapse" id="navbar">

                        <ul class="navbar-nav mr-auto active">

                            <li>
                                <a class="nav-link" href="../index.php">Home <span class="sr-only"></span></a>
                            </li>

                            <li>
                               <a class="nav-link" href="../shop.php" target="blank">Shop</a>
                            </li>

                            <li class=" active">
                                <a class="nav-link" href="my_account.php" target="blank">My Account</a>
                            </li>

                            <li>
                                <a class="nav-link" href="../cart.php" target="blank">Shopping Cart</a>
                            </li>

                            <li>
                                <a class="nav-link" href="../contact.php" target="blank">Contact Us</a>
                            </li>

                        </ul>

                        <form class="form-inline my-2 my-lg-0" method="get" action="result.php">
                              <input class="form-control mr-sm-2 input" type="text" placeholder="Search" aria-label="Search" name="user_query" required>

                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="search">
                                  <i class="fa fa-search"></i>
                              </button>
                        </form>
                      </div>
                  </nav><!--nav top-->
            
          </div>
    
        </div>
        
      </div>
      
    </div><!--nav end-->
    

    <div id="content"><!--content begging-->
    	<div class="container-fluid"><!--container begging-->
    		<div class="row"><!--row begging-->
	    		<div class="col-md-12"><!--col-md-12 begging-->
	    			<ul class="breadcrumb">
	    				<li>
	    					<a href="index.php">Home</a>
	    				</li>
	    				<li>
	    					My Account
	    				</li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div class="col-md-3"><!--col-md-3 begging-->
	    			<?php
				      include("includes/sidebar.php");
				    ?>
	    		</div><!--col-md-3 end-->
	    		
	    		<div class="col-md-9"><!-- col-md-9 -->
	    		    <div class="card">
                       <div class="card-header">
                           
                           <?php
                            
                            if(isset($_GET['my_orders'])){
                                include("my_orders.php");
                            }
                        
	    		        ?>
	    		        
	    		         <?php
                            
                            if(isset($_GET['pay_offline'])){
                                include("pay_offline.php");
                            }
                        
	    		        ?>
	    		        <?php
                            
                            if(isset($_GET['edit_account'])){
                                include("edit_account.php");
                            }
                        
	    		        ?>
                         
                        <?php
                            
                            if(isset($_GET['change_pass'])){
                                include("change_pass.php");
                            }
                        
	    		        ?>
                          
                        <?php
                            
                            if(isset($_GET['delete_account'])){
                                include("delete_account.php");
                            }
                        
	    		        ?>  
                           
                       </div>
	    		    </div>
	    		</div><!-- col-md-9 -->
	    		
	       </div><!--row end-->
    	</div><!--container end-->
    </div><!--content end-->


    <?php
      include("includes/footer.php");

    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>

<?php } ?>