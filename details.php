<?php
    $active='Cart';
    include("includes/header.php");
?> 

    <div id="content"><!--content begging-->
    	<div class="container-fluid"><!--container begging-->
    		<div class="row">
	    		<div class="col-md-12"><!--col-md-12 begging-->
	    			<ul class="breadcrumb">
	    				<li>
	    					<a href="index.phh">Home</a>
	    				</li>
	    				<li>
	    					Shop
	    				</li>
	    				<li>
	    				    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
	    				</li>
	    				<li><?php echo $pro_title; ?></li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div class="col-md-3"><!--col-md-3 begging-->
	    			<?php
				      include("includes/sidebar.php");
				    ?>
	    		</div><!--col-md-3 end-->
	    		
	    		<div class="col-md-9"><!--col-md-9 begging-->
                    <div id="productMain" class="row" ><!row begging-->
                       <div class="col-sm-6"><!--col-sm-6 begging-->
                          <div id="mainImage">
                             <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="img-fluid" src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="img-1">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="img-2">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="img-fluid" src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="img-3">
                                    </div>
                                  </div>
                                  
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                  
                             </div>
                          </div> 
                       </div><!--col-sm-6 end-->
                       
                       <div class="col-sm-6"><!--col-sm-6 begging-->
                           <div class="box"><!--box begging-->
                              <h1 class="text-center"> <?php  echo $pro_title; ?> </h1>
                              
                                <?php add_cart(); ?> 
                               
                              <form action="details.php?add_cart=<?php  echo $product_id; ?>" method="post"><!--form begging-->
                                  <div class="form-group row"><!--form-group begging-->
                                      <label for="" class="col-md-5 col-form-label">Product Quantity</label>
                                      <div class="col-md-7"><!-- col-md-7 Begin -->
                                          <select name="product_qty" id="" class="form-control"><!-- select Begin -->
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                           <option>5</option>
                                           </select><!-- select Finish -->
                                   
                                    </div><!-- col-md-7 Finish -->
                                  </div><!--form-group end-->
                                  <div class="form-group row"><!--form-group begging-->
                                      <label for="" class="col-md-5 col-form-label">Product Size</label>
                                      <div class="col-md-7"><!-- col-md-7 Begin -->
                                       
                                       <select name="product_size" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Must pick 1 size for the product')"><!-- form-control Begin -->
                                          
                                           <option disabled selected>Select a Size</option>
                                           <option>Small</option>
                                           <option>Medium</option>
                                           <option>Large</option>
                                           
                                       </select><!-- form-control Finish -->
                                       
                                   </div><!-- col-md-7 Finish -->
                                  </div><!--form-group row end-->
                                  <p class="price">$ <?php  echo $pro_price; ?> </p>
                                  <p class="text-center buttons">
                                      <button class="btn btn-primary">
                                          <i class="fa fa-shopping-cart">
                                            Add To Cart
                                          </i>
                                      </button>
                                  </p>
                              </form><!--form-group end-->
                           </div><!--box end-->
                           
                           <div class="row" id="img-thumb"><!--row begging-->
                               <div class="col-sm-4"><!--col-sm-4 begging-->
                                   <a data-target="#carouselExampleIndicators" data-slide-to="0" href="#" class="thumb">
                                       <img src="admin_area/product_images/<?php echo $pro_img1; ?>" alt="product-1" class="img-fluid">
                                   </a>
                               </div><!--col-sm-4 end-->
                               
                               <div class="col-sm-4"><!--col-sm-4 begging-->
                                   <a data-target="#carouselExampleIndicators" data-slide-to="1" href="#" class="thumb">
                                       <img src="admin_area/product_images/<?php echo $pro_img2; ?>" alt="product-2" class="img-fluid">
                                   </a>
                               </div><!--col-sm-4 end-->
                               
                               <div class="col-sm-4"><!--col-sm-4 begging-->
                                   <a data-target="#carouselExampleIndicators" data-slide-to="2" href="#" class="thumb">
                                       <img src="admin_area/product_images/<?php echo $pro_img3; ?>" alt="product-3" class="img-fluid">
                                   </a>
                               </div><!--col-sm-4 end-->
                               
                           </div><!--row end-->
                       </div><!--col-sm-6 end-->
                    </div><!--row end-->
                    
                    <div class="box" id="details"><!--box begging-->
                        
                            <h4>Product Details</h4>
                        <p>
                            <?php  echo $pro_desc; ?>
                        </p>
                           <h4>Size</h4>
                           <ul>
                               <li>Small</li>
                               <li>Medium</li>
                               <li>Large</li>
                           </ul>
                           <hr>
                    </div><!--box end-->
                    
                    <div class="row"><!--row same-heigh-row begging-->
                        <div class="col-md-3 col-sm-6 justify-content-center"><!--col-md-3 col-sm-6 begging-->
                            <div class="box line-height headline">
                                <h3 class="text-center">Product You Maybe Like</h3>
                            </div>
                        </div><!--col-md-3 col-sm-6 end-->
                        
                        <?php  
                        
                                $get_products = "select * from products order by 1 DESC LIMIT 0,3";
                                
                                $run_products = mysqli_query($con,$get_products);
                            
                                while($row_products=mysqli_fetch_array($run_products)){
                                    
                                    $pro_id = $row_products['product_id'];
                                    
                                    $pro_title = $row_products['product_title'];
                                    
                                    $pro_img1 = $row_products['product_img1'];
                                    
                                    $pro_price = $row_products['product_price'];
                                    
                                    echo "
                                    
                                        <div class='col-md-3 col-sm-6 justify-content-center' >
                                        
                                            <div class='product line-height'>
                                            
                                                <a href='details.php?pro_id=$pro_id'>
                                                
                                                    <img class='img-fluid' src='admin_area/product_images/$pro_img1'>
                                                
                                                </a>
                                                
                                                <div class='text'>
                                                
                                                    <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                                    
                                                    <p class='price'> $ $pro_price </p>
                                                
                                                
                                                </div>
                                            
                                            </div>
                                        
                                        </div>
                                    
                                    
                                    ";
                                    
                                }
                        
                           ?>
                        
                    </div><!--row end-->
                    
	    		</div><!--col-md-9 end-->
	    		
	    		
    		</div>
    	</div><!--container end-->
    </div><!--content end-->


    <?php
      include("includes/footer.php");

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>