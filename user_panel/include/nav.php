    <?php
        // include '../admin/include/connection.php';
        // session_start();
        if(isset($_POST['signup'])){
          $username = $_POST['username'];
          $mobile_no = $_POST['mobile_no'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          $exist = "SELECT * FROM tbl_user_signup WHERE mobile_no='$mobile_no' OR email='$email'";
          $result = mysqli_query($conn, $exist);
          if(mysqli_num_rows($result)>0){
            echo "<script>alert('User already exist')</script>";
            echo "<script>window.open('index.php','_self')</script>";
            exit();
          }
          else {
            $sql = "INSERT INTO tbl_user_signup (username,mobile_no,email,password) VALUES ('$username','$mobile_no','$email','$password')";
            $result2 = mysqli_query($conn,$sql);
            if($result2){
              // session_start();
              $_SESSION['username'] = $username;
              header("location: index.php");
              exit();
            }
            else{
              echo "<script>alert('Some Error')</script>";
              echo "<script>window.open('index.php','_self')</script>";
            }
          }
        }
        else if(isset($_POST['signin'])){
          $emailorpass = $_POST['emailorpass'];
          $password = $_POST['password'];

          $sql="SELECT * from tbl_user_signup where email or mobile_no = '{$emailorpass}' AND password = '{$password}'";
          $result=mysqli_query($conn,$sql);


          if (mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){
              // session_start();
              $_SESSION['username'] = $username;
              header("location: index.php");
            }
          }
          else{
               echo "<script>alert('Invalid Username or Mobile number Or Password')</script>";
              echo "<script>window.open('index.php','_self')</script>";
          }
        }
        else if(isset($_POST['logout'])){
          // Initialize the session
            // session_start();
            
            // Unset all of the session variables
            $_SESSION = array();
            
            // Destroy the session.
            session_destroy();
            
            // Redirect to login page
            header("location: index.php");
            exit;
        }
    ?>
    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <!-- <div class="offcanvas-header d-flex justify-content-between align-items-start w-100 py-0 pt-5 w-25">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
           <h4 class="offcanvas-title" id="shoppingCartLabel">Welcome</h4>
          <button type="button" class="btn-close ml-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
      </div> -->

      
      <main class="content-wrapper w-100 px-3 ps-lg-5 pe-lg-4 mx-auto" style="max-width: 1920px">
        <div class="d-lg-flex">
  
          <!-- Login form + Footer -->
          <div class="d-flex flex-column min-vh-100 w-100 py-0 mx-auto me-lg-5" style="max-width: 416px">
            <div class="offcanvas-header d-flex position-absolute top-0 end-0 py-0 pt-2">
              <!-- Right: Close Button -->
              <button type="button" class="btn-close mt-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>


            <?php
              if(!isset($_SESSION['username'])){
            ?>  
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs mt-3" id="offcanvasTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="create-tab" data-bs-toggle="tab" data-bs-target="#create" type="button" role="tab" aria-controls="create" aria-selected="true">Sign Up</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="false">Sign In</button>
              </li>
            </ul>   
                  

        <!-- Tab Content -->
        <div class="tab-content pt-3" id="offcanvasTabContent">
          <!---------- Sign Up Tab ---------->
              <div class="tab-pane fade show active" id="create" role="tabpanel" aria-labelledby="create-tab">
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
                <label for="register-user" class="form-label">Username</label>
                <input type="text" class="form-control form-control-lg" id="username" required="" name="username">
                <div class="invalid-tooltip bg-transparent py-0">Invalid Username</div>
              </div>
              <div class="position-relative mb-4">
                <label for="register-user" class="form-label">Mobile No</label>
                <input type="text" class="form-control form-control-lg" id="mobile_no" required="" name="mobile_no">
                <div class="invalid-tooltip bg-transparent py-0">Invalid Mobile Number</div>
              </div>
              <div class="position-relative mb-4">
                <label for="register-email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="register-email" required="" name="email">
                <div class="invalid-tooltip bg-transparent py-0">Enter a valid email address!</div>
                <div class="invalid-tooltip bg-transparent py-0"><?php echo isset($error) ? $error : 'Email already exists!' ?></div>
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
              <button type="submit" class="btn btn-lg btn-primary w-100" name="signup"> 
                Sign Up
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


            <!---------- Sign In Tab ---------->
              <div class="tab-pane fade" id="signin" role="tabpanel" aria-labelledby="signin-tab">  
                <h1 class="h2 ">Welcome back</h1>
                <div class="nav fs-sm mb-4">
                  Don't have an account?
                  <a class="nav-link text-decoration-underline p-0 ms-2" href="account-signup.php">Create an account</a>
                </div>
      
                <!-- Form -->
                <form class="needs-validation" novalidate="" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                  <div class="position-relative mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Email or Mobile Number" required="" name="emailorpass">
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
              <?php
                 }
                 else {
               ?>

                  <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
                    <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
                      <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
                    </div>
                  </div>
            

                  <!-- Footer -->
                  <div class="offcanvas-header flex-column align-items-start">
                    <div class="d-flex w-100 gap-3">
                      <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View Profile</a>
                      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <button class="btn btn-lg btn-primary w-100" name="logout">Logout</button>
                      </form>
                    </div>
                  </div>
                </div>


                  
                 
              <?php
                 }
              ?>
            </div>
          </div>
        </div>
      </main>
    </div>


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg d-block z-fixed p-0" data-sticky-navbar="{&quot;offset&quot;: 500}">
      <div class="container d-block py-1 py-lg-2" data-bs-theme="dark">
        <div class="navbar-stuck-hide pt-1"></div>
        <div class="row flex-nowrap align-items-center g-0">
          <div class="col col-lg-3 d-flex align-items-center">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar brand (Logo) -->
            <a href="index.php" class="navbar-brand me-0 mt-0">
              <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
                <img src="assets/img/book-heaven-logo.jpeg" width="110px">
              </span>
            </a>
          </div>
          <div class="col col-lg-9 d-flex align-items-center justify-content-end">

            <!-- Search visible on screens > 991px wide (lg breakpoint) -->
            <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
              <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg ms-3"></i>
              <input type="search" class="form-control form-control-lg form-icon-start border-dark rounded-pill" placeholder="Search the products">
            </div>

            <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
            <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics.html">
              <div class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                <i class="ci-percent animate-target"></i>
              </div>
              <div class="ps-2 text-nowrap">
                <div class="fs-xs text-dark text-opacity-50">Only this month</div>
                <div class="fw-medium text-dark">Super Sale 20%</div>
              </div>
            </a>

            <!-- Button group -->
            <div class="d-flex align-items-center">

              <!-- Navbar stuck nav toggler -->
              <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
              </button>

              

              <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
              <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>

              <!-- Account button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html" style="color: black;">
                <i class="ci-shopping-cart animate-target"></i>
                <span class="visually-hidden">Account</span>
              </a>

              <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="account-wishlist.html" style="color: black;">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
              </a>

              <!-- Cart button -->
              <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                  <i class="ci-user animate-target ms-n1"></i>
                </span>
              </button>
            </div>
          </div>
        </div>
        <div class="navbar-stuck-hide pb-1"></div>
      </div>

      <!-- Search visible on screens < 992px wide (lg breakpoint). It is hidden inside collapse by default -->
      <div class="collapse position-absolute top-100 z-2 w-100 bg-dark d-lg-none" id="searchBar">
        <div class="container position-relative my-3" data-bs-theme="dark">
          <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
          <input type="search" class="form-control form-icon-start border-white rounded-pill" placeholder="Search the products" data-autofocus="collapse">
        </div>
      </div>

      <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
      <div class="collapse navbar-stuck-hide" id="stuckNav">
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Book Heaven</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body py-3 py-lg-0">
            <div class="container px-0 px-lg-3">
              <div class="row">

                <!-- Navbar nav -->
                <div class="container d-flex justify-content-center">
                <div class="col-lg-7 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
                  <ul class="navbar-nav position-relative">
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu">
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-electronics.html">
                            <span class="fw-medium">Electronics Store</span>
                            <span class="d-block fs-xs text-body-secondary">Megamenu + Hero slider</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/electronics-light.jpg" alt="Electronics Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/electronics-dark.jpg" alt="Electronics Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-fashion-v1.html">
                            <span class="fw-medium">Fashion Store v.1</span>
                            <span class="d-block fs-xs text-body-secondary">Hero promo slider</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-1-light.jpg" alt="Fashion Store v.1">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-1-dark.jpg" alt="Fashion Store v.1">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-fashion-v2.html">
                            <span class="fw-medium">Fashion Store v.2</span>
                            <span class="d-block fs-xs text-body-secondary">Hero banner with hotspots</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/fashion-2-light.jpg" alt="Fashion Store v.2">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/fashion-2-dark.jpg" alt="Fashion Store v.2">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-furniture.html">
                            <span class="fw-medium">Furniture Store</span>
                            <span class="d-block fs-xs text-body-secondary">Fancy product carousel</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/furniture-light.jpg" alt="Furniture Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/furniture-dark.jpg" alt="Furniture Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                        <li class="hover-effect-opacity px-2 mx-n2">
                          <a class="dropdown-item d-block mb-0" href="home-grocery.html">
                            <span class="fw-medium">Grocery Store</span>
                            <span class="d-block fs-xs text-body-secondary">Hero slider + Category cards</span>
                            <div class="d-none d-lg-block hover-effect-target position-absolute top-0 start-100 bg-body border border-light-subtle rounded rounded-start-0 transition-none invisible opacity-0 pt-2 px-2 ms-n2" style="width: 212px; height: calc(100% + 2px); margin-top: -1px">
                              <img class="position-relative z-2 d-none-dark" src="assets/img/mega-menu/demo-preview/grocery-light.jpg" alt="Grocery Store">
                              <img class="position-relative z-2 d-none d-block-dark" src="assets/img/mega-menu/demo-preview/grocery-dark.jpg" alt="Grocery Store">
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none-dark" style="box-shadow: .875rem .5rem 2rem -.5rem #676f7b; opacity: .1"></span>
                              <span class="position-absolute top-0 start-0 w-100 h-100 rounded rounded-start-0 d-none d-block-dark" style="box-shadow: .875rem .5rem 1.875rem -.5rem #080b12; opacity: .25"></span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown position-static me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Categories</a>
                      <div class="dropdown-menu rounded-4 p-4">
                        <div class="d-flex flex-column flex-lg-row gap-4">
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Fiction</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="home-categories.php?category=fiction">Literary Fiction</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics.html">Mystery & Thriller</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics.html">Romance</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics.html">Science Fiction & Fantasy
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics.html">Adventure</a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Non-Fiction</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="home-categories.php?category=non-fiction">Biography & Memoir
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Self-help
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Religion & Spirituality
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Psychology
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Politics
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Philosophy   
                                </a>
                              </li>
                            </ul>
                        </div>
                        <div style="min-width: 190px">
                              <div class="h6 mb-2">Comics and Graphic Novels</div>
                              <ul class="nav flex-column gap-2 mt-0">
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture.html">Manga</a>
                                </li>
                                <li class="d-flex w-100 pt-1">
                                  <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture.html">Superhero Comics
                                </a>
                                </li>
                              </ul>
                            <div class="h6 pt-4 mb-2">Cookbooks and Food</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Recipes</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery.html">Cooking Techniques
                                </a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Religion & Spirituality
                            </div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart.html">Christianity</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1.html">Hinduism</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2.html">Islam</a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping.html">Buddhism</a>
                              </li>
                            </ul>
                          </div>
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Sports</div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Biographies of Athletes
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Sports Techniques & Guides
                                </a>
                              </li>
                            </ul>
                            <div class="h6 pt-4 mb-2">Health & Fitness
                            </div>
                            <ul class="nav flex-column gap-2 mt-0">
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Nutrition
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Exercise & Fitness
                                </a>
                              </li>
                              <li class="d-flex w-100 pt-1">
                                <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Mental Health
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Auth Pages</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="account-signin.html">Sign In</a></li>
                            <li><a class="dropdown-item" href="account-signup.html">Sign Up</a></li>
                            <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                        <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                        <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                        <li><a class="dropdown-item" href="account-reviews.html">My Reviews</a></li>
                        <li><a class="dropdown-item" href="account-info.html">Personal Info</a></li>
                        <li><a class="dropdown-item" href="account-addresses.html">Addresses</a></li>
                        <li><a class="dropdown-item" href="account-notifications.html">Notifications</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-n1 me-xl-0">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu">
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">About</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about-v1.html">About v.1</a></li>
                            <li><a class="dropdown-item" href="about-v2.html">About v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Blog</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog-grid-v1.html">Grid View v.1</a></li>
                            <li><a class="dropdown-item" href="blog-grid-v2.html">Grid View v.2</a></li>
                            <li><a class="dropdown-item" href="blog-list.html">List View</a></li>
                            <li><a class="dropdown-item" href="blog-single-v1.html">Single Post v.1</a></li>
                            <li><a class="dropdown-item" href="blog-single-v2.html">Single Post v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Contact</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="contact-v1.html">Contact v.1</a></li>
                            <li><a class="dropdown-item" href="contact-v2.html">Contact v.2</a></li>
                            <li><a class="dropdown-item" href="contact-v3.html">Contact v.3</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Help Center</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="help-topics-v1.html">Help Topics v.1</a></li>
                            <li><a class="dropdown-item" href="help-topics-v2.html">Help Topics v.2</a></li>
                            <li><a class="dropdown-item" href="help-single-article-v1.html">Help Single Article v.1</a></li>
                            <li><a class="dropdown-item" href="help-single-article-v2.html">Help Single Article v.2</a></li>
                          </ul>
                        </li>
                        <li class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">404 Error</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="404-electronics.html">404 Electronics</a></li>
                            <li><a class="dropdown-item" href="404-fashion.html">404 Fashion</a></li>
                            <li><a class="dropdown-item" href="404-furniture.html">404 Furniture</a></li>
                            <li><a class="dropdown-item" href="404-grocery.html">404 Grocery</a></li>
                          </ul>
                        </li>
                        <li><a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Conditions</a></li>
                      </ul>
                    </li>
                    <li class="nav-item me-lg-n2 me-xl-0">
                      <a class="nav-link" href="docs/installation.html">Docs</a>
                    </li>
                    <li class="nav-item me-lg-n2 me-xl-0">
                      <a class="nav-link" href="docs/typography.html">Components</a>
                    </li>
                  </ul>
                  <hr class="d-lg-none my-3">
                  
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offcanvas-header border-top px-0 py-3 mt-3 d-md-none">
            <div class="nav nav-justified w-100">
              <a class="nav-link border-end" href="account-signin.html">
                <i class="ci-user fs-lg opacity-60 me-2"></i>
                Account
              </a>
              <a class="nav-link" href="account-wishlist.html">
                <i class="ci-heart fs-lg opacity-60 me-2"></i>
                Wishlist
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>



