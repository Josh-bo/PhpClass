<?php

session_start();
require 'connection.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM adminstable WHERE email = '$email'";
        $con = $dbConnection -> query($query);
    
        if($con -> num_rows > 0){
            $admin = $con -> fetch_assoc();
            // print_r($admin['password']);  
            $password_verify = password_verify($password, $admin['password']);
            if ($password_verify) {
                // echo "Password is correct!";
                // $_SESSION['adminId'] = $admin['admin_id'];
                //   echo $_SESSION['adminId'];
                  $_SESSION["username"] = "john_doe";
                //   echo "Username: " . $_SESSION["username"];
                header('location:adminDashboard.php');
            } else {
               $_SESSION['message'] = "Incorrect password!";
            }
        }
        else{
               $_SESSION['message'] = "Invalid Email!";

            echo 'email not exist!';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="container pt-5">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='post'>
            <div class="row mx-auto justify-content-center text-center mt-5 border border-success rounded-3 col-sm-12 col-md-6 col-lg-7">
                 <div class="w-100 mt-3 pb-3 alert alert-danger" id="sg">
                    <?php
                    //    session_start();
                    if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        }
                        session_unset();
                    ?>
                </div>
                <h1 class="my-2 text-success" >ADMIN LOGIN</h1><hr class="text-success">
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <input type="email" name="email" id="" class="form-control" placeholder="Email">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <input type="text" name="password" id="" class="form-control" placeholder="Password">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <button  type="submit" name="submit" value="submit"  class="btn btn-success w-100">LOGIN</button>
                </div>
    
            </div>
        </form>
    </section>
</body>
</html>