<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<div class="row"><!--row start-->
    <div class="col-lg-12"><!--col-lg-12 start-->
        <h2 class="jumbotron bg-secondary text-white text-center"> Dashboard </h2><!--jumbotron start-->
        
        <ol class="breadcrumb bg-secondary text-white"><!--breadcrumb start-->
            <li class="active" style="padding:0px;">
               
                <i class="fa fa-dashboard"></i> Dashboard
                
            </li>
        </ol><!--breadcrumb end-->
        
    </div><!--col-lg-12 end-->
</div><!--row end-->


<div class="row"><!--row start-->
   
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start-->
        <div class="card bg-primary"><!--card start-->
            
            <div class="card-header"><!--card-header start-->
                <div class="row"><!-- row start-->
                   
                    <div class=" col-xs-3"><!--col-xs-3 start-->
                        
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!--col-xs-3 end-->
                    
                    
                    <div class=" ml-auto col-xs-9"><!--col-xs-9 text-right start-->
                        <div class="huge"> <?php echo $count_products; ?> </div><!-- huge end-->
                        <div><p> Products </p></div>
                    </div><!--col-xs-9 text-right end-->
                    
                    
                </div><!--card-header row end-->
            </div><!--card-header end-->
            
            <a href="index.php?view_products" class=" bg-dark"><!--index.php?view_products start-->
                <div class="card-footer"><!--card-footer start-->
                    
                    <span class="float-left text-primary"> View Details </span>
                    
                    <span class="float-right text-primary"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                    
                </div><!--card-footer end-->
            </a><!--index.php?view_products end-->
            
            
        </div><!--card end-->
    </div><!--col-lg-3 col-md-6 end-->

     
     
   
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start-->
        <div class="card bg-success"><!--card start-->
            
            <div class="card-header"><!--card-header start-->
                <div class="row"><!-- row start-->
                   
                    <div class="col-xs-3"><!--col-xs-3 start-->
                        
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!--col-xs-3 end-->
                    
                    
                    <div class=" ml-auto col-xs-9" ><!--col-xs-9 text-right start-->
                        <div class="huge"> <?php echo $count_customers; ?> </div><!-- huge end-->
                        <div><p> Customers </p></div>
                    </div><!--col-xs-9 text-right end-->
                    
                    
                </div><!--card-header row end-->
            </div><!--card-header end-->
            
            <a href="index.php?view_customers" class="bg-dark"><!--index.php?view_products start-->
                <div class="card-footer"><!--card-footer start-->
                    
                    <span class="float-left text-success"> View Details </span>
                    
                    <span class="float-right text-success"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                    
                </div><!--card-footer end-->
            </a><!--index.php?view_products end-->
            
            
        </div><!--card end-->
    </div><!--col-lg-3 col-md-6 end-->

     
     
   
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start-->
        <div class="card bg-warning"><!--card start-->
            
            <div class="card-header"><!--card-header start-->
                <div class="row"><!-- row start-->
                   
                    <div class="col-xs-3"><!--col-xs-3 start-->
                        
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!--col-xs-3 end-->
                    
                    
                    <div class=" ml-auto col-xs-9" ><!--col-xs-9 text-right start-->
                        <div class="huge"> <?php echo $count_p_categories; ?> </div><!-- huge end-->
                        <div><p> Product Catagories </p></div>
                    </div><!--col-xs-9 text-right end-->
                    
                    
                </div><!--card-header row end-->
            </div><!--card-header end-->
            
            <a href="index.php?view_p_cats" class="bg-dark"><!--index.php?view_products start-->
                <div class="card-footer"><!--card-footer start-->
                    
                    <span class="float-left text-warning"> View Details </span>
                    
                    <span class="float-right text-warning"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                    
                </div><!--card-footer end-->
            </a><!--index.php?view_products end-->
            
            
        </div><!--card end-->
    </div><!--col-lg-3 col-md-6 end-->

     
     
   
    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start-->
        <div class="card bg-danger"><!--card start-->
            
            <div class="card-header"><!--card-header start-->
                <div class="row"><!-- row start-->
                   
                    <div class="col-xs-3"><!--col-xs-3 start-->
                        
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!--col-xs-3 end-->
                    
                    
                    <div class=" ml-auto col-xs-9" ><!--col-xs-9 text-right start-->
                        <div class="huge"> <?php echo $count_pending_order; ?> </div><!-- huge end-->
                        <div><p> Orders </p></div>
                    </div><!--col-xs-9 text-right end-->
                    
                    
                </div><!--card-header row end-->
            </div><!--card-header end-->
            
            <a href="index.php?view_orders" class="bg-dark"><!--index.php?view_products start-->
                <div class="card-footer"><!--card-footer start-->
                    
                    <span class="float-left text-danger"> View Details </span>
                    
                    <span class="float-right text-danger"><i class="fa fa-arrow-circle-right"></i></span>
                    
                    <div class="clearfix"></div>
                    
                </div><!--card-footer end-->
            </a><!--index.php?view_products end-->
            
            
        </div><!--card end-->
    </div><!--col-lg-3 col-md-6 end-->
    
    
</div><!--row end-->


<div class="row" style="padding-top:30px;"><!-- row start-->
    <div class="col-lg-9"><!-- col-lg-8 start-->
        <div class="card"><!-- card bg-primary start-->
           
            <div class="card-header  bg-primary"><!-- card-header start-->
                <h5 class="card-title"><!-- card-title start-->
                   
                   <i class="fa fa-money fa-fw"></i> New Orders
                    
                </h5><!-- card-title end-->
            </div><!-- card-header end-->
            
            <div class="card-body"><!-- card-body start-->
                <div class="table-responsive"><!-- table-responsive start-->
                    <table class="table table-hover table-striped table-bordered "><!-- table start-->
                       
                        <thead><!-- thead start-->
                           <tr><!-- tr start-->
                               <th> Order No </th>
                               <th> Customer Email </th>
                               <th> Invoice No </th>
                               <th> Product ID </th>
                               <th> Product Qty </th>
                               <th> Product Size </th>
                               <th> Status </th>
                            </tr><!-- tr end-->
                        </thead><!-- thead end-->
                        
                        <tbody><!-- tbody start-->
                           
                           <?php
                                
                                $get_order = "select * from pending_order order by 1 DESC LIMIT 0,5";
                            
                                $run_order = mysqli_query($con,$get_order);
            
                                while($row_order = mysqli_fetch_array($run_order)){
                                    
                                    $order_id = $row_order['order_id'];
                                    
                                    $c_id = $row_order['customer_id'];
                                    
                                    $invoice_no = $row_order['invoice_no'];
                                    
                                    $product_id = $row_order['product_id'];
                                    
                                    $qty = $row_order['qty'];
                                    
                                    $size = $row_order['size'];
                                    
                                    $order_status = $row_order['order_status'];
                                
                            ?>
                           
                            <tr><!-- tr start-->
                                <td> <?php echo $order_id; ?> </td>
                                <td> 
                                
                                    <?php
                                    
                                        $get_customer = "select * from customers where customer_id = '$c_id'";
                                    
                                        $run_customer = mysqli_query($con,$get_customer);
                                    
                                        $row_customer = mysqli_fetch_array($run_customer);
                                    
                                        $customer_email = $row_customer['customer_email'];
                                    
                                        echo $customer_email;
                                    
                                    ?>
                                </td>
                                <td> <?php echo $invoice_no; ?>  </td>
                                <td> <?php echo $product_id; ?> </td>
                                <td> <?php echo $qty; ?>  </td>
                                <td> <?php echo $size; ?>  </td>
                                <td> <?php 
                                    
                                        if($order_status=='pending'){
                                            
                                            echo $order_status="pending";
                                        }else{
                                            
                                            echo $order_status="Complete";
                                        
                                        }
                                    
                                    ?> 
                                </td>
                            </tr><!-- tr end-->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody end-->
                        

                    </table><!-- table start-->
                </div><!-- table-responsive end-->
                
                <div class="text-right">
                   
                   <a href="index.php?view_orders">
                       
                       View All Orders <i class="fa fa-arrow-circle-right"></i>
                       
                   </a>
                    
                </div>
                
            </div><!-- card-body end-->
            
        </div><!-- card bg-primary end-->
    </div><!-- col-lg-8 end-->
    
    <div class="col-lg-3" style="font-size:12px;"><!-- col-lg-3 start-->
        <div class="card"><!-- card start-->
            <div class="card-body"><!-- card-body start-->
               
                <div class=" mb-md thumb-info img-thumbnail"><!-- img-thumbnail start-->
                   
                   <img src="admin_images/<?php echo $admin_image; ?>" alt="amdin_image" class="rounded img-fluid">
                   
                   <div class=" thumb-info-title card-title text-center font-italic font-weight-bold bg-success rounded" ><!-- card-title start-->
                       
                       <span> <?php echo $admin_name; ?> </span>
                       <span> <?php echo $admin_job; ?> </span>
                       
                   </div><!-- card-title end-->
                    
                </div><!-- img-thumbnail end-->
                
                
                <div class="mb-md"><!-- mb-md start-->
                    <div><!-- font-weight-bold start-->
                        <i class="fa fa-user"></i><span class="font-weight-bold"> Email: </span> <?php echo $admin_email; ?> <br>
                        <i class="fa fa-flag"></i><span class="font-weight-bold"> Country: </span> <?php echo $admin_country; ?> <br>
                        <i class="fa fa-envelope"></i><span class="font-weight-bold"> Contact: </span> <?php echo $admin_contact; ?> <br>
                    </div><!-- font-weight-bold end-->
                    
                    <hr class="dotted short" style="padding-top:10px 0px 10px 0;">
                    
                    <h5 class="text-muted text-center"> About Me </h5>
                    
                    <p><!-- p start-->
                       
                        <?php
                        
                            echo $admin_about;        
                    
                        ?>
                          
                    </p><!-- p end-->
                    
                </div><!-- mb-md end-->
                
                
            </div><!-- card-body end-->
        </div><!-- card end-->
    </div><!-- col-lg-3 end-->
    
</div><!-- row end-->


<?php } ?>