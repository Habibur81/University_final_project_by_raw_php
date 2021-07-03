<?php
    $active='Contact';
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
	    					Contact Us
	    				</li>
	    			</ul>
	    		</div><!--col-md-12 end-->
	    		
	    		<div class="col-md-3"><!--col-md-3 begging-->
	    			<?php
				      include("includes/sidebar.php");
				    ?>
	    		</div><!--col-md-3 end-->
	    		
	    		<div class="col-md-9"><!--col-md-9 begging-->
	    		    <div class="card"><!--box begging-->
	    		        <div class="card-header"><!--box-header begging-->
	    		            <div class="text-center"><!--text-center begging-->
	    		                <h2>Feel free to Contact Us</h2>
	    		                <p class="text-muted"><!--text-muted begging-->
	    		                    If You have any question,feel free to contact us.Ous Service work <strong>24</strong>
	    		                </p><!--text-muted end-->
	    		            </div><!--text-center end-->
	    		            
	    		            
	    		            <form action="contact.php" method="post"><!--form begging-->
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Name</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="name" placeholder="name" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Email</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="email" placeholder="email" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Subject</label>
	    		                     <div class="col-sm-9">
	    		                         <input type="text" class="form-control" name="subject" placeholder="subject" required >
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="form-group row"><!--form-group row begging-->
	    		                     <label class="col-sm-3 col-form-label" >Message</label>
	    		                     <div class="col-sm-9">
	    		                         <textarea name="message" class="form-control" placeholder="message"></textarea>
	    		                     </div>
	    		                 </div><!--form-group row end-->
	    		                 
	    		                 <div class="text-center"><!--text-center begging-->
	    		                     <button type="submit" name="submit" class="btn btn-secondary">
	    		                         <i class="fa fa-user" aria-hidden="true"></i> Send Message
	    		                     </button>
	    		                 </div><!--text-center end-->
	    		            </form><!--form end-->
	    		            
	    		            <?php
                                ///admin receives message with this
                                
                                if(isset($_POST['submit'])){
                                    
                                    $sender_name = $_POST['name'];
                                    
                                    $sender_email = $_POST['email'];
                                    
                                    $sender_subject = $_POST['subject'];
                                    
                                    $sender_message = $_POST['message'];
                                    
                                    $receiver_email = "mdhabiburr375@gmail.com";
                                    
                                    mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                                    
                                    ///auto reply to sender with this
                                    
                                    $email = $_POST['email'];
                                    
                                    $subject = "welcome to my website";
                                    
                                    $msg = "Thanks for sending us message. ASAP we will reply your message";
                                    
                                    $from = "mdhabiburr375@gmail.com";
                                    
                                    mail($email,$subject,$msg,$from);
                                    
                                    echo "<h2> Your message has sent sucessfully</h2>";
                                    
                                }    
                            
                            ?>
	    		            
	    		            
	    		        </div><!--box-header end-->
	    		    </div><!--box end-->
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