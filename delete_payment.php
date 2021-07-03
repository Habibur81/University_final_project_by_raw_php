<?php

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{


?>

<?php

    if(isset($_GET['delete_payment'])){
        
        $delete_pay_id = $_GET['delete_payment'];
        
        $delete_pay_query = "delete from payments where payment_id='$delete_pay_id'";
        
        $run_delete = mysqli_query($con,$delete_pay_query);
        
        if($run_delete){
            
            echo "<script>alert('delete from payment successfully')</script>";
            echo "<script>window.open('index.php?view_payments','_self')</script>";
            
        }
        
    }


?>





<?php }?>