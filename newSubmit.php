<?php 

require 'connection.php';
session_start();

    if(isset($_POST['submit'])){
        print_r($_POST);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $query = "SELECT * FROM studentstable WHERE email = '$email'";
        $SavedQuery = $dbConnection -> query($query);

        if($SavedQuery -> num_rows > 0){
            $user = $SavedQuery -> fetch_assoc();
            $_SESSION['message'] = 'Email already exist!';
            header('location:newSignUp.php');
            print_r($user);
            print_r($user['user_id']);  
        }
        else{
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            echo $hashedPassword;
    
           $query = "INSERT INTO studentstable (`first_Name`, `last_Name`, `email`, `age`, `address`, `password`) VALUES (?,?,?,?,?,?)";
           $prepare = $dbConnection->prepare($query);
           $prepare -> bind_param('sssisss', $firstName, $lastName, $email, $age, $address, $hashedPassword);
           $execute = $prepare -> execute();
    
        //    $execute = $dbConnection -> query($query);
    
           if($execute){
               echo 'Successfully Saved';
            //    $_SESSION['userId'] = $user['user_id'];
            //    header('location:newLogin.php');
           }
           else{
               $_SESSION['message'] = "Unsuccessful Registration!";
               header('location:newSignUp.php');
            //    echo 'Not successfully Saved';
           }
        }

    }
    else{
        header('location:newSignUp.php');
    }
?>