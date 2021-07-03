<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li><!-- active start -->
               
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li><!-- active end -->
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->

<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <div class="card"><!-- card start -->
            <div class="card-header"><!-- card-header start -->
                <div class="card-title"><!-- card-title start -->
                   
                    <i class="fa fa-tags"></i> View Orders
                    
                </div><!-- card-title end -->
            </div><!-- card-header end -->
            
            <div class="card-body"><!-- card-body start -->
                <div class="table-responsive"><!-- table-responsive start -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped start -->
                       
                       <thead><!-- thead start -->
                           <tr><!-- tr start -->
                               <th> No </th>
                               <th> Customer Email </th>
                               <th> Invoice No </th>
                               <th> Product Name </th>
                               <th> Product Qty </th>
                               <th> Product Size </th>
                               <th> Order Date </th>
                               <th> Due Amount </th>
                               <th> Status </th>
                               <th> Delete </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                          
                          <?php
        
                            $i = 0;
                                
                            $get_order = "select * from pending_order";
                            
                            $run_order = mysqli_query($con,$get_order);
                            
                           while($row_order = mysqli_fetch_array($run_order)){
                                
                                $order_id = $row_order['order_id'];
                                
                                $c_id = $row_order['customer_id'];
                                
                                $invoice_no = $row_order['invoice_no'];
                                
                                $product_id = $row_order['product_id'];
                                
                                $qty = $row_order['qty'];
                                
                                $size = $row_order['size'];
                               
                                $order_status = $row_order['order_status'];
                                
                               $get_c = "select * from customers where customer_id='$c_id'";
                               
                               $run_c = mysqli_query($con,$get_c);
                               
                               $row_c = mysqli_fetch_array($run_c);
                                
                               $c_email = $row_c['customer_email'];
                               
                               $get_p = "select * from products where product_id='$product_id'";
                               
                               $run_p = mysqli_query($con,$get_p);
                               
                               $row_p = mysqli_fetch_array($run_p);
                               
                               $product_title = $row_p['product_title'];
                               
                               $get_c_order = "select * from customer_orders where order_id='$order_id'";
                               
                               $run_c_order = mysqli_query($con,$get_c_order);
                               
                               $row_c_order = mysqli_fetch_array($run_c_order);
                               
                               $order_date = $row_c_order['order_date'];
                               
                               $order_status = $row_c_order['order_status'];
                               
                               $due_amount = $row_c_order['due_amount'];
                               
                               $i++;
                               
                           ?>
                          
                           <tr>
                               <td> <?php echo $i; ?> </td>
                               <td> <?php echo $c_email; ?> </td>
                               <td> <?php echo $invoice_no; ?> </td>
                               <td> <?php echo $product_title; ?> </td>
                               <td> <?php echo $qty; ?> </td>
                               <td> <?php echo $size; ?> </td>
                               <td> <?php echo $order_date; ?> </td>
                               <td> <?php echo $due_amount; ?> </td>
                               <td> <?php echo $order_status; ?> </td>
                               <td>
                               
                                   <a href="index.php?delete_order=<?php echo $order_id; ?>"> 
                                       
                                       <i class="fa fa-trash-o"></i> Delete
                                       
                                   </a>
                               
                               </td>
                               
                           </tr>
                           
                           <?php } ?>
                       </tbody><!-- tbody end -->
                         
                    </table><!-- table table-striped end -->
                </div><!-- table-responsive end -->
            </div><!-- card-body end -->
            
        </div><!-- card end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->


<?php } ?>