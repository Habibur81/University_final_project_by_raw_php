<?php
    $active='Shop';
    include("includes/header.php");
?>   

    <div id="content"><!--content begging-->
    	<div class="container-fluid"><!--container begging-->
    		<div class="row"><!--row begging-->
	    		<div class="col-md-12"><!--col-md-12 begging-->
	    			<ul class="breadcrumb">
	    				<li>
	    					<a href="index.php">Home</a>
	    				</li>
	    				<li>
	    					Shop
	    				</li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div class="col-md-3"><!--col-md-3 begging-->
	    			<?php
				      include("includes/sidebar.php");
				    ?>
	    		</div><!--col-md-3 end-->
	    		
	    		<div class="col-md-9"><!--col-md-9 start-->
                    
                    
                    <?php
                    
                        if(!isset($_GET['p_cat'])){
                            
                            if (!isset($_GET['cat'])){

                                echo "
                                    <div class='box'>
                                        <h3>Shop</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dolore recusandae minima, libero deserunt consequatur totam? A iusto soluta temporibus rem doloremque nisi esse laborum enim. Ut, expedita blanditiis reprehenderit.
                                            </p>
                                    </div>

                                ";
                                
                            }
                        }    
                        
                    ?>
                    <div class="row"><!--row beging-->
                    
                        <?php
                    
                            if(!isset($_GET['p_cat'])){
                            
                                if (!isset($_GET['cat'])){
                                    
                                    $per_page = 6;
                                    
                                    if(isset($_GET['page'])){
                                        
                                            $page = $_GET['page'];
                                         }
                                        else{
                                            
                                            $page = 1;
                                            
                                        }
                                        
                                        $start_from = ($page-1)* $per_page;
                                        $get_products = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                                        
                                        $run_products = mysqli_query($con,$get_products);
                                        
                                        while($row_products = mysqli_fetch_array($run_products)){
                                            
                                            $pro_id = $row_products['product_id'];

                                            $pro_title = $row_products['product_title'];

                                            $pro_price = $row_products['product_price'];

                                            $pro_img1 = $row_products['product_img1'];
                                            
                                            echo "
                                            
                                                <div class='col-md-4 col-sm-6 justify-content-center'>
                                                
                                                    <div class='product'>
                                                    
                                                        <a href='details.php?pro_id=$pro_id'> 
                                                            
                                                            <img class='img-fluid' src='admin_area/product_images/$pro_img1'> 
                                                                
                                                        </a>
                                                        
                                                        <div class='text'>
                                                        
                                                            <h3>
                                                            
                                                                <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                                                                
                                                                <p class='price'>
                                                                
                                                                    $$pro_price
                                                                    
                                                                </p>
                                                                
                                                                <p class='buttons'>
                                                                
                                                                    <a class='btn btn-secondary' href='details.php?pro_id=$pro_id'>
                                                                        View Details
                                                                    </a>
                                                                
                                                                    <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                                                                        <i class='fa fa-shopping-cart'></i>Add To Cart
                                                                    </a>
                                                                
                                                                </p>
                                                            
                                                            </h3>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                            ";
                                    }
                         
                        
                        ?>
                        
                    </div><!--row end-->
                    
                <div class=" nav justify-content-center"><!--justify-content-center beging-->
                   <nav aria-label="Page navigation example" >
                        <ul class="pagination "><!-- pagination beging-->
                        
                            <?php
                                  
                                $query = "select * from products";
                                $result = mysqli_query($con,$query);
                                $total_records = mysqli_num_rows($result);
                                $total_pages = ceil($total_records / $per_page);
                                    
                                    
                                    echo "
                                    
                                        <li class='page-item'>
                                        
                                            <a class='page-link' href='shop.php?page=1'>".'First Page'."</a>
                                        
                                        </li>
                                    
                                    ";
                                    
                                    for($i=1; $i<=$total_pages; $i++){
                                        
                                        echo "
                                    
                                            <li class='page-item'>

                                                <a class='page-link' href='shop.php?page=".$i."'>".$i."</a>

                                            </li>
                                    
                                        ";
                                        
                                    };
                                        
                                        echo "
                                    
                                            <li class='page-item'>

                                                <a class='page-link' href='shop.php?page= $total_pages'>".'Last Page'."</a>

                                            </li>
                                    
                                        ";
                                        
                                    
                                    
                                    }
                                }    
                            
                            ?>    
                        
                        </ul><!-- pagination end-->
                    </nav>  
                </div><!--justify-content-center end-->
                   
                    <div class="row"><!--row start-->
                         
                         <?php 
                        
                            getpcatpro();
                            
                            getcatpro();    
                        
                        ?>
                        
                    </div><!--row end-->
                   
            </div><!--col-md-9 end-->
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