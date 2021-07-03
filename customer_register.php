<?php
     $active='Account';
    include("includes/header.php");
?>   

    <div id="content"><!--content begging-->
    	<div class="container-fluid"><!--container begging-->
    		<div class="row"><!--row begging-->
	    		<div class="col-md-12"><!--col-md-12 begging-->
	    			<ul class="breadcrumb">
	    				<li>
	    					<a href="index.php">Home</a>
	    				</li>
	    				<li>
	    					Register
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
	    		        <div class="box-header"><!--box-header begging-->
                        
	    		            <div class="text-center"><!--text-center begging-->
	    		                <h1>Register a new account</h1>
	    		            </div><!--text-center end-->
	    		            <hr>
	    		            <form action="customer_register.php" method="post" enctype="multipart/form-data"><!--form begging-->
                             
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Name:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_name" placeholder="name" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Email:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_email" placeholder="email" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Password:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="password" class="form-control" name="c_pass" placeholder="enter your passward" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
                               
                                <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Country Name:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_country" placeholder="enter your country name" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                  <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your City Name:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_city" placeholder="enter your city name" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                  <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Contact Number:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_contact" placeholder="contact" required >
	    		                     </div>
	    		                 </div><!--form-group row end--> 
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Address:</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="c_address" placeholder="enyer your address" required >
	    		                     </div>
	    		                 </div><!--form-group row end--> 
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Your Profile picture:</label>
	    		                     <div class="col-sm-9">
	    		                         <input style="padding:3px" type="file" class="form-control" name="c_image" placeholder="image" required >
	    		                     </div>
	    		                 </div><!--form-group row end--> 
	    		                 
	    		                 <div class="text-center"><!--text-center begging-->
	    		                     <button type="submit" name="register" class="btn btn-secondary">
	    		                         <i class="fa fa-user" aria-hidden="true"></i> Register
	    		                     </button>
	    		                 </div><!--text-center end-->
	    		                 
	    		                 
	    		            </form><!--form end-->
	    		        </div><!--box-header end-->
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


<?php

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }
    else {
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
        
}

?>