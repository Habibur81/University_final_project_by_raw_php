<div class="card"><!--card begging-->
  
    <?php
    
        $session_email = $_SESSION['customer_email'];
        
        $select_customer = "select * from customers where customer_email='$session_email'";
    
        $run_customer = mysqli_query($con,$select_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
    
        $customer_id = $row_customer['customer_id'];
    
    ?>
   
    <div class="card-header"><!--card-header begging-->
        <h1 class="text-center"> Payment Option For You. </h1>
        <p class="lead text-center">
            <a  href="order.php?c_id=<?php echo $customer_id ?>"> Online Payment </a>
        </p>
    </div><!--card-header end-->
    
    <div class="text-center"><!--text-center begging-->
        <p class="lead">
            <a href="#">
               Paypall pament
                <img class="img-fluid" src="images/paypall_img.png" alt="img-paypall">
            </a>
        </p>
    </div><!--text-center end-->
    
</div><!--card end-->