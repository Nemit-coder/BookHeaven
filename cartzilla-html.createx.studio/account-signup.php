<?php
    include 'include/db_connection.php';

    // New user signup
    if(isset($_POST['create_account'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $exist="SELECT * FROM tbl_signup WHERE email='$email' AND status=1 ";
      $result = mysqli_query($connect_query,$exist);
      $numRows = mysqli_num_rows($result);
  
      if($numRows > 0){
          echo "<script>alert('This Email Already Exists')</script>";
          echo "<script>window.open('account-signup.php','_self')</script>";
      }
  
      else{
          $sql = "INSERT INTO tbl_signup (email,password) VALUES ('$email','$password')";
          $result = mysqli_query($connect_query,$sql);
  
          if($result){
              echo "<script>alert('Account Created Successfully')</script>";
              echo "<script>window.open('index.html','_self')</script>";
          }
      }
      
  
  }
?>
<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Book Heaven || Account - Sign Up</title>
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

          <h1 class="h2 mt-auto">Create an account</h1>
          <div class="nav fs-sm mb-3 mb-lg-4">
            I already have an account
            <a class="nav-link text-decoration-underline p-0 ms-2" href="account-signin.php">Sign in</a>
          </div>
          <div class="nav fs-sm mb-4 d-lg-none">
            <span class="me-2">Uncertain about creating an account?</span>
            <a class="nav-link text-decoration-underline p-0" href="#benefits" data-bs-toggle="offcanvas" aria-controls="benefits">Explore the Benefits</a>
          </div>

          <!-- Form -->
          <form class="needs-validation" novalidate="" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="position-relative mb-4">
              <label for="register-email" class="form-label">Email</label>
              <input type="email" class="form-control form-control-lg" id="register-email" required="" name="email">
              <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
            </div>
            <div class="mb-4">
              <label for="register-password" class="form-label">Password</label>
              <div class="password-toggle">
                <input type="password" class="form-control form-control-lg" id="register-password" minlength="8" placeholder="Minimum 8 characters" required="" name="password">
                <div class="invalid-tooltip bg-transparent py-0">Password does not meet the required criteria!</div>
                <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
                  <input type="checkbox" class="btn-check">
                </label>
              </div>
            </div>
            <div class="d-flex flex-column gap-2 mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-pass">
                <label for="save-pass" class="form-check-label">Save the password</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="privacy" required="">
                <label for="privacy" class="form-check-label">I have read and accept the <a class="text-dark-emphasis" href="#!">Privacy Policy</a></label>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-primary w-100" name="create_account"> 
              Create an account
              <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
            </button>
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


        <!-- Benefits section that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <div class="offcanvas-lg offcanvas-end w-100 py-lg-4 ms-auto" id="benefits" style="max-width: 1034px">
          <div class="offcanvas-header justify-content-end position-relative z-2 p-3">
            <button type="button" class="btn btn-icon btn-outline-dark text-dark border-dark bg-transparent rounded-circle d-none-dark" data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
              <i class="ci-close fs-lg"></i>
            </button>
            <button type="button" class="btn btn-icon btn-outline-dark text-light border-light bg-transparent rounded-circle d-none d-inline-flex-dark" data-bs-dismiss="offcanvas" data-bs-target="#benefits" aria-label="Close">
              <i class="ci-close fs-lg"></i>
            </button>
          </div>
          <div class="position-absolute top-0 start-0 w-100 h-100 d-lg-none">
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
            <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
          </div>
          <div class="offcanvas-body position-relative z-2 d-lg-flex flex-column align-items-center justify-content-center h-100 pt-2 px-3 p-lg-0">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-none d-lg-block">
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none-dark" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 rounded-5 d-none d-block-dark" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
            </div>
            <div class="position-relative z-2 w-100 text-center px-md-2 p-lg-5">
              <h2 class="h4 pb-3">Cartzilla account benefits</h2>
              <div class="mx-auto" style="max-width: 790px">
                <div class="row row-cols-1 row-cols-sm-2 g-3 g-md-4 g-lg-3 g-xl-4">
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-mail position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Subscribe to your favorite products</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-settings position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">View and manage your orders and wishlist</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-gift position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Earn rewards for future purchases</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-percent position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Receive exclusive offers and discounts</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-heart position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Create multiple wishlists</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white bg-opacity-25 border border-white border-opacity-50 rounded-4 d-none-dark"></span>
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-white border rounded-4 d-none d-block-dark" style="--cz-bg-opacity: .05"></span>
                      <div class="card-body position-relative z-2">
                        <div class="d-inline-flex position-relative text-info p-3">
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-white rounded-pill d-none-dark"></span>
                          <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-pill d-none d-block-dark"></span>
                          <i class="ci-pie-chart position-relative z-2 fs-4 m-1"></i>
                        </div>
                        <h3 class="h6 pt-2 my-2">Pay for purchases by installments</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>



    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  

</body>
<!-- Mirrored from cartzilla-html.createx.studio/account-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 09:28:59 GMT -->
</html>