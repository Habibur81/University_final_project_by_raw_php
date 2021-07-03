<div class="text-center">
    <h1>Change Your Password</h1>
</div>
   <hr>
<form action="" method="post"><!--form begging-->
                       
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Your old password: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="old_pass" placeholder="old_pass" required >
	       </div>
    </div><!--form-group row end-->
    
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Your New Password: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="new_pass" placeholder="New_pass" required >
	       </div>
    </div><!--form-group row end-->
    
    <div class="form-group row"><!--form-group row begging-->
	   <label class="col-sm-3 col-form-label" > Confirm Your Password: </label>
	       <div class="col-sm-9">
               <input type="text" class="form-control" name="new_pass_again" placeholder="new_pass_again" required >
	       </div>
    </div><!--form-group row end-->   		           	    		           
    	    		           	    		           	    		           
    <div class="text-center"><!--text center begging--> 
	   <button type="submit" name="submit" class="btn btn-primary "><!--button begging--> 
           <i class="fa fa-user"></i>Update Now
	   </button><!--button end--> 
    </div><!--text center end--> 
	    		           
</form><!--form end-->


<?php

    if(isset($_POST['submit'])){

            $c_email = $_SESSION['customer_email'];

            $c_old_pass = $_POST['old_pass'];

            $c_new_pass = $_POST['new_pass'];

            $c_new_pass_again = $_POST['new_pass_again'];

            $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";

            $run_c_old_pass = mysqli_query($con,$sel_c_old_pass);

            $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

            if($check_c_old_pass == 0){

                echo "<script>alert('Sorry,Your current password did not valid, please try again')</script>";
            }

            if($c_new_pass!= $c_new_pass_again){

                echo "<script>alert('Sorry,Your new password did not match')</script>";

            }

            $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";

            $run_c_pass = mysqli_query($con,$update_c_pass);

            if($run_c_pass){

                echo "<script>alert('Your password has been updated')</script>";

                echo "<script>window.open('my_account.php?my_orders','_self')</script>";

            }


    }

?>