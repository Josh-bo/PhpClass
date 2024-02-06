<?php 

require 'connection.php';
session_start();

    if(isset($_POST['submit'])){
        // print_r($_POST);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // echo $hashedPassword;

       $query = "INSERT INTO studentstable (`first_Name`, `last_Name`, `email`, `age`, `address`, `password`) VALUES ('$firstName', '$lastName', '$email', $age, '$address', '$hashedPassword')";

       $SavedQuery = $dbConnection -> query($query);

       if($SavedQuery){
           echo 'Successfully Saved', $SavedQuery;
        //    header('location:login.php');
       }
       else{
        //    $_SESSION['msg'] = "Unsuccessful Registration";
        //    header('location:signUp.php');
           echo 'Not successfully Saved';
       }
    }
    else{
        header('location:signUp.html');
    }
?>