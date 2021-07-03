<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php
    
    if(isset($_GET['edit_p_cat'])){
        
        $edit_p_cat_id = $_GET['edit_p_cat'];
        
        $edit_p_cat_query = "select * from product_categories where p_cat_id='$edit_p_cat_id'";
        
        $run_edit = mysqli_query($con,$edit_p_cat_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_cat_id = $row_edit['p_cat_id'];
        
        $p_cat_title = $row_edit['p_cat_title'];
        
        $p_cat_desc = $row_edit['p_cat_desc']; 
    }    


?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li class="active"><!-- active start--> 
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard /  Edit Product Categories
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Edit Product Category
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label">Product Category Title </label>
                        <div class="col-md-6">
                            <input name="p_cat_title" type="text" value="<?php echo $p_cat_title; ?>" class="form-control">
                        </div>
                    </div><!-- form-group end-->
               
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Product Category Description </label>
                        <div class="col-md-6">
                            <textarea name="p_cat_desc" type="text"  cols="30" rows="10" class="form-control"> <?php echo $p_cat_desc; ?></textarea>
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
        
        $p_cat_title = $_POST['p_cat_title'];
        
        $p_cat_desc = $_POST['p_cat_desc'];
        
        $update_p_cat = "update product_categories set p_cat_title='$p_cat_title',p_cat_desc='$p_cat_desc' where p_cat_id='$p_cat_id'";
        
        $run_p_cat = mysqli_query($con,$update_p_cat);
        
        if($run_p_cat){
            
            echo "<script>alert('Update the Product Category')</script>";
            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }
    }      

?>



<?php } ?>