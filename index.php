<?php include('layouts/header.php'); ?>
<?php include('app/server.php'); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid px-3">
    <a class="navbar-brand" href="index.php">EAsia Furniture</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collections.php">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
      <?php if(isset($_SESSION['userName'])): ?>
      <div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Hello, <?= $_SESSION['userName'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?logout">Logout</a>
        </li>
    </div>
    <?php endif ?>
      <?php if(!isset($_SESSION['userName'])): ?>
      <div>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
    </div>
    <?php endif ?>
  </div>
</nav>

<div class="main-bg-img">
  <h1 style="font-weight: 700;">EAsia Furniture<br><span style="font-size: 50%; font-weight: 300;">Jl. Raya Canggu, Br. Aseman Kauh No.112 <br>
    Tibubeneng, Badung, Bali <br>
    Email: ekstra.bali@gmail.com<span></h1>
</div>

<div class="container mt-5">
  <div class="row">

    <div class="col-lg-4 col-md-6 mt-5">
    <h2 class="text-center">Premium Quality</h2>
    <div class="main-icons mt-3">
    <i class="fas fa-couch fa-3x"></i>
    </div>
    <p class="text-center mt-3">With more than 15 years of experience <br> bringing satisfy in all of our customers <br> we only use the best quality of Teak Wood. <br>  </p>
    </div>

    <div class="col-lg-4 col-md-6 mt-5">
    <h2 class="text-center">Best Price</h2>
    <div class="main-icons mt-3">
    <i class="fas fa-wallet fa-3x"></i>
    </div>
    <p class="text-center mt-3">Our workshop's located in Bali <br> making manufacturing low cost <br> but still providing the best for you. </p>
    </div>

    <div class="col-lg-4 col-md-6 mt-5 mb-5">
    <h2 class="text-center">Made to Order</h2>
    <div class="main-icons mt-3">
    <i class="fas fa-hands-helping fa-3x"></i>
    </div>
    <p class="text-center mt-3">Make any furnitures you want <br> just tell us what you need. <br> Custom designs just like you want. </p>
    </div>

  </div>
</div>

<?php include('layouts/footer.php'); ?>
