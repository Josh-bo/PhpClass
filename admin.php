<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="container pt-5">
        <form action="adminSubmit.php" method='post'>
            <div class="row mx-auto justify-content-center text-center mt-5 border col-sm-12 col-md-6 col-lg-7">
                    <div class="w-100 mt-3 pb-3 alert alert-danger" id="sg">
            <?php
               session_start();
               if(isset($_SESSION['message'])){
                 echo $_SESSION['message'];
                }
                session_unset();
            ?>
          </div>
                <h1 class="my-2">ADMIN SIGN-UP</h1><hr>
                 <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <input type="text" name="userName" id="" class="form-control" placeholder="UserName">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <input type="email" name="email" id="" class="form-control" placeholder="Email">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <input type="text" name="password" id="" class="form-control" placeholder="Password">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-5 my-3">
                    <button  type="submit" name="submit" value="submit"  class="btn btn-primary w-100">SUBMIT</button>
                </div>
    
            </div>
        </form>
    </section>
</body>
</html>