<?php
    session_start();
    
    if(!isset($_SESSION['customer_email'])){
        
        echo "<script>window.open('../checkout.php','_self')</script>";
    }else{

    include("includes/db.php");
    include("functions/functions.php");
    
    if(isset($_GET['order_id'])){
        
        $order_id = $_GET['order_id'];
    }
          
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
	    		
	    		<div class="col-md-9"><!--col-md-9 begging-->
	    		    <div class="box"><!--box begging-->
	    		        <h1 class="text-center">Please confirm your paymend</h1>
	    		        <hr>
	    		        <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data"><!--form begging-->
                       
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" >Invoice No:</label>
	    		             <div class="col-sm-8">
	    		                 <input type="text" class="form-control" name="invoice_no" placeholder="inv_no" required >
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" > Amount Sent:</label>
	    		             <div class="col-sm-8">
	    		                 <input type="text" class="form-control" name="amount_sent" placeholder="amount" required >
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" > Select Payment Mode:</label>
	    		             <div class="col-sm-8">
	    		                 <select name="payment_mode" class="form-control">
	    		                     <option>Select Payment Mode</option>
	    		                     <option>Bkash</option>
	    		                     <option>Nagod</option>
	    		                     <option>Mkash</option>
	    		                     <option>Western Union</option>
	    		                 </select>
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" > Transaction / Reference ID:</label>
	    		             <div class="col-sm-8">
	    		                 <input type="text" class="form-control" name="ref_no" placeholder="ref_no" required >
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" > Bkash / Nagod / Western Code:</label>
	    		             <div class="col-sm-8">
	    		                 <input type="text" class="form-control" name="code" placeholder="B/N" required >
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="form-group row"><!--form-group row begging-->
	    		             <label class="col-sm-4 col-form-label" > Payment Date:</label>
	    		             <div class="col-sm-8">
	    		                 <input type="text" class="form-control" name="date" placeholder="pay_date" required >
	    		             </div>
	    		           </div><!--form-group row end-->
	    		           
	    		           <div class="text-center">
	    		               <button class="btn btn-primary btn-lg" name="confirm_payment">
	    		                   <i class="fa fa-user"></i>Confirm Payment
	    		               </button>
	    		           </div>
	    		           
	    		        </form><!--form end-->
	    		        
	    		        <?php
                            
                            if(isset($_POST['confirm_payment'])){
                                
                                $update_id = $_GET['update_id'];
                                
                                $invoice_no = $_POST['invoice_no'];
                                
                                $amount = $_POST['amount_sent'];
                                
                                $payment_mode = $_POST['payment_mode'];
                                
                                $ref_no = $_POST['ref_no'];
                                
                                $code = $_POST['code'];
                                
                                $payment_date = $_POST['date'];
                                
                                $complete = "complete";
                                
                                $insert_payment = "insert into payments (invoice_no,amount,payment_mode,ref_no,code,payment_date) values ('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";
                                
                                $run_payment = mysqli_query($con,$insert_payment);
                                
                                $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                                
                                $run_customer_order = mysqli_query($con,$update_customer_order);
                                
                                $update_pending_order = "update pending_order set order_status='$complete' where order_id='$update_id'";
                                
                                $run_pending_order = mysqli_query($con,$update_pending_order);
                                
                                if($run_pending_order){
                                    
                                    echo "<script>alert('Thanks You for purchasing, your order will be completed within 24 hours work')</script>";
                                    
                                    echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                                    
                                }
                                
                            }
                        
                        ?>
	    		        
	    		    </div><!--box end-->
	    		</div><!--col-md-9 end-->
	    		
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