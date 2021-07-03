<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{


?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li class="active"><!-- active start--> 
                <i class="fa fa-dashboard"></i> Dashboard /  Insert Users
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Insert Users
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-2 col-form-label">UserName</label>
                        <div class="col-md-6">
                            <input name="admin_name" type="text" class="form-control" required>
                        </div>
                    </div><!-- form-group end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input name="admin_email" type="text" class="form-control" required>
                        </div>
                    </div><!-- form-group end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-6">
                            <input name="admin_pass" type="password" class="form-control" required>
                        </div>
                    </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"> Image </label>
                                <div class="col-md-6">
                                  <input style="padding:3px" name="admin_image" type="file" class="form-control" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"> Country </label>
                                <div class="col-md-6">
                                    <input name="admin_country" type="text" class="form-control" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"> Contact </label>
                                <div class="col-md-6">
                                    <input name="admin_contact" type="text" class="form-control" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"> Job </label>
                                <div class="col-md-6">
                                    <input name="admin_job" type="text" class="form-control" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"> About </label>
                                <div class="col-md-6">
                                    <textarea name="admin_about" rows="3" class="form-control"></textarea>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"></label>
                                <div class="col-md-6">
                                    <input name="update" value="Insert Admin" type="submit" class=" btn btn-primary form-control">
                                </div>
                              </div><!-- form-group end-->
                              
                </form><!-- form end-->
            </div><!-- card-body end-->
                       
        </div><!-- card end-->
    </div><!-- col-lg-12 end--> 
</div><!-- row end--> 
     
      
      
       <script src="js/tinymce/tinymce.min.js"></script>
       <script>tinymce.init({ selector:'textarea'});</script>
       


<?php 

if(isset($_POST['update'])){
    
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_pass = $_POST['admin_pass'];
    
    $admin_image = $_FILES['admin_image']['name'];
    $temp_name = $_FILES['admin_image']['tmp_name'];
    move_uploaded_file($temp_name,"admin_images/$admin_image");
    
    $admin_country = $_POST['admin_country'];
    $admin_about = $_POST['admin_about'];
    $admin_contact = $_POST['admin_contact'];
    $admin_job = $_POST['admin_job'];
    
    
    $insert_user = "insert into admins (admin_name,admin_email,admin_pass,admin_image,admin_country,admin_about,admin_contact,admin_job) values ('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_country','$admin_about','$admin_contact','$admin_job')";
    
    $run_user = mysqli_query($con,$insert_user);
    
    if($run_user){
        
        echo "<script>alert('Admin Submitted sucessfully')</script>";
        echo "<script>window.open('index.php?view_users','_self')</script>";
        
    }
    
    else{
        echo "Not Insert data in database please retry again...thank you";
    }
    
}

?>

<?php } ?>