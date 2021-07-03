<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?> 
<div class="row"><!-- row start -->
    <div class="col-lg-12"><!-- col-lg-12 start -->
        <ol class="breadcrumb"><!-- breadcrumb start -->
            <li><!-- active start -->
               
                <i class="fa fa-dashboard"></i> Dashboard / View Slides
                
            </li><!-- active end -->
        </ol><!-- breadcrumb end -->
    </div><!-- col-lg-12 end -->
</div><!-- row end -->

<div class="row"><!-- row start -->
   <div class="col-lg-12"><!-- col-lg-12 start -->
       <div class="card"><!-- card start -->
            <div class="card-header"><!-- card-header start -->
                <div class="card-title"><!-- card-title start -->
                   
                    <i class="fa fa-tags fa-fw"></i> View Slides
                    
                </div><!-- card-title end -->
            </div><!-- card-header end -->
            
            <div class="card-body"><!-- card-body start -->
                <div class="table-responsive"><!-- table-responsive start -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped start -->
                       
                       <thead><!-- thead start -->
                           <tr><!-- tr start -->
                               <th> Slide ID </th>
                               <th> Slide Name </th>
                               <th> Slide Imane </th>
                               <th> Edit Slide </th>
                               <th> Delete Slide </th>
                           </tr><!-- tr end -->
                       </thead><!-- thead end -->
                       
                       <tbody><!-- tbody start -->
                       
                           <?php
                            
                                $i = 0;
                                
                                $get_slides = "select * from slider";
                
                                $run_slides = mysqli_query($con,$get_slides);
                                
                                while($row_slides = mysqli_fetch_array($run_slides)){
                                    
                                    $slide_id = $row_slides['slide_id'];
                                    
                                    $slide_name = $row_slides['slide_name'];
                                    
                                    $slide_image = $row_slides['slide_image'];
                                    
                                    $i++;
                           ?>
                           
                           <tr>
                               <td><?php echo $slide_id; ?></td>
                               <td><?php echo $slide_name; ?></td>
                               <td>
                                   <img src="slides_images/<?php echo $slide_image; ?>" alt="slide_image" class="img-fluid" width="100" height="100">
                               </td>
                               <td>
                                   <a href="index.php?edit_slide=<?php echo $slide_id; ?>">
                                       
                                       <i class="fa fa-pencil"></i> Edit
                                       
                                   </a>
                               </td>
                               <td>
                                   <a href="index.php?delete_slide=<?php echo $slide_id; ?>">
                                       
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