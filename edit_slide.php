<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php
    
    if(isset($_GET['edit_slide'])){
        
        $edit_slide_id = $_GET['edit_slide'];
        
        $edit_slide_query = "select * from slider where slide_id='$edit_slide_id'";
        
        $run_edit = mysqli_query($con,$edit_slide_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $slide_id = $row_edit['slide_id'];
        
        $slide_name = $row_edit['slide_name'];
        
        $slide_url = $row_edit['slide_url'];
        
        $slide_image = $row_edit['slide_image']; 
    }    


?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li class="active"><!-- active start--> 
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard /  Edit Slide
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Edit Slide
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Slide Name </label>
                        <div class="col-md-6">
                            <input name="slide_name" type="text" value="<?php echo $slide_name; ?>" class="form-control">
                        </div>
                    </div><!-- form-group end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Slide Url </label>
                        <div class="col-md-6">
                            <input name="slide_url" type="text" value="<?php echo $slide_url; ?>" class="form-control">
                        </div>
                    </div><!-- form-group end-->
               
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-3 col-form-label"> Slide Image </label>
                        <div class="col-md-6">
                            <input style="padding:3px" name="slide_img" type="file" class="form-control" required>
                            <br>
                            <img src="slides_images/<?php echo $slide_image; ?>" alt="slide_image" class="img-fluid">
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
        
        $slide_name = $_POST['slide_name'];
        
        $slide_url = $_POST['slide_url'];
        
        $slide_img = $_FILES['slide_img']['name'];
        
        $temp_name = $_FILES['slide_img']['tmp_name'];
        
        move_uploaded_file($temp_name,"slides_images/$slide_img");
        
        $update_slide = "update slider set slide_name='$slide_name',slide_url='$slide_url',slide_image='$slide_img' where slide_id='$slide_id'";
        
        $run_slide = mysqli_query($con,$update_slide);
        
        if($run_slide){
            
            echo "<script>alert('Update the Slide')</script>";
            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }
    }      

?>



<?php } ?>