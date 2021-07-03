<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li><!-- active start -->
               
                <i class="fa fa-dashboard"></i> Dashboard / View Categories
                
            </li><!-- active end -->
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->

<div class="row"><!-- row start -->
   <div class="col-lg-12"><!-- col-lg-12 start -->
       <div class="card"><!-- card start -->
            <div class="card-header"><!-- card-header start -->
                <div class="card-title"><!-- card-title start -->
                   
                    <i class="fa fa-tags fa-fw"></i> View Categories
                    
                </div><!-- card-title end -->
            </div><!-- card-header end -->
            
            <div class="card-body"><!-- card-body start -->
                <div class="table-responsive"><!-- table-responsive start -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped start -->
                       
                       <thead><!-- thead start -->
                           <tr><!-- tr start -->
                               <th> Category ID </th>
                               <th> Category Title </th>
                               <th> Category Desc </th>
                               <th> Edit Category </th>
                               <th> Delete Category </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                       
                           <?php
                            
                                $i = 0;
                                
                                $get_cats = "select * from categories";
                
                                $run_cats = mysqli_query($con,$get_cats);
                                
                                while($row_cats = mysqli_fetch_array($run_cats)){
                                    
                                    $cat_id = $row_cats['cat_id'];
                                    
                                    $cat_title = $row_cats['cat_title'];
                                    
                                    $cat_desc = $row_cats['cat_desc'];
                                    
                                    $i++;
                           ?>
                           
                           <tr>
                               <td><?php echo $cat_id; ?></td>
                               <td><?php echo $cat_title; ?></td>
                               <td width="450"><?php echo $cat_desc; ?></td>
                               <td>
                                   <a href="index.php?edit_cat=<?php echo $cat_id; ?>">
                                       
                                       <i class="fa fa-pencil"></i> Edit
                                       
                                   </a>
                               </td>
                               <td>
                                   <a href="index.php?delete_cat=<?php echo $cat_id; ?>">
                                       
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