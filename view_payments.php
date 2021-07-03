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
                               <th> Invoice No </th>
                               <th> Amount </th>
                               <th> Payment Mothod </th>
                               <th> Reference NO </th>
                               <th> Payment Code </th>
                               <th> Payment Date </th>
                               <th> Delete Payment </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                          
                          <?php
        
                            $i = 0;
                                
                            $get_payment = "select * from payments";
                            
                            $run_payment = mysqli_query($con,$get_payment);
                            
                           while($row_payment = mysqli_fetch_array($run_payment)){
                                
                                $prament_id = $row_payment['payment_id'];
                                
                                $invoice_no = $row_payment['invoice_no'];
                                
                                $amount = $row_payment['amount'];
                                
                                $pay_mode = $row_payment['payment_mode'];
                                
                                $ref_no = $row_payment['ref_no'];
                               
                                $code = $row_payment['code'];
                               
                                $pay_date = $row_payment['payment_date'];
                               
                               $i++;
                               
                           ?>
                          
                           <tr>
                               <td> <?php echo $i; ?> </td>
                               <td> <?php echo $invoice_no; ?> </td>
                               <td> <?php echo $amount; ?> </td>
                               <td> <?php echo $pay_mode; ?> </td>
                               <td> <?php echo $ref_no; ?> </td>
                               <td> <?php echo $code; ?> </td>
                               <td> <?php echo $pay_date; ?> </td>
                               <td>
                               
                                   <a href="index.php?delete_payment=<?php echo $prament_id; ?>"> 
                                       
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