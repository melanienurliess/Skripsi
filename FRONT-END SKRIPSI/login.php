<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Erwin Store</title>
</head>
<body style="background-color: #FAF3F0;">
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B0A695;">
  <a class="navbar-brand" href="#">
  <img src="image/erwin.png" alt="Erwin Logo" style="width: 70px;
    border-radius: 50%; margin-left: 100px;"></a>
  <p Style="font-size: 30px; padding-top: 10px;">Erwin's Store</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" style="margin-left: 500px;" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="padding: 25px; font-size: 20px;  color: wheat;">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item" style="padding: 25px; font-size: 20px;">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item" style="padding: 25px; font-size: 20px;">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item" style="padding: 25px; font-size: 20px;">
        <a class="nav-link" href="#">My Order</a>
      </li>
      <li class="nav-item" style="padding: 25px; font-size: 20px;">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <button type="button" class="btn btn-secondary" href="register.php" Style= "margin-right:60px; padding-left: 30px; padding-right: 30px; font-size: 20px; background-color: #C8AE7D;">Sign Up</button>
  </div>
</nav>
</header>


<?php
    include "config.php";
    ob_start();
    session_start();

    if(isset($_POST["submitlogin"]))
    {
        $emailcustomer = $_POST["customeremail"];
        $passcustomer = $_POST["passcustomer"];
        $sql_login = mysqli_query($connection, "SELECT * FROM customer WHERE email = '$emailcustomer' AND password = '$passcustomer'");

        if(mysqli_num_rows($sql_login)>0)
        {
            $row_customer = mysqli_fetch_array($sql_login);
            $_SESSION['kodeuser'] = $row_customer['customer_id'];
            $_SESSION['customeremail'] = $row_customer['email'];
            header("location:home2.php");
        }
    }
?>

<body style="background-color: #B0A695;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-10" style="margin-left: 90px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="margin-right: 60px;">Login Erwin's Store</h1>
                                    </div>
                                    <form method="POST" class="user">
                                        <div class="form-group">

                                            <input type="email" name= "customeremail" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">

                                            <input type="password" name="passcustomer" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>

<!--                                     <a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->

                                        <input type="submit" name="submitlogin" class="btn btn-primary btn-user btn-block" value="Login">  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
<?php 
    mysqli_close($connection);
    ob_end_flush();
?>
</html>