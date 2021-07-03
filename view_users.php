<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li><!-- active start -->
               
                <i class="fa fa-dashboard"></i> Dashboard / View Users
                
            </li><!-- active end -->
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->

<div class="row"><!-- row start -->
   <div class="col-lg-12"><!-- col-lg-12 start -->
       <div class="card"><!-- card start -->
            <div class="card-header"><!-- card-header start -->
                <div class="card-title"><!-- card-title start -->
                   
                    <i class="fa fa-tags fa-fw"></i> View Users
                    
                </div><!-- card-title end -->
            </div><!-- card-header end -->
            
            <div class="card-body"><!-- card-body start -->
                <div class="table-responsive"><!-- table-responsive start -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped start -->
                       
                       <thead><!-- thead start -->
                           <tr><!-- tr start -->
                               <th> No</th>
                               <th> User Name </th>
                               <th> User Image </th>
                               <th> User E-mail </th>
                               <th> User Conutry </th>
                               <th> User Job </th>
                               <th> User Contact </th>
                               <th> Edit </th>
                               <th> Delete  </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                       
                           <?php
                            
                                $i = 0;
                                
                                $get_users = "select * from admins";
                
                                $run_users = mysqli_query($con,$get_users);
                                
                                while($row_users = mysqli_fetch_array($run_users)){
                                    
                                    $user_id = $row_users['admin_id'];
                                    
                                    $user_name = $row_users['admin_name'];
                                    
                                    $user_image = $row_users['admin_image'];
                                    
                                    $user_email = $row_users['admin_email'];
                                    
                                    $user_country = $row_users['admin_country'];
                                    
                                    $user_job = $row_users['admin_job'];
                                    
                                    $user_contact = $row_users['admin_contact'];
                                    
                                    $i++;
                           ?>
                           
                           <tr>
                               <td><?php echo $i; ?></td>
                               <td><?php echo $user_name; ?></td>
                               <td>
                                   
                                   <img src="admin_images/<?php echo $user_image; ?>" alt="$user_image" width="60" height="60">
                               
                               </td>
                               <td> <?php echo $user_email; ?> </td>
                               <td> <?php echo $user_country; ?> </td>
                               <td> <?php echo $user_job; ?> </td>
                               <td> <?php echo $user_contact; ?> </td>
                               
                               <td>
                                   <a href="index.php?user_profile=<?php echo $user_id; ?>">
                                       
                                       <i class="fa fa-pencil"></i> Edit
                                       
                                   </a>
                               </td>
                               <td>
                                   <a href="index.php?delete_user=<?php echo $user_id; ?>">
                                       
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