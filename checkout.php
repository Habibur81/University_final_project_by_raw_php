<?php
     $active='Account';
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
	    					Register
	    				</li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div class="col-md-3"><!--col-md-3 begging-->
	    			<?php
				      include("includes/sidebar.php");
				    ?>
	    		</div><!--col-md-3 end-->
	    		
	    		<div class="col-md-9"><!--col-md-6 begging-->
	    		
                    <?php

                        if(!isset($_SESSION['customer_email'])){

                            include("customer/customer_login.php");

                        }else{

                            include("payment_options.php");

                        }

                    ?>
	    		    
	    		</div><!--col-md-6 end-->
	    		
	    		
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
