<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php
    
    if(isset($_GET['edit_cat'])){
        
        $edit_cat_id = $_GET['edit_cat'];
        
        $edit_cat_query = "select * from categories where cat_id='$edit_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $cat_id = $row_edit['cat_id'];
        
        $cat_title = $row_edit['cat_title'];
        
        $cat_desc = $row_edit['cat_desc']; 
    }    


?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li class="active"><!-- active start--> 
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard /  Edit Categories
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Edit Category
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Category Title </label>
                        <div class="col-md-6">
                            <input name="cat_title" type="text" value="<?php echo $cat_title; ?>" class="form-control">
                        </div>
                    </div><!-- form-group end-->
               
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Category Description </label>
                        <div class="col-md-6">
                            <textarea name="cat_desc" type="text"  cols="30" rows="10" class="form-control"> <?php echo $cat_desc; ?></textarea>
                        </div>
                    </div><!-- form-group end-->
                           
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"></label>
                        <div class="col-md-6">
                            <input name="update" type="submit" value="Update" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group end-->
                              
                </form><!-- form end-->
            </div><!-- card-body end-->
                       
        </div><!-- card end-->
    </div><!-- col-lg-12 end--> 
</div><!-- row end-->  


<?php

    if(isset($_POST['update'])){
        
        $cat_title = $_POST['cat_title'];
        
        $cat_desc = $_POST['cat_desc'];
        
        $update_cat = "update categories set cat_title='$cat_title',cat_desc='$cat_desc' where cat_id='$cat_id'";
        
        $run_cat = mysqli_query($con,$update_cat);
        
        if($run_cat){
            
            echo "<script>alert('Update the Category')</script>";
            echo "<script>window.open('index.php?view_cats','_self')</script>";
        }
    }      

?>



<?php } ?>