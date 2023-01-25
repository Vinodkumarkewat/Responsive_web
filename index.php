<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,468;0,700;1,200;1,500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>



<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Responsive Websites</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userInfo.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<section class="my-5">
  <div class="my-5">
    <h2 class="text-center">About Us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 clo-md-6 col-12">
      <img src="images/cc4.jpg" alt="" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 clo-md-6 col-12">
      <h2>Responsive Websites</h2>
      <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta deserunt provident placeat amet laborum quas esse ea, beatae, consectetur, ex expedita nemo architecto dolorum quos earum odio dolorem aliquid a? Dolorem, sapiente corrupti. Accusamus ipsum excepturi saepe distinctio et totam sint ipsam, harum aperiam consectetur voluptate perspiciatis. Consectetur, quis quisquam. Quam officia autem dignissimos necessitatibus provident perspiciatis, officiis dolore veniam.</p>
      <a href="about.php" class="btn btn-success">click me</a>
    </div>
  </div>
</div>

<section class="my-5">
  <div class="my-5">
    <h2 class="text-center">Our Services</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <!-- cart start -->
  <div class="col-lg-4 clo-md-4 col-12">
  <div class="card" style="width:400px">
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 clo-md-4 col-12">
  <div class="card" style="width:400px">
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <div class="col-lg-4 clo-md-4 col-12">
  <div class="card" style="width:400px">
  <img class="card-img-top" src="images/cc5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature :)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    <!-- cart end -->

    <section class="my-5">
      <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/p3.jpg" class="img-fluid pb-4" alt="">
          </div>

          
        </div>
      </div>
    </section>
  
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center"> Contact Us</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userInfo.php" method="post">

      <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="user" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="mobile" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Comments</label>
        <textarea  class="form-control" name="comment"></textarea>
      </div>
      <button type="submit" class="btn btn-success my-3">Submit</button>

    </form>
  </div>
</section>

<footer class="p-3 bg-dark text-white">@vinodtechnicalproduction</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>