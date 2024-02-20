<?php
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'new2024db';
$dbConnection = new mysqli($localhost, $username, $password, $database);

if($dbConnection -> connect_error){
    echo 'Not connected';
}
else{
    // echo 'Connected';
}
?>