<?php
    session_start();
    require 'connection.php';

    if(isset($_POST['submit'])){
        print_r($_POST);
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = "SELECT * FROM adminsTable WHERE email = '$email'";
        $SavedQuery = $dbConnection -> query($query);

        if($SavedQuery -> num_rows > 0){
            $admin = $SavedQuery -> fetch_assoc();
            $_SESSION['message'] = 'Email already exist!';
            header('location:admin.php');  
        }
        else{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            echo $hashedPassword;

           $query = "INSERT INTO adminsTable (`email`, `password`, `userName`) VALUES (?,?,?)";
    
            $prepare = $dbConnection->prepare($query);
           $prepare -> bind_param('sss', $email, $hashedPassword, $userName);
           $execute = $prepare -> execute();
    
           if($execute){
               echo 'Successfully Saved';
               $_SESSION['adminId'] = $admin['admin_id'];
               header('location:adminLogin.php');
           }
           else{
               $_SESSION['message'] = "Unsuccessful Registration!";
               header('location:admin.php');
           }
        }

    }
    else{
        header('location:admin.php');
    }
?>