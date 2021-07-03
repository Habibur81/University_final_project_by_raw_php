<div class="text-center"><!-- text-center begging -->
    <h1>My Orders</h1>
    <p class="lead">Your orders on one place</p>
    <p class="text-muted">
        If you have any questions, feel free to <a href="../contact.php">Contact Us</a>. Our Customer Service work <steong>24</steong>
    </p>
</div><!-- text-center end -->
<hr>
<div class="table-responsive text-center"><!-- table begging -->
    <table class=" table table-bordered table-hover "><!-- table-bordered begging -->
        <thead><!-- thead begging -->
            <tr>
                <th>ON: </th>
                <th>Due Account </th>
                <th>Invoice No: </th>
                <th>Qty: </th>
                <th>Size: </th>
                <th>Order Date: </th>
                <th>paid/Unpaid </th>
                <th>Status: </th>
            </tr>
        </thead><!-- thead end -->
        
        <tbody><!-- tbody begging -->
            
            <?php
                
                $customer_session = $_SESSION['customer_email'];
                
                $get_customer = "select * from customers where customer_email='$customer_session'";
                
                $run_customer = mysqli_query($con,$get_customer);
                
                $row_customer = mysqli_fetch_array($run_customer);
                
                $customer_id = $row_customer['customer_id'];
            
                $get_orders = "select * from customer_orders where customer_id='$customer_id'";
                
                $run_orders = mysqli_query($con,$get_orders);
            
                $i = 0;
            
                while($row_orders = mysqli_fetch_array($run_orders)){
                    
                    $order_id = $row_orders['order_id'];
                    
                    $due_amount = $row_orders['due_amount'];
                    
                    $invoice_no = $row_orders['invoice_no'];
                    
                    $qty        = $row_orders['qty'];
                    
                    $size       = $row_orders['size'];
                    
                    $order_date = substr($row_orders['order_date'],0,11);
                    
                    $order_status = $row_orders['order_status'];
                    
                    $i++;
                    
                    if($order_status == 'pending'){
                        
                        $order_status = 'Unpaid';
                        
                    }else{
                        
                        $order_status = 'paid';
                        
                    }
            ?>
           
            <tr><!-- tr begging -->
               
                <td> <?php echo $i; ?> </td>
                <td> <?php echo "$".$due_amount; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm">Confirm Paid</a>
                </td>
                
            </tr><!-- tr end -->
            <?php } ?>
            
        </tbody><!-- tbody end -->
        
    </table><!-- table-bordered end -->
</div><!-- table end -->