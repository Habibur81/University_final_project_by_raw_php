<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li><!-- active start--> 
                <i class="fa fa-dashboard"></i> Dashboard /  Insert Slide
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Insert Slide
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group 1 start-->
                        <label class="col-md-3 col-form-label"> Slide Name </label>
                        <div class="col-md-6">
                            <input name="slide_name" type="text" class="form-control">
                        </div>
                    </div><!-- form-group 1 end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group 2 start-->
                        <label class="col-md-3 col-form-label"> Slide Url </label>
                        <div class="col-md-6">
                            <input name="slide_url" type="text" class="form-control">
                        </div>
                    </div><!-- form-group 2 end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group 3 start-->
                        <label class="col-md-3 col-form-label"> Slide Image </label>
                        <div class="col-md-6">
                            <input style="padding:3px" name="slide_image" type="file" class="form-control">
                        </div>
                    </div><!-- form-group 3 end-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group 4 start-->
                        <label class="col-md-3 col-form-label"></label>
                        <div class="col-md-6">
                            <input name="submit" type="submit" value="Submit Now" class="btn btn-primary form-control">
                        </div>
                    </div><!-- form-group 4 end-->
                              
                </form><!-- form end-->
            </div><!-- card-body end-->
                       
        </div><!-- card end-->
    </div><!-- col-lg-12 end--> 
</div><!-- row end-->  


<?php

    if(isset($_POST['submit'])){
        
        $slide_name = $_POST['slide_name'];
        
        $slide_url = $_POST['slide_url'];
        
        $slide_image = $_FILES['slide_image']['name'];
        
        $temp_name = $_FILES['slide_image']['tmp_name'];
        
        $get_slide = "select * from slider";
        
        $run_slide = mysqli_query($con,$get_slide);
        
        $row_slide = mysqli_num_rows($run_slide);
        
        if($row_slide < 4){
        
            move_uploaded_file($temp_name,"slides_images/$slide_image");

            $insert_slide = "insert into slider(slide_name,slide_url,slide_image) values('$slide_name','$slide_url','$slide_image')";

            $run_slide = mysqli_query($con,$insert_slide);
            
            echo "<script>alert('inserted slide successfully')</script>";
            
            echo "<script>window.open('index.php?view_slides','_self')</script>";
        }
        else{
            
            echo "<script>alert('Already have 4 slide')</script>";
                
        }
    }      

?>



<?php } ?>