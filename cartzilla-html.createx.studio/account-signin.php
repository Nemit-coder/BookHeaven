<?php
  include 'include/db_connection.php';

  // Signin
  if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM tbl_signup WHERE email='$email' AND password='$password' AND status=1 ";
    $result=mysqli_query($connect_query,$sql);


    if (mysqli_num_rows($result) > 0) {
      while($row=mysqli_fetch_assoc($result)){
        echo "<script>alert('Sign in Successfully')</script>";
        echo "<script>window.open('index.html','_self')</script>";
      }
    }
    else{
      echo '<div class="alert alert-danger">Email and password not matched</div>';
    }
}
?>
<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Book Heaven || Account - Sign In</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/cartzilla-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/cartzilla-icons.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
  </head>


  <!-- Body -->
  <body>
    <!-- Page content -->
    <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
      <div class="d-lg-flex">

        <!-- Login form + Footer -->
        <div class="d-flex flex-column min-vh-100 w-100 py-4 mx-auto me-lg-5" style="max-width: 416px">

          <!-- Logo -->
          <header class="navbar px-0 pb-4 mt-n2 mt-sm-0 mb-2 mb-md-3 mb-lg-4">
            <a href="index.html" class="navbar-brand pt-0">
              <span class="d-flex flex-shrink-0 text-primary me-2">
              <img src="assets/img/book-heaven-logo.jpeg" width="90">
              </span>
              <span class="mt-3">Book Heaven</span>
            </a>
          </header>

          <h1 class="h2 mt-auto">Welcome back</h1>
          <div class="nav fs-sm mb-4">
            Don't have an account?
            <a class="nav-link text-decoration-underline p-0 ms-2" href="account-signup.php">Create an account</a>
          </div>

          <!-- Form -->
          <form class="needs-validation" novalidate="" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="position-relative mb-4">
              <input type="email" class="form-control form-control-lg" placeholder="Email" required="" name="email">
              <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
            </div>
            <div class="mb-4">
              <div class="password-toggle">
                <input type="password" class="form-control form-control-lg" placeholder="Password" required="" name="password">
                <div class="invalid-tooltip bg-transparent py-0">Password is incorrect!</div>
                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                  <input type="checkbox" class="btn-check">
                </label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="form-check me-2">
                <input type="checkbox" class="form-check-input" id="remember-30">
                <label for="remember-30" class="form-check-label">Remember for 30 days</label>
              </div>
              <div class="nav">
                <a class="nav-link animate-underline p-0" href="account-password-recovery.html">
                  <span class="animate-target">Forgot password?</span>
                </a>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100" name="signin">Sign In</button>
          </form>

          <!-- Divider -->
          <div class="d-flex align-items-center my-4">
            <hr class="w-100 m-0">
            <span class="text-body-emphasis fw-medium text-nowrap mx-4">or continue with</span>
            <hr class="w-100 m-0">
          </div>

          <!-- Social login -->
          <div class="d-flex flex-column flex-sm-row gap-3 pb-4 mb-3 mb-lg-4">
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-google ms-1 me-1"></i>
              Google
            </button>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-facebook ms-1 me-1"></i>
              Facebook
            </button>
            <button type="button" class="btn btn-lg btn-outline-secondary w-100 px-2">
              <i class="ci-apple ms-1 me-1"></i>
              Apple
            </button>
          </div>

          <!-- Footer -->
          <footer class="mt-auto">
            <div class="nav mb-4">
              <a class="nav-link text-decoration-underline p-0" href="help-topics-v1.html">Need help?</a>
            </div>
          </footer>
        </div>


        <!-- Cover image visible on screens > 992px wide (lg breakpoint) -->
        <div class="d-none d-lg-block w-100 py-4 ms-auto" style="max-width: 1034px">
          <div class="d-flex flex-column justify-content-end h-100 rounded-5 overflow-hidden">
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
            <div class="ratio position-relative z-2" style="--cz-aspect-ratio: calc(1030 / 1032 * 100%)">
              <img src="assets/img/account-cover.png" alt="Girl">
            </div>
          </div>
        </div>
      </div>
    </main>



    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  

</body>
<!-- Mirrored from cartzilla-html.createx.studio/account-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 09:28:59 GMT -->
</html>