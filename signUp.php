<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New PHP 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

   

    <div class="container mt-5 mx-auto text-center w-100">
        <div class="col-sm-12 col-md-6 col-lg-6 mx-auto border p-2 rounded ">
          <h3 class="text-info">SIGN-UP/SIGNUP</h3>
          <div class="w-100 mt-3 pb-3 alert alert-danger" id="sg">
            <?php
               session_start();
               if(isset($_SESSION['message'])){
                 echo $_SESSION['message'];
                }
                session_unset();
            ?>
          </div>
            <hr class=" border border-warning border-4">
        <form action="submit.php" method='post'>
            <input type="text" class="form-control my-3" placeholder="First Name" name="firstName" required>
            <input type="text" class="form-control my-3" placeholder="Last Name" name="lastName" required>
            <input type="email" class="form-control my-3" placeholder="Email" name="email" required>
            <input type="number" class="form-control my-3" placeholder="Age" name="age" required>
            <input type="text" class="form-control my-3" placeholder="Address" name="address" required>
            <input type="password" class="form-control my-3" placeholder="Password" name="password" required>

            <button type="submit" name="submit" value="submit" class="btn btn-primary w-100">SUBMIT</button>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
