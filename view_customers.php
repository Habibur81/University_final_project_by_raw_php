<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li><!-- active start -->
               
                <i class="fa fa-dashboard"></i> Dashboard / View Customers
                
            </li><!-- active end -->
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->

<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <div class="card"><!-- card start -->
            <div class="card-header"><!-- card-header start -->
                <div class="card-title"><!-- card-title start -->
                   
                    <i class="fa fa-tags"></i> View Customers
                    
                </div><!-- card-title end -->
            </div><!-- card-header end -->
            
            <div class="card-body"><!-- card-body start -->
                <div class="table-responsive"><!-- table-responsive start -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped start -->
                       
                       <thead><!-- thead start -->
                           <tr><!-- tr start -->
                               <th> No </th>
                               <th> Name </th>
                               <th> Image </th>
                               <th> E-mail </th>
                               <th> Country </th>
                               <th> City </th>
                               <th> Address</th>
                               <th> Contact </th>
                               <th> Delete </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                          
                          <?php
        
                            $i = 0;
                                
                            $get_c = "select * from customers";
                            
                            $run_c = mysqli_query($con,$get_c);
                            
                           while($row_c = mysqli_fetch_array($run_c)){
                                
                                $c_id = $row_c['customer_id'];
                                
                                $c_name = $row_c['customer_name'];
                                
                                $c_img = $row_c['customer_image'];
                                
                                $c_email = $row_c['customer_email'];
                                
                                $c_country = $row_c['customer_country'];
                                
                                $c_city = $row_c['customer_city'];
                               
                                $c_Address = $row_c['customer_address'];
                               
                                $c_Contact = $row_c['customer_contact'];
                               
                               $i++;
                               
                           ?>
                          
                           <tr>
                               <td> <?php echo $i; ?> </td>
                               <td> <?php echo $c_name; ?> </td>
                               <td> 
                                <img src="../customer/customer_images/<?php echo $c_img; ?>" width="60" height="60" alt="c_img">
                                </td>
                               <td> <?php echo $c_email; ?> </td>
                               <td><?php echo $c_country; ?> </td>
                               <td> <?php echo $c_city; ?> </td>
                               <td> <?php echo $c_Address; ?> </td>
                               <td> <?php echo $c_Contact; ?> </td>
                               <td>
                               
                                   <a href="index.php?delete_customer=<?php echo $c_id; ?>"> 
                                       
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