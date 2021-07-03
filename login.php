<?php

    session_start();
    
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
   <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Shop</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- font-awssome -->
        <link rel="stylesheet"  href="font-awsome/css/font-awesome.min.css">
        
        <!-- login css -->
         <link rel="stylesheet" href="css/login.css"> 
    
    </head>
    <body>
    
        <div class="container"><!-- container start -->
            <form action="" class="form-login" method="post"><!-- form start -->
                <h2 class="form-loging-heading"> Admin Login </h2>
                
                 <input type="email" class="form-control" name="admin_email" placeholder="Enter Email" required>
                 
                 <input type="password" class="form-control" name="admin_pass" placeholder="Enter Password" required>
                 
                 <button type="submit" class="btn btn-secondary btn-lg btn-block" name="admin_login">
                     
                     Login
                     
                 </button>
                
            </form><!-- form end -->
        </div><!-- container end -->

    </body>
</html>

<?php

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        
        $get_admin = "select * from admins where admin_email = '$admin_email' AND admin_pass = '$admin_pass'";
        
        $run_admin = mysqli_query($con, $get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count == 1){
            
            $_SESSION['admin_email'] = $admin_email;
            
            echo "<script>alert('logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong')</script>";
            
        }
        
    }

?>
