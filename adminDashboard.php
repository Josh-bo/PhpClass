<?php
    session_start();
    // echo "Username: " .$_SESSION["username"];
     echo $_SESSION['comingId'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="container pt-5">
          <form action="adminUploadImages.php" method="post" enctype="multipart/form-data">
            <div class="row mx-auto justify-content-center text-center mt-5 border border-success rounded-3 col-sm-12 col-md-6 col-lg-7">
                   <div class="w-100 mt-3 pb-3 alert alert-danger" id="sg">
            <?php
                   if(isset($_SESSION['message'])){
                 echo $_SESSION['message'];
                }
                session_unset();
            ?>
          </div>
                <h1 class="my-2 text-success" >WELCOME, ADMIN</h1><hr class="text-primary">
                <div class="col-12 my-3">
                    <input type="file" name="image" id="" class="form-control" placeholder="">
                </div>
           
                <div class="col-12 my-3">
                    <button  type="submit" name="submit" value="Upload Pic"   class="btn btn-primary w-100">Upload Image</button>
                </div>
    
            </div>
        </form>
    </section>
</body>
</html>