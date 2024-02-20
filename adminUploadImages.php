<?php
session_start();
require 'connection.php';
$adminId = $_SESSION['adminId'];

if(isset($_POST['submit'])){
    // print_r($_FILES['image']);
    // $getDetails = $_FILES['image'];
    // $imgName = $getDetails['name'];
    // $tempName = $getDetails['tmp_name'];
    $temp =  $_FILES['image']['tmp_name'];
    $name = $_FILES['image']['name'];
    $newName = time().$name;
    $move_image = move_uploaded_file($temp, 'images/'.$newName);
    if($move_image){
        $query = "UPDATE adminstable SET images = ' .$newName.' WHERE admin_id = $adminId";
        $con = $dbConnection -> query($query);

        if($con) {
            echo 'Successfully Updated';
            // $_SESSION['message'] = 'Updateing Failed!';
        }
        else{
            $_SESSION['message'] = 'Updating Failed!';
            // echo 'Updating Failed';
            header('location:adminDashboard.php');
        }
    }
    else{
        echo 'failed';
    }
    
    // echo $name;
}
else{
    header('location:adminLogin.php');
}
?>