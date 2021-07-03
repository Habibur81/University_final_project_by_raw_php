<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

$customer_country = $row_customer['customer_country'];

$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

$customer_address = $row_customer['customer_address'];

$customer_image = $row_customer['customer_image'];


    
?>
   
<div class="text-center">
    <h1>Edit Your Account</h1>
</div>
   <hr>
<form action="" method="post" enctype="multipart/form-data"><!--form begging-->
                       
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Name: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_name" value="<?php echo $customer_name; ?>" required >
	       </div>
    </div><!--form-group row end-->
    
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Email: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_email" value="<?php echo $customer_email; ?>" required >
	       </div>
    </div><!--form-group row end-->
    
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Country: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required >
	       </div>
    </div><!--form-group row end-->
    
    	    		           
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer City: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_city" value="<?php echo $customer_city; ?>" required >
	       </div>
    </div><!--form-group row end-->	    		           
    
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Contact: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_contact" value="<?php echo $customer_contact; ?>" required >
	       </div>
    </div><!--form-group row end-->	   
    
                                                          		           
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Adress: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required >
	       </div>
    </div><!--form-group row end-->	
        
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Costumer Image: </label>
	       <div class="col-sm-9">
               <input style="padding:3px" type="file" class="form-control" name="c_image">
               <img class="img-fluid" src="customer_images/<?php echo $customer_image; ?>" alt="Costumer Image" style="padding:5px; height:200px; width:200px;">
	       </div>
    </div><!--form-group row end-->    		           	    		           
    	    		           	    		           	    		           
    <div class="text-center"><!--text center begging--> 
	   <button name="update" class="btn btn-primary "><!--button begging--> 
           <i class="fa fa-user"></i>Update Now
	   </button><!--button end--> 
    </div><!--text center end--> 
	    		           
</form><!--form end-->

<?php

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name']; //ekhane image input kore rakha hoy.
    
    $c_image_tmp = $_FILES['c_image']['tmp_name']; // ekhane tmp vabe image thake.
    
    move_uploaded_file($c_image_tmp,"customer_images/$c_image");
        
    $update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
        echo "<script>alert('Your edit completed,please relogin')</script>";
        echo "<script>window.open('logout.php','_self')</script>";
    }
}

?>