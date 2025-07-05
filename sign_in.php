<?php require_once "include/head.php" ?>

<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

  <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Sign In</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Account</span></p>
        </div>

      </div>
    </div>
  </div>
</section>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign In</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Sign In to Your Account</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <form action="#" class="signin-form">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
          </div>
          <div class="form-group d-md-flex justify-content-between">
            <div class="w-50">
              <a href="forgot_pass.php">Forgot Password?</a>
            </div>
            <div class="w-50 text-md-right">
              <a href="sign_up.php">Create an account</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
<?php require_once "include/footer.php" ?>