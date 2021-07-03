<div id="footer">
	<div class="container-fluid">

		<div class="row">
			<div class="col-sm-6 col-md-3">

			<h4>Pages</h4>
				<ul class="footer_page">
					<li><a href="cart.php">Shopping Cart</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li><a href="customer/my_account.php">My Account</a></li>
				</ul>

				<hr>

				<h4>User Section</h4>
				<ul class="footer_user_sec">
                    
                    <?php
                                    
                        if(!isset($_SESSION['customer_email'])){
                                        
                            echo"<a class='nav-link' href='' target='blank'>Login</a>";
                        }else{
                            echo"<a class='nav-link' href='customer/my_account.php?my_orders' target='blank'>My Account</a>";
                                        
                             }   
                                
                    ?>
                    
					<li><a href="customer_register.php">Register</a></li>
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">
				
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Top Products Categories</h4>
				<ul>
                
				    <?php
                        $get_p_cats = "select * from product_categories";
                        $run_p_cats = mysqli_query($con,$get_p_cats);
                        
                        while($row_P_cats=mysqli_fetch_array($run_p_cats)){
                            
                            $p_cat_id = $row_P_cats['p_cat_id']; 
                            $p_cat_title = $row_P_cats['p_cat_title'];
                            echo "
                                <li>
                                    <a href ='shop.php?p_cat=$p_cat_id'>
                                        $p_cat_title
                                    </a>
                                </li>
                            ";
                        }
                    ?>
                    
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">
				
			</div>

			<div class="col-sm-6 col-md-3">

				<h4>Find Us</h4>
				<p>
					<strong>H-shop Media inc</strong>
					<br>Cibubur
					<br>Ciracas
					<br>01750-918981
					<br>mdhabiburr375@gmail.com
					<br><strong>Mrhabib</strong>

				</p>
				<a href="contact.php">Check Our Contact Page</a>
				<hr class="hidden-md hidden-lg hidden-sm">
				
			</div>

			<div class="col-sm-6 col-md-3">
				<h4>Get The News</h4>
				<p class="text-muted" >
					Don't miss our latest update products. 
				</p>

				<form  action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=My_shop_my_ecom_site', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post">
				
					<div class="input-group mb-3">
						<input type="text" class="form-control" name="email">
						<input type="hidden" value="My_shop_my_ecom_site" name="uri"/><input type="hidden" name="loc" value="en_US"/>
				        <input type="submit" value="subscribe" class="btn btn-light">
						
						
					</div>	
					
				</form>
				<hr>

				<h4>Keep In Touch</h4> 
				<p class="social">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-google-plus"></a>
					<a href="#" class="fa fa-envelope"></a>	
				</p>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<div id="copyright">
	<div class="container-fluid">
		<div class="col-md-6">
			<p class="pull-left">&copy 2020 &2021 H-shopping shop</p>
			
		</div>

		<div class="col-md-6" style="float:right;">
			<p class="pull-right">Theme by: <a href="#">Mrhabib</a></p>
			
		</div>
		
	</div>
	
</div>