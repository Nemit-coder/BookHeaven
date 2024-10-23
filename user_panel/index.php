<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Fiction</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->


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

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/choices.js/choices.min.css">
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>

    <!-- Page specific styles -->
    <style>
      #furniture {
        --cz-aspect-ratio: calc(398 / 773 * 100%);
        max-width: 773px;
      }
      #grocery {
        --cz-aspect-ratio: calc(398 / 627 * 100%);
        max-width: 627px;
      }
      #fashion-1 {
        --cz-aspect-ratio: calc(398 / 370 * 100%);
        max-width: 370px;
      }
      #electronics {
        --cz-aspect-ratio: calc(398 / 540 * 100%);
        max-width: 540px;
      }
      #fashion-2 {
        --cz-aspect-ratio: calc(398 / 466 * 100%);
        max-width: 466px;
      }
      @media (max-width: 767px) {
        #furniture,
        #grocery,
        #fashion-1,
        #electronics,
        #fashion-2 {
          --cz-aspect-ratio: calc(400 / 735 * 100%);
          max-width: 100%;
        }
      }
      @media (max-width: 650px) {
        #furniture {
          --cz-aspect-ratio: calc(398 / 627 * 100%);
        }
        #grocery {
          --cz-aspect-ratio: calc(398 / 627 * 100%);
        }
        #fashion-1 {
          --cz-aspect-ratio: calc(398 / 627 * 100%);
        }
        #electronics {
          --cz-aspect-ratio: calc(398 / 627 * 100%);
        }
        #fashion-2 {
          --cz-aspect-ratio: calc(398 / 627 * 100%);
        }
      }
      @media (max-width: 540px) {
        #fashion-1 {
          --cz-aspect-ratio: calc(398 / 500 * 100%);
        }
        #fashion-2 {
          --cz-aspect-ratio: calc(398 / 500 * 100%);
        }
      }
    </style>

  </head>


  <!-- Body -->
  <body>

    <?php
        include 'include/nav.php';
    ?>
    

    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Hero (Demos) -->
      <section class="pt-1 pt-sm-1 mt-1 mt-sm-0">

        <!-- Carousel -->
        <!-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/book1.jpg" class="d-block w-50px" alt="..." height="60px">
            </div>
            <div class="carousel-item">
              <img src="assets/img/book2.jpg" class="d-block w-50px" alt="..." height="60px">
            </div>
            <div class="carousel-item">
              <img src="assets/img/book3.jpg" class="d-block w-50px" alt="..." height="60px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> -->


        <!-- Grid -->
        <!-- <div class="container-fluid d-flex flex-column gap-4 my-5" style="max-width: 1456px">
          <div class="d-flex flex-column flex-md-row gap-4">

            <!-- Furniture store -->
            <!-- <div class="hover-effect-scale ratio" id="furniture" style="--cz-transform-scale: 1.03; --cz-transition-duration: .3s">
              <div class="nav flex-column position-absolute top-0 start-0 w-100 h-100 z-2 pt-4 pt-xl-5 px-4 ps-xl-5 mt-lg-2 ms-lg-2 m-xl-0">
                <h2 class="h3 d-none d-lg-block pb-2 mb-1">Fictional</h2>
                <h2 class="h4 d-lg-none mb-2">Fictional</h2>
                <p class="fs-xs mb-2 mb-xl-3 d-none d-sm-block d-md-none d-lg-block" style="max-width: 250px">Unleash the Thriller and Fictional part of books.</p>
                <a class="nav-link animate-underline stretched-link text-dark-emphasis py-1 px-0" href="home-furniture.html">
                  <span class="animate-target">View</span>
                  <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                </a>
              </div>
              <div class="hover-effect-target d-flex align-items-end h-100 overflow-hidden rounded-5">
                <div class="position-relative z-1 rtl-flip">
                  <img src="assets/img/simple_book.jpg" class="hover-effect-target d-none-dark" width="773" alt="Furniture Store" style="object-fit:cover;">
                </div>
                <span class="bg-body-secondary position-absolute top-0 start-0 w-100 h-100 d-none-dark"></span>
                <span class="bg-dark position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark"></span>
              </div>
            </div> -->

            <!-- Grocery store -->
            <!-- <div class="hover-effect-scale ratio" id="grocery" style="--cz-transform-scale: 1.03; --cz-transition-duration: .3s">
              <div class="nav flex-column position-absolute top-0 start-0 w-100 h-100 z-2 pt-4 pt-xl-5 px-4 ps-xl-5 mt-lg-2 ms-lg-2 m-xl-0">
                <h2 class="h3 text-white d-none d-lg-block pb-2 mb-1">Non-Fictional</h2>
                <h2 class="h4 text-white d-lg-none mb-2">Non-Fictional</h2>
                <p class="text-white opacity-75 fs-xs mb-2 mb-xl-3 d-none d-sm-block d-md-none d-lg-block" style="max-width: 250px">Dive into the world of Reality.</p>
                <a class="nav-link animate-underline stretched-link text-white py-1 px-0" href="home-grocery.html">
                  <span class="animate-target">View</span>
                  <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                </a>
              </div>
              <div class="hover-effect-target d-flex align-items-end justify-content-end h-100 overflow-hidden rounded-5">
                <div class="position-relative z-1 rtl-flip">
                  <img src="assets/img/non-fictional2.webp" class="hover-effect-target d-none-dark" width="627" alt="Grocery Store">
                </div>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background-color: #708b88;"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background-color: #49595a;"></span>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column flex-md-row gap-4"> -->

            <!-- Fashion store v.1 -->
            <!-- <div class="hover-effect-scale ratio" id="fashion-1" style="--cz-transform-scale: 1.03; --cz-transition-duration: .3s">
              <div class="nav flex-column position-absolute top-0 start-0 w-100 h-100 z-2 pt-4 pt-xl-5 px-4 ps-xl-5 mt-lg-2 ms-lg-2 m-xl-0">
                <h2 class="h3 text-white d-none d-lg-block pb-2 mb-1">Fashion Store v.1</h2>
                <h2 class="h4 text-white d-lg-none mb-2">Fashion Store v.1</h2>
                <p class="text-white opacity-75 fs-xs mb-2 mb-xl-3 d-none d-sm-block d-md-none d-lg-block" style="max-width: 250px">Discover the newest trends in fashion with our exclusive designer wear.</p>
                <a class="nav-link animate-underline stretched-link text-white py-1 px-0" href="home-fashion-v1.html">
                  <span class="animate-target">View demo</span>
                  <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                </a>
              </div>
              <div class="hover-effect-target d-flex align-items-end justify-content-end h-100 overflow-hidden rounded-5">
                <div class="position-relative z-1 rtl-flip">
                  <img src="assets/img/intro/demos/fashion-1-light.png" class="hover-effect-target d-none-dark" width="370" alt="Fashion Store v.1">
                  <img src="assets/img/intro/demos/fashion-1-dark.png" class="hover-effect-target d-none d-block-dark" width="370" alt="Fashion Store v.1">
                </div>
                <span class="position-absolute top-0 start-0 w-100 h-100" style="background-color: #333d4c;"></span>
              </div>
            </div> -->

            <!-- Electronics store -->
            <!-- <div class="hover-effect-scale ratio" id="electronics" style="--cz-transform-scale: 1.03; --cz-transition-duration: .3s">
              <div class="nav flex-column position-absolute top-0 start-0 w-100 h-100 z-2 pt-4 pt-xl-5 px-4 ps-xl-5 mt-lg-2 ms-lg-2 m-xl-0">
                <h2 class="h3 d-none d-lg-block pb-2 mb-1">Comics</h2>
                <h2 class="h4 d-lg-none mb-2">Comics</h2>
                <p class="fs-xs mb-2 mb-xl-3 d-none d-sm-block d-md-none d-lg-block" style="max-width: 250px">Get a Comic and Groom.</p>
                <a class="nav-link animate-underline stretched-link text-dark-emphasis py-1 px-0" href="home-electronics.html">
                  <span class="animate-target">View</span>
                  <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                </a>
              </div>
              <div class="hover-effect-target d-flex align-items-end justify-content-end h-100 overflow-hidden rounded-5">
                <div class="position-relative z-1 rtl-flip">
                  <img src="assets/img/comic-book.jpg" class="hover-effect-target d-none-dark" width="540" alt="Electronics Store">
                </div>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background-color: #ccdff5;"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background-color: #212c3d;"></span>
              </div>
            </div> -->

            <!-- Fashion store v.2 -->
            <!-- <div class="hover-effect-scale ratio" id="fashion-2" style="--cz-transform-scale: 1.03; --cz-transition-duration: .3s">
              <div class="nav flex-column position-absolute top-0 start-0 w-100 h-100 z-2 pt-4 pt-xl-5 px-4 ps-xl-5 mt-lg-2 ms-lg-2 m-xl-0">
                <h2 class="h3 d-none d-lg-block pb-2 mb-1">Fashion Store v.2</h2>
                <h2 class="h4 d-lg-none mb-2">Fashion Store v.2</h2>
                <p class="fs-xs mb-2 mb-xl-3 d-none d-sm-block d-md-none d-lg-block" style="max-width: 250px">Unleash your style with our versatile and affordable fashion finds.</p>
                <a class="nav-link animate-underline stretched-link text-dark-emphasis py-1 px-0" href="home-fashion-v2.html">
                  <span class="animate-target">View demo</span>
                  <i class="ci-chevron-right fs-base mt-1 ms-1"></i>
                </a>
              </div>
              <div class="hover-effect-target d-flex align-items-end justify-content-end h-100 overflow-hidden rounded-5">
                <div class="position-relative z-1 rtl-flip">
                  <img src="assets/img/intro/demos/fashion-2-light.png" class="hover-effect-target d-none-dark" width="466" alt="Fashion Store v.2">
                  <img src="assets/img/intro/demos/fashion-2-dark.png" class="hover-effect-target d-none d-block-dark" width="466" alt="Fashion Store v.2">
                </div>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark" style="background-color: #f3eef3;"></span>
                <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark" style="background-color: #35313a;"></span>
              </div>
            </div>
          </div>
        </div>  -->
      </section>


      <!-- new releases -->
      <!-- <div class="container mt-5">
        <h2 class="container-title">New Releases</h2>
        <div class="scroll-button-container d-flex">
            <button class="scroll-button left btn btn-primary mr-3" onclick="scrollLeft()">‹</button>
            <div class="scroll-container">
              <?php
                include '../admin/include/connection.php';
                $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE type='front'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
              ?>
                <div class="card book-card" style="width: 19rem;">
                    <img src="../admin/uploads/books/<?php echo $row["isbn"];?>/<?php echo $row["stat_file"]; ?>" class="card-img-top book-img" alt="Book 1" style="width: 100%; height: 300px;">
                    <div class="card-body">
                        <h5 class="book-title"><?php echo $row['name'] ?></h5>
                        <p class="book-author"><?php echo $row['author'] ?></p>
                        <p class="book-price"><?php echo $row['amount'] ?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>

                <?php
                }
                ?>
              </div>
              <button class="scroll-button right btn btn-primary ml-3" onclick="scrollRight()">›</button>
        </div>
    </div>    -->

    <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5 mt-5">
    <div class="row">           
    <div class="col-lg-12">
      <h2 class="container-title mx-5 mb-0">New Releases</h2> 
            <div class="row row-cols-2 row-cols-md-4 g-3 pb-3 mb-3">
              <!-- Item -->
              <?php
                      //  include '../admin/include/connection.php';
                       $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE type='front'";
                       $result = mysqli_query($conn,$sql);
                       while($row = mysqli_fetch_assoc($result)){
              ?>   
              <div class="col">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="position-relative">
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 mt-3 me-3">
                      <div class="d-flex flex-column gap-2">
                        <button type="button" class="btn btn-icon btn-secondary animate-pulse d-none d-lg-inline-flex" aria-label="Add to Wishlist">
                          <i class="ci-heart fs-base animate-target"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-secondary animate-rotate d-none d-lg-inline-flex" aria-label="Compare">
                          <i class="ci-refresh-cw fs-base animate-target"></i>
                        </button>
                      </div>
                    </div>
                    <div class="dropdown d-lg-none position-absolute top-0 end-0 z-2 mt-2 me-2">
                      <button type="button" class="btn btn-icon btn-sm btn-secondary bg-body" data-bs-toggle="dropdown" aria-expanded="false" aria-label="More actions">
                        <i class="ci-more-vertical fs-lg"></i>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end fs-xs p-2" style="min-width: auto">
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-heart fs-sm ms-n1 me-2"></i>
                            Add to Wishlist
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#!">
                            <i class="ci-refresh-cw fs-sm ms-n1 me-2"></i>
                            Compare
                          </a>
                        </li>
                      </ul>
                    </div>
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                      <div class="ratio" style="--cz-aspect-ratio: calc(320 / 258 * 100%)">
                        <img src="../admin/uploads/books/<?php echo $row["isbn"];?>/<?php echo $row["stat_file"]; ?>" alt="VR Glasses">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(123)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                        <span class="animate-target"><?php echo $row['name'] ?></span>
                      </a>
                    </h3>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="book-general-info.php?isbn=<?php echo $row['isbn'] ?>">
                        <span class="animate-target"><?php echo $row['author'] ?></span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">₹<?php echo $row['amount'] ?>/-</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <?php
               }
               ?>
            </div>
    </div>       
    </div>
    </section>
    </main>



    <!-- Page footer -->
    <footer class="footer position-relative bg-dark">
      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body d-none d-block-dark"></span>
      <div class="container position-relative z-1 pt-sm-2 pt-md-3 pt-lg-4" data-bs-theme="dark">

        <!-- Columns with links that are turned into accordion on screens < 500px wide (sm breakpoint) -->
        <div class="accordion py-5" id="footerLinks">
          <div class="row">
            <div class="col-md-4 d-sm-flex flex-md-column align-items-center align-items-md-start pb-3 mb-sm-4">
              <h4 class="mb-sm-0 mb-md-4 me-4">
                <a class="text-dark-emphasis text-decoration-none" href="home-electronics.html">Cartzilla</a>
              </h4>
              <p class="text-body fs-sm text-sm-end text-md-start mb-sm-0 mb-md-3 ms-0 ms-sm-auto ms-md-0 me-4">Got questions? Contact us 24/7</p>
              <div class="dropdown" style="max-width: 250px">
                <button type="button" class="btn btn-light dropdown-toggle justify-content-between w-100 d-none-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help and consultation
                </button>
                <button type="button" class="btn btn-secondary dropdown-toggle justify-content-between w-100 d-none d-flex-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Help and consultation
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#!">Help center &amp; FAQ</a></li>
                  <li><a class="dropdown-item" href="#!">Support chat</a></li>
                  <li><a class="dropdown-item" href="#!">Open support ticket</a></li>
                  <li><a class="dropdown-item" href="#!">Call center</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="row row-cols-1 row-cols-sm-3 gx-3 gx-md-4">
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="companyHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Company</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#companyLinks" aria-expanded="false" aria-controls="companyLinks">Company</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="companyLinks" aria-labelledby="companyHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">About company</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Our team</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Careers</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Contact us</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">News</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="accountHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Account</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#accountLinks" aria-expanded="false" aria-controls="accountLinks">Account</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="accountLinks" aria-labelledby="accountHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Your account</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping rates &amp; policies</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Refunds &amp; replacements</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Delivery info</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Order tracking</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Taxes &amp; fees</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
                <div class="accordion-item col border-0">
                  <h6 class="accordion-header" id="customerHeading">
                    <span class="text-dark-emphasis d-none d-sm-block">Customer service</span>
                    <button type="button" class="accordion-button collapsed py-3 d-sm-none" data-bs-toggle="collapse" data-bs-target="#customerLinks" aria-expanded="false" aria-controls="customerLinks">Customer service</button>
                  </h6>
                  <div class="accordion-collapse collapse d-sm-block" id="customerLinks" aria-labelledby="customerHeading" data-bs-parent="#footerLinks">
                    <ul class="nav flex-column gap-2 pt-sm-3 pb-3 mt-n1 mb-1">
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Payment methods</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Money back guarantee</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Product returns</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Support center</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Shipping</a>
                      </li>
                      <li class="d-flex w-100 pt-1">
                        <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="#!">Terms &amp; conditions</a>
                      </li>
                    </ul>
                  </div>
                  <hr class="d-sm-none my-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Category / tag links -->
        <div class="d-flex flex-column gap-3 pb-3 pb-md-4 pb-lg-5 mt-n2 mt-sm-n4 mt-lg-0 mb-4">
          <ul class="nav align-items-center text-body-tertiary gap-2">
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Computers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Smartphones</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">TV, Video</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Speakers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Cameras</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Printers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Video Games</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Headphones</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Wearable</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">HDD/SSD</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Smart Home</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Apple Devices</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Tablets</a>
            </li>
          </ul>
          <ul class="nav align-items-center text-body-tertiary gap-2">
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Monitors</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Scanners</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Servers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Heating and Cooling</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">E-readers</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Data Storage</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Networking</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Power Strips</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Plugs and Outlets</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Detectors and Sensors</a>
            </li>
            <li class="px-1">/</li>
            <li class="animate-underline">
              <a class="nav-link fw-normal p-0 animate-target" href="#!">Accessories</a>
            </li>
          </ul>
        </div>

        <!-- Copyright + Payment methods -->
        <div class="d-md-flex align-items-center border-top py-4">
          <div class="d-flex gap-2 gap-sm-3 justify-content-center ms-md-auto mb-4 mb-md-0 order-md-2">
            <div>
              <img src="assets/img/payment-methods/visa-dark-mode.svg" alt="Visa">
            </div>
            <div>
              <img src="assets/img/payment-methods/mastercard.svg" alt="Mastercard">
            </div>
            <div>
              <img src="assets/img/payment-methods/paypal-dark-mode.svg" alt="PayPal">
            </div>
            <div>
              <img src="assets/img/payment-methods/google-pay-dark-mode.svg" alt="Google Pay">
            </div>
            <div>
              <img src="assets/img/payment-methods/apple-pay-dark-mode.svg" alt="Apple Pay">
            </div>
          </div>
          <p class="text-body fs-xs text-center text-md-start mb-0 me-4 order-md-1">© All rights reserved. Made by <span class="animate-underline"><a class="animate-target text-dark-emphasis fw-medium text-decoration-none" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></span></p>
        </div>
      </div>

      <!-- Additional spacing to accommodate the sticky offcanvas toggle button -->
      <div class="d-lg-none" style="height: 3.75rem"></div>
    </footer>


    <!-- Filter offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#filterSidebar" aria-controls="filterSidebar" data-bs-theme="light">
      <i class="ci-filter fs-base me-2"></i>
      Filters
    </button>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="ci-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/choices.js/choices.min.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

</body>
</html>