<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li><!-- active start--> 
                <i class="fa fa-dashboard"></i> Dashboard /  Insert  Categories
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Insert Category
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Category Title </label>
                        <div class="col-md-6">
                            <input name="cat_title" type="text" class="form-control">
                        </div>
                    </div><!-- form-group end-->
               
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Category Description </label>
                        <div class="col-md-6">
                            <textarea name="cat_desc" type="text"  cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div><!-- form-group end-->
                           
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"></label>
                        <div class="col-md-6">
                            <input name="submit" type="submit" value="Submit" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group end-->
                              
                </form><!-- form end-->
            </div><!-- card-body end-->
                       
        </div><!-- card end-->
    </div><!-- col-lg-12 end--> 
</div><!-- row end-->  


<?php

    if(isset($_POST['submit'])){
        
        $cat_title = $_POST['cat_title'];
        
        $cat_desc = $_POST['cat_desc'];
        
        $insert_cat = "insert into categories(cat_title,cat_desc) values('$cat_title','$cat_desc')";
        
        $run_cat = mysqli_query($con,$insert_cat);
        
        if($run_cat){
            
            echo "<script>alert('insert category')</script>";
            
            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }      

?>



<?php } ?>