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
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="collections.php">Collections</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
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

<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <p>Have any questions? We'd love to hear from you. For all inquiries, please email us from the form below.</p>
    </div>
    <div class="container2">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>Jalan Raya Canggu,<br>Br.Aseman Kauh No.112,<br>Tibubeneng, Badung, Bali </p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>087-861-420-403</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>ekstra.bali@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
            <form>
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea required="required"></textarea>
                    <span>Type your Message...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="" value="Send">
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>
