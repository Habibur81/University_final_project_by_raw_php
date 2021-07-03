<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{


?>

<div class="row"><!-- row start-->
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <ol class="breadcrumb"><!-- breadcrumb start--> 
            <li class="active"><!-- active start--> 
                <i class="fa fa-dashboard"></i> Dashboard /  Insert Products
            </li><!-- active end--> 
        </ol><!-- breadcrumb end--> 
    </div><!-- col-lg-12 end-->  
</div><!-- row end-->  
    
    
<div class="row box"><!-- row start--> 
    <div class="col-lg-12"><!-- col-lg-12 start--> 
        <div class="card"><!-- card start-->
            
            <div class="card-header"><!-- card-header start--> 
                <h3 class="card-title"><!-- card-title start--> 
                    <i class="fa fa-money"></i> Insert Product
                </h3><!-- card-title end-->  
            </div><!-- card-header end-->
               
            <div class="card-body box-header"><!-- card-body start-->
                <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-2 col-form-label">Product Title</label>
                        <div class="col-md-6">
                            <input name="product_title" type="text" class="form-control" placeholder="pro_title" required>
                        </div>
                    </div><!-- form-group end-->
                              
                    <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                        <label class="col-md-2 col-form-label">Product Category</label>
                            <div class="col-md-6"><!-- col-md-6 start-->
                                <select name="product_cat" class="form-control">
                                    <option value="">Select a Category Product</option>
                                      <?php
                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($con,$get_p_cats);
                                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];
                                            
                                            echo"
                                                <option value='$p_cat_id'>$p_cat_title</option>
                                            ";
                                        }
                                      ?>
                            </select>
                        </div><!-- col-md-6 end-->
                    </div><!-- form-group end-->
                                
                              
                              
                             <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Category</label>
                                <div class="col-md-6"><!-- col-md-6 start-->
                                  <select name="cat" class="form-control">
                                      <option value="">Select a Category </option>
                                      <?php
                                        $get_cat = "select * from categories";
                                        $run_cat = mysqli_query($con,$get_cat);
                                        while($row_cat=mysqli_fetch_array($run_cat)){
                                            $cat_id =$row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];
                                            
                                            echo"
                                                <option value='$cat_id'>$cat_title</option>
                                            ";
                                        }
                                      ?>
                                  </select>
                                </div><!-- col-md-6 end-->
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Image 1</label>
                                <div class="col-md-6">
                                  <input style="padding:3px" name="product_img1" type="file" class="form-control" placeholder="pro_img1" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Image 2</label>
                                <div class="col-md-6">
                                    <input style="padding:3px" name="product_img2" type="file" class="form-control" placeholder="pro_img1" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Image 3</label>
                                <div class="col-md-6">
                                    <input style="padding:3px" name="product_img3" type="file" class="form-control" placeholder="pro_img1" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Price</label>
                                <div class="col-md-6">
                                    <input name="product_price" type="text" class="form-control" placeholder="pro_price" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Keywords</label>
                                <div class="col-md-6">
                                    <input name="product_keywords" type="text" class="form-control" placeholder="pro_Keywords" required>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product desc</label>
                                <div class="col-md-6">
                                    <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"></label>
                                <div class="col-md-6">
                                    <input name="submit" value="Insert Product" type="submit" class=" btn btn-primary form-control">
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

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
    else{
        echo "Not Insert data in database please retry again...thank you";
    }
    
}

?>

<?php } ?>