<?php include('layouts/header.php'); ?>
<?php include('app/server.php'); ?>

<?php 

$sql = "SELECT * from items";
$result = mysqli_query($conn, $sql);

?>

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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="collections.php">Collections</a>
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

<div class="container-fluid">
  <h1 class="text-center mt-5" style="font-weight: 900;">EAsia Collections</h1>
</div>

<div class="container-fluid list-barang">
   
  <div class="row">

  <?php while($row = mysqli_fetch_assoc($result)){ 
  ?>

    <div class="col-md-6 mt-5">
      <h2 class="text-center"><?= $row['itemName'] ?></h2>
      <img class="d-block mx-auto" src="public/img/<?= $row['image'] ?>" alt="" width=275>
    </div>

    <?php } ?>

  </div>
</div>

<?php include('layouts/footer.php'); ?>