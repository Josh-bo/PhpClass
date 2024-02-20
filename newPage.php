<?php
session_start();
    if(isset($_SESSION['userid'])){
        echo $_SESSION['userid'];
    }
    else{
        echo "No id";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>NEW PAGE</P>
</body>
</html>