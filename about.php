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
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
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

<section class="about">
  <div class="content2">
    <h1>We Love What We Do</h1>
      <p class="par2">
        Here at EAsia Furniture, We sell varieties of old recycled Teak Wood <br>
        We've been operating on this market since 1998, <br> 
        We served more than 1000 retail customers, hotel owners, villa owners, and companies. <br>
        Providing you with the finest quality of wood and great services.
      </p>
    </div>
</section>

<?php include('layouts/footer.php'); ?>