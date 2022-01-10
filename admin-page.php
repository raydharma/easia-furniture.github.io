<?php include('layouts/header.php'); ?>
<?php include('app/server.php'); ?>

<?php 

$sql = "SELECT * from items";
$result = mysqli_query($conn, $sql);

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      </ul>
      <div class="d-flex">
      <?php if(isset($_SESSION['admin'])): ?>
      <div class="">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Hello, <?= $_SESSION['admin'] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php?logout">Logout</a>
        </li>
    </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</nav>




<div class="container p-5">
<form action="" method="post">
  <h1>Add Items</h1>
  <div class="form-group row mt-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Item Name</label>
    <div class="col-sm-10">
      <input type="text" name="itemName" class="form-control" placeholder="Item Name">
    </div>
  </div>
  <div class="form-group row mt-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Item Price</label>
    <div class="col-sm-10">
      <input type="text" name="itemPrice" class="form-control" placeholder="Item Price">
    </div>
  </div>
  <div class="form-group row mt-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
    <div class="col-sm-10">
      <input type="file" name="image" class="form-control" placeholder="Image">
    </div>
  </div>
  <div class="form-group row mt-3">
    <div class="col-sm-10">
      <button type="submit" name="addItems" class="btn btn-success">Add</button>
    </div>
  </div>
</form>
</div>

<div class="container p-5">
    <h1>Current Items</h1>
<div class="table-responsive">
  <table class="table table-hover border-dark">
    <thead>
      <tr>
        <th scope="col">Item Name</th>
        <th scope="col">Item Price</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($result)){ 
    ?>
      <tr>
        <form action="" method="post">
        <td><?= $row['itemName'] ?></td>
        <td><?= $row['itemPrice'] ?></td>
        <td><img src="public/img/<?= $row['image'] ?>" alt="" width="50"></td>
        <td><a href="admin-page.php?id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a></td>
        </form>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</div>

<?php include('layouts/footer.php'); ?>