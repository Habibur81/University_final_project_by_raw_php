<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{


?>

<?php

    if(isset($_GET['edit_product'])){
        
        $edit_id = $_GET['edit_product'];
        
        $get_p = "select * from products where product_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['product_id'];
        
        $p_title = $row_edit['product_title'];
        
        $cat_id = $row_edit['p_cat_id'];
        
        $cat = $row_edit['cat_id'];
        
        $p_imge1 = $row_edit['product_img1'];
        
        $p_imge2 = $row_edit['product_img2'];
        
        $p_imge3 = $row_edit['product_img3'];
        
        $P_price = $row_edit['product_price'];
        
        $p_keywords = $row_edit['product_keywords'];
        
        $p_desc = $row_edit['product_desc'];
        
        
    }
        
        $get_p_cat = "select * from product_categories where P_cat_id='$cat_id'";
            
        $run_p_cat = mysqli_query($con,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['p_cat_title'];
        
        
        
        $get_cat = "select * from categories where cat_id='$cat'";
        
        $run_cat = mysqli_query($con,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['cat_title'];    

?>
      
   <body> 
         <div class="row"><!-- row start-->
         <div class="col-lg-12"><!-- col-lg-12 start--> 
             <ol class="breadcrumb"><!-- breadcrumb start--> 
                 <li class="active"><!-- active start--> 
                     <i class="fa fa-dashboard" aria-hidden="true"></i>Dashboard/ Update Product
                 </li><!-- active end--> 
             </ol><!-- breadcrumb end--> 
         </div><!-- col-lg-12 end-->  
        </div><!-- row end-->  
    
        <div class="row box"><!-- row start--> 
            <div class="col-lg-12"><!-- col-lg-12 start--> 
                <div class="card"><!-- card start--> 
                    <div class="card-header text-center box-header"><!-- card-header start--> 
                       <h3 class="card-title"><!-- card-title start--> 
                           <i class="fa fa-money" aria-hidden="true"></i> Update Product
                       </h3><!-- card-title end-->  
                    </div><!-- card-header end-->
               
                     <div class="card-body box-header"><!-- card-body start-->
                         <form  method="post"  enctype="multipart/form-data"><!-- form start-->
                            
                             <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Title</label>
                                <div class="col-md-6">
                                  <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                                </div>
                              </div><!-- form-group end-->
                              
                             <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Category</label>
                                <div class="col-md-6"><!-- col-md-6 start-->
                                  <select name="product_cat" class="form-control">
                                      <option value="<?php echo $cat_id; ?>"> <?php echo $p_cat_title; ?> </option>
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
                                      <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>
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
                                  <input style="padding:3px" name="product_img1" type="file" class="form-control" required>
                                  <br>
                                  <img src="product_images/<?php echo $p_imge1; ?>" alt="product_imge1" width="60" height="60">
                                </div>
                              </div><!-- form-group end-->
                              
                              
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Image 2</label>
                                <div class="col-md-6">
                                    <input style="padding:3px" name="product_img2" type="file" class="form-control">
                                  <br>
                                  <img src="product_images/<?php echo $p_imge2; ?>" alt="product_imge2" width="60" height="60">
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Image 3</label>
                                <div class="col-md-6">
                                    <input style="padding:3px" name="product_img3" type="file" class="form-control">
                                  <br>
                                  <img src="product_images/<?php echo $p_imge3; ?>" alt="product_imge3" width="60" height="60">
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Price</label>
                                <div class="col-md-6">
                                    <input name="product_price" type="text" class="form-control" required value="<?php echo $P_price; ?>">
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product Keywords</label>
                                <div class="col-md-6">
                                    <input name="product_keywords" type="text" class="form-control" required value="<?php echo $p_keywords; ?>">
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label">Product desc</label>
                                <div class="col-md-6">
                                    <textarea name="product_desc" cols="19" rows="6" class="form-control">
                                        <?php echo $p_desc; ?>
                                    </textarea>
                                </div>
                              </div><!-- form-group end-->
                              
                              <div class="form-group row d-flex justify-content-center" ><!-- form-group start-->
                                <label class="col-md-2 col-form-label"></label>
                                <div class="col-md-6">
                                    <input name="update" value="Update Product" type="submit" class=" btn btn-primary form-control">
                                </div>
                              </div><!-- form-group end-->
                              
                         </form><!-- form end-->
                     </div><!-- card-body end-->
                       
                </div><!-- card end-->
            </div><!-- col-lg-12 end--> 
        </div><!-- row end-->  
      
      
       <script src="js/tinymce/tinymce.min.js"></script>
       <script>tinymce.init({ selector:'textarea'});</script>
       
   </body>

<?php 

if(isset($_POST['update'])){
    
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
    
    
    $update_product = "update products set P_cat_id='$product_cat',cat_id='$cat',date=NOW(),product_title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_price='$product_price',product_desc='$product_desc',product_keywords='$product_keywords' where product_id='$p_id'";
    
    $run_update = mysqli_query($con,$update_product);
    
    if($run_update){
        
        echo "<script>alert('update successfull')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
    }
}

?>

<?php } ?>