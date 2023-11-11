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
    <button type="button" class="btn btn-secondary" Style= "margin-right:60px; padding-left: 30px; padding-right: 30px; font-size: 20px; background-color: #C8AE7D;">Login</button>
  </div>
</nav>
</header>


<?php
    include "config.php";
    if(isset($_POST['Simpan']))
    {
        $NamaCustomer = $_POST['inputNama'];
        $Email = $_POST['inputEmail'];
        $Password = $_POST['inputPassword'];
        $NoTelephone = $_POST['inputNo'];

        mysqli_query($connection, "insert into customer value ('', '$NamaCustomer ', '$Email', '$Password', '$NoTelephone')");
        header("location:login.php");
    }
?>

<body style="background-color: #B0A695;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-10" style="margin-left: 90px;">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4" style="margin-right: 60px;">Create an account</h1>
                    </div>

    <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaCustomer" name="inputNama"
                placeholder="Nama Lengkap" maxlength="">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Email" name="inputEmail"
                placeholder="Email" maxlength="">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Password" name="inputPassword"
                placeholder="Password" maxlength="">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NoTelephone" name="inputNo"
                placeholder="No Telephone" maxlength="">
            </div>
        </div>


        <div class="form-group row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-10" style="margin-left: 120px;">
                <input type="submit" name="Simpan" class="btn btn-primary" value="Sign Up">
            </div>
        </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<div class="col-sm-1"></div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
    jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/select2.min.js"></script>

</div>
</div><!--penutup container-fluid -->
</body>
</html>