<?php
    $active='Cart';
    include("includes/header.php");
?>   

    <div id="content"><!--content begging-->
    	<div class="container-fluid"><!--container begging-->
    		<div class="row"><!--row end-->
	    		<div class="col-md-12"><!--col-md-12 begging-->
	    			<ul class="breadcrumb">
	    				<li>
	    					<a href="index.php">Home</a>
	    				</li>
	    				<li>
	    					Cart
	    				</li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div id="cart" class="col-md-9"><!--col-md-9 begging-->
	    		    <div class="box"><!--box begging-->
	    		        <form action="cart.php" method="post" enctype="multipart/form-data"><!--form begging-->
                         
                          <div class="text-center"><!--cart top begging-->
                            
                             <h1 class="box-header">Shopping Cart</h1>
                             
                             <?Php
                              
                                $ip_add = getRealIpUser();
                              
                                $select_cart = "select * from cart where ip_add = '$ip_add' ";
                                
                                $run_cart = mysqli_query($con,$select_cart);
                              
                                $count = mysqli_num_rows($run_cart);
                                
                              
                              ?>
                             
	    		            <p class="text-muted">You Currently have <?php echo  $count; ?> item(s) in your cart</p> 
                          </div><!--cart top end-->
                          
	    		            <div class="table-responsive"><!--table-responsive begging-->
	    		                <table class="table"><!--table begging-->
                                
	    		                    <thead><!--thead begging-->
	    		                        <tr><!--tr begging-->
	    		                            <th colspan="1">Product</th>
	    		                            <th>Name</th>
	    		                            <th>Quantity</th>
	    		                            <th>Unit Price</th>
	    		                            <th>Size</th>
	    		                            <th colspan="1">Delete</th>
	    		                            <th colspan="2">Sub-Total</th>
	    		                        </tr><!--tr end-->
	    		                    </thead><!--thead end-->
	    		                    
	    		                    <tbody><!--tbody begging-->
                                        
                                        <?php
                                        
                                            $total = 0;
                                        
                                            while( $row_cart = mysqli_fetch_array($run_cart) ){
                                                
                                                $pro_id = $row_cart['p_id'];
                                                
                                                $pro_size = $row_cart['size'];
                                                
                                                $pro_qty = $row_cart['qty'];
                                                
                                                $get_products = "select * from products where product_id = '$pro_id' ";
                                                
                                                $run_products = mysqli_query($con,$get_products);
                                                
                                                while($row_products = mysqli_fetch_array($run_products) ){
                                                    
                                                    $product_title = $row_products['product_title'];
                                                    
                                                    $product_img1 = $row_products['product_img1'];
                                                    
                                                    $only_price = $row_products['product_price'];
                                                    
                                                    $sub_total = $row_products['product_price']*$pro_qty;
                                                    
                                                    $total += $sub_total ;
                                        
                                        ?>
                                    
	    		                        <tr><!--tr begging-->
	    		                            <td>
	    		                               <img class="img-fluid" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="product p2"> 
	    		                            </td>
	    		                            <td>
	    		                             <a href="details.php?pro_id=<?php echo $pro_id; ?> <?php $pro_id?>"> <?php echo $product_title; ?> </a>
	    		                            </td>
	    		                            <td>
	    		                                <?php echo $pro_qty; ?>
	    		                            </td>
	    		                            <td>
	    		                                <?php echo "$".$only_price; ?>
	    		                            </td>
	    		                            <td>
	    		                               <?php echo $pro_size; ?>
	    		                            </td>
	    		                            <td>
	    		                                <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
	    		                            </td>
	    		                            <td>
	    		                                <?php echo "$".$sub_total; ?>
	    		                            </td>
	    		                        </tr><!--tr end-->
	    		                        
	    		                        <?php
                                                            
                                                 }    
                                                    
                                            } ?>
	    		                        
	    		                    </tbody><!--tbody end-->
	    		                    
	    		                    <tfoot><!--tfoot begging-->
                                        <tr>
                                          <th colspan="5">Total</th>
                                          <th colspan="2"><?php echo "$".$total; ?></th>
                                        </tr>
                                    </tfoot><!--tfoot end-->
	    		                    
	    		                </table><!--table end-->
	    		            </div><!--table-responsive end-->
	    		            
	    		            <div class="box-footer"><!--box-footer begging -->
                            
	    		                <div class="float-left"><!--float-left begging -->
	    		                    <a href="index.php" class="btn btn-secondary">
	    		                       <i class="fa fa-chevron-left"></i>Continus Shopping 
	    		                    </a>
	    		                </div><!--float-left end -->
	    		                
	    		                <div class="float-right"><!--float-right begging -->
                                
	    		                    <button type="submit" name="update" value="Update cart" class="btn btn-secondary">
	    		                       <i class="fa fa-refresh"></i>Delete from Cart 
	    		                    </button>
	    		                    
	    		                    <a href="checkout.php" class="btn btn-secondary">
	    		                        Proceed Checkout <i class="fa fa-chevron-right"></i>
	    		                    </a>
	    		                    
	    		                </div><!--float-right end -->
	    		                
	    		            </div><!--box-footer end -->
	    		            
	    		        </form><!--form end-->
	    		    </div><!--box end-->
                   
                   <?php
                    
                        function update_cart(){
                            
                            global $con;
                            
                            if(isset($_POST['update'])){
                                
                                foreach($_POST['remove'] as $remove_id){
                                    
                                    $delete_product = "delete from cart where p_id = '$remove_id' ";
                                    
                                    $run_delete = mysqli_query($con,$delete_product);
                                    
                                    if($run_delete){
                                        
                                        echo "<script>window.open('cart.php','_self')</script>";
                                        
                                    }
                                }
                                
                            }
                        }
                    
                        echo @$up_cart = update_cart();
                    
                    ?>
                    
                    
                    
                    <div class="row"><!--row same-heigh-row begging-->
                        <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 begging-->
                            <div class="box card-deck">
                                <h3 class="text-center">Product You Maybe Like</h3>
                            </div>
                        </div><!--col-md-3 col-sm-6 end-->
                        
                        <?php
                        
                            $gets_products = "select * from products order by rand() LIMIT 0,3";
                            
                            $run_products = mysqli_query($con,$gets_products);
                            
                            while($row_products = mysqli_fetch_array($run_products)){
                                
                                $pro_id = $row_products['product_id'];
                                
                                $pro_title = $row_products['product_title'];
                                
                                $pro_price = $row_products['product_price'];
                                
                                $pro_img1 = $row_products['product_img1'];
                                
                                echo "
                        
                                    <div class='col-md-3 col-sm-6'>
                                        <div class='product'>
                                            <a href='details.php?pro_id = $pro_id'>
                                                <img class='img-fluid' src='admin_area/product_images/$pro_img1' alt='product-6'>
                                            </a>
                                            <div class='text'>
                                                <h3><a href='details.php'> $pro_title </a></h3>
                                                <p class='price'> $$pro_price </p>
                                            </div>
                                        </div>
                                    </div><!--col-md-3 col-sm-6 end-->
                                
                                ";
                            }
                        
                        ?>
                        
                        
                    </div><!--row end-->
                    
                    
	    		</div><!--col-md-9 end-->
	    		
	    		
	    		<div class="col-md-3"><!--col-md-6 begging-->
	    		    <div id="order-summy" class="box"><!--order-summy and box begging-->
	    		        <div class="box-header"><!-- box-header begging-->
	    		            <h4>Order Summary </h4>
	    		        </div><!-- box-header end-->
	    		        <p class="text-muted"><!-- text-muted begging-->
	    		            Shipping and additional costs are calculed bases on value you have entered
	    		        </p><!-- text-muted end -->
	    		        <div class="table-responsive"><!-- table-responsive begging-->
	    		            <table class="table">
	    		                <tbody>
                                
	    		                    <tr>
	    		                        <td>Order All Sub-Total</td>
	    		                        <th> <?php echo "$".$total; ?> </th>
	    		                    </tr>
	    		                    
	    		                    <tr>
	    		                        <td>Shipping and Headling</td>
	    		                        <th>$0</th>
	    		                    </tr>
	    		                    
	    		                     <tr>
	    		                        <td>Tax</td>
	    		                        <th>$0</th>
	    		                    </tr>
	    		                    
	    		                    <tr class="total">
	    		                        <td>Total</td>
	    		                        <th> <?php echo "$".$total; ?> </th>
	    		                    </tr>
	    		                    
	    		                </tbody>
	    		            </table>
	    		        </div><!-- table-responsive end-->
	    		    </div><!--order-summy and box end-->
	    		</div><!--col-md-3 end-->
	    		
	       </div><!--row end-->
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