<?php require_once "include/head.php" ?>


<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

  <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Forgot Password</h1>
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
  <title>Forgot Password</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Forgot Your Password</h2>
        <p>Enter your email address and we’ll send you a link to forgot your password.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <form action="#" class="signin-form">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email Address" required>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3">Send Reset Link</button>
          </div>
          <div class="form-group text-center">
            <a href="sign_in.php">Back to Sign In</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
<?php require_once "include/footer.php" ?>