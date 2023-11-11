<?php 
  require "config.php";
  $queryProduk = mysqli_query($connection, "SELECT product_id, product_name, product_desc, product_price, produk_photo FROM product");
?>

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

  <div class="collapse navbar-collapse" style="margin-left: 300px;" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="padding: 25px; font-size: 20px;  color: wheat;">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
      <li class="nav-item" style="padding: 25px; font-size: 20px;">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <button type="button" class="btn btn-secondary" href="register.php" Style= "margin-right:60px; padding-left: 30px; padding-right: 30px; font-size: 20px; background-color: #C8AE7D;">Sign Up</button>
    </ul>
  </div>
</nav>
</header>
<!--JUMBOTRON -->

        <article class="image" Style="position: relative; filter: brightness(80%);">
            <img src="image/toko2.jpg" alt="Toko Sembako" style="width: 100%; position: relative;">
            <section class="image-content" Style="position: absolute; top: 50%; left: 15%; font-size: 2rem;">
                <h1 Style="text-shadow: 5px 3px 4px #000000; color:#F6F1EE;"><span Style="border-top: 5px solid #DADDB1; color: white;">Best Grocery Store</span> For You</h1>
                <h3 Style="font-size: 1.5rem; text-shadow: 5px 3px 4px #000000; color:#F5EEC8;">Affordable prices and quality goods</h3>
            </section>
        </article>

<!-- Produk -->
<div class="container-fluid py 5">
  <div class="container text-center" style="padding-top:30px">
    <h3>PRODUCT</h3>
    <div class="row mt-5">
      <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
      <div class="col-sm-6 col-md-4 mb-3">
      <div class="card h-100">
        <div class="image-box" style="height: 250px">
          <img src="image/<?php echo $data['produk_photo']; ?>" class="card-img-top" style="height: 100%; width:80%; object-position: center;" alt="...">
        </div>
          <div class="card-body">
              <h4 class="card-title"><?php echo $data['product_name'];?></h4>
              <p class="card-text text-truncate"><?php echo $data['product_desc']; ?></p>
              <p class="card-text" style="font-size: 20px;"><?php echo $data['product_price']; ?></p>
              <a href="#" class="btn btn-primary">Order</a>
          </div>
      </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
</body>
</html>