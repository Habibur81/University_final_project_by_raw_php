<div class="card"><!--card start-->
    <div class="card-header"><!--card-header start-->
        <div class="text-center"><!--text-center start-->
            <h1>Login</h1>
            <p class="lead">Already have our account...???</p>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, sit molestias velit possimus minus perferendis doloribus, accusantium iusto, nostrum labore illum, quidem maxime harum praesentium iure. Praesentium eligendi, reiciendis ex.</p>
        </div><!--text-center end-->
    </div><!--card-header end-->
    
    <form method="post" action="checkout.php" style="padding:10px;"><!--form start-->
       
        <div class="form-group row"><!--form-group row begging-->
	       <label class="col-sm-3 col-form-label" >Email</label>
	       <div class="col-sm-9">
	           <input name="c_email" type="text" class="form-control" placeholder="Email" required >
	       </div>
	   </div><!--form-group row end-->
       
        <div class="form-group row"><!--form-group row begging-->
	       <label class="col-sm-3 col-form-label" >Password</label>
	       <div class="col-sm-9">
	           <input name="c_pass" type="password" class="form-control" placeholder="Password" required >
	       </div>
	   </div><!--form-group row end-->
       
        <div class="text-center"><!--text-center begging-->
            <button name="login" value="login" class="btn btn-primary">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Login
            </button>
	   </div><!--text-center end-->
          
    </form><!--form end-->
    
    <div class="text-center"><!--text-center begging-->
        <a href="customer_register.php">
            <h3>Don't have account..? Register here </h3>
        </a>
    </div><!--text-center end--> 
       
</div><!--card end-->


<?php
    
    if(isset($_POST['login'])){
        
        $customer_email = $_POST['c_email'];
        
        $customer_pass = $_POST['c_pass'];
        
        $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
        
        $run_customer = mysqli_query($con,$select_customer);
        
        $get_ip = getRealIpUser();
        
        $check_customer = mysqli_num_rows($run_customer);
        
        $select_cart = "select * from cart where ip_add='$get_ip'";
        
        $run_cart = mysqli_query($con,$select_cart);
        
        $check_cart = mysqli_num_rows($run_cart);
        
        if($check_customer == 0){
            
            echo "<script>alert('Your email or password is wrong')</script>";
            
            exit();
        }
        
        if($check_customer == 1 AND $check_cart == 0){
            
            $_SESSION['customer_email']=$customer_email;
            
            echo "<script>alert('You are Logged in')</script>";
            
            echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
            
        }else{
            
             $_SESSION['customer_email']=$customer_email;
            
            echo "<script>alert('You are Logged in')</script>";
            
            echo "<script>window.open('checkout.php','_self')</script>";
            
        }
      
    }

?>
