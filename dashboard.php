  <?php
      session_start();
      require 'connection.php';
    //  echo 'Dashboard';
     print_r($_SESSION);
    //  echo $_SESSION['userid']
    
    $userId = $_SESSION['userId'];

    $query = "SELECT * FROM studentstable WHERE user_id = '$userId'";
    $con = $dbConnection -> query($query);
    $user = $con -> fetch_assoc();
    $profile_pic = $user['profile_pic'];
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New PHP 2024/DASHBOARD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
   

    <div class="container mt-5 mx-auto text-center w-100">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto border p-2 rounded ">
          <h3 class="text-primary">DASHBOARD</h3>
          <div class="w-100 mt-3 pb-3 alert alert-danger" id="sg">
            <?php
            //    session_start();
               if(isset($_SESSION['message'])){
                 echo $_SESSION['message'];
                }
                session_unset();
            ?>
          </div>
            <hr class=" border border-warning border-4">
            <!-- <div>Welcome, <?php echo $user['firstName']?></div> -->

            <form action="picture.php" method="post" enctype="multipart/form-data">
              <input type="file" name="image">
              <input type="submit" name="submit" value="Upload Pic" class="btn btn-primary">
            </form>
        </div>

        <div>
          <img src=<?php echo "images/".$profil_pic?> alt="">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
