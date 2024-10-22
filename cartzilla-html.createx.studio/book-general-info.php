<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Cartzilla | Electronics Store - Product General Info</title>
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

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/drift-zoom/drift-basic.min.css">
    <link rel="stylesheet" href="assets/vendor/simplebar/simplebar.min.css">
    <link rel="stylesheet" href="assets/vendor/choices.js/choices.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
  </head>


  <!-- Body -->
  <body>
    <!-- Review form modal -->
    <div class="modal fade" id="reviewForm" data-bs-backdrop="static" tabindex="-1" aria-labelledby="reviewFormLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content needs-validation" novalidate="">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="reviewFormLabel">Leave a review</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-3 pt-0">
            <div class="mb-3">
              <label for="review-name" class="form-label">Your name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="review-name" required="">
              <div class="invalid-feedback">Please enter your name!</div>
              <small class="form-text">Will be displayed on the comment.</small>
            </div>
            <div class="mb-3">
              <label for="review-email" class="form-label">Your email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="review-email" required="">
              <div class="invalid-feedback">Please provide a valid email address!</div>
              <small class="form-text">Authentication only - we won't spam you.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Rating <span class="text-danger">*</span></label>
              <select class="form-select" data-select="{
                &quot;placeholderValue&quot;: &quot;Choose rating&quot;,
                &quot;choices&quot;: [
                  {
                    &quot;value&quot;: &quot;&quot;,
                    &quot;label&quot;: &quot;Choose rating&quot;,
                    &quot;placeholder&quot;: true
                  },
                  {
                    &quot;value&quot;: &quot;1&quot;,
                    &quot;label&quot;: &quot;<span class=\&quot;visually-hidden\&quot;>1 star</span>&quot;,
                    &quot;customProperties&quot;: {
                      &quot;icon&quot;: &quot;<span class=\&quot;d-flex gap-1 py-1\&quot;><i class=\&quot;ci-star-filled text-warning\&quot;></i></span>&quot;,
                      &quot;selected&quot;: &quot;1 star&quot;
                    }
                  },
                  {
                    &quot;value&quot;: &quot;2&quot;,
                    &quot;label&quot;: &quot;<span class=\&quot;visually-hidden\&quot;>2 stars</span>&quot;,
                    &quot;customProperties&quot;: {
                      &quot;icon&quot;: &quot;<span class=\&quot;d-flex gap-1 py-1\&quot;><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i></span>&quot;,
                      &quot;selected&quot;: &quot;2 stars&quot;
                    }
                  },
                  {
                    &quot;value&quot;: &quot;3&quot;,
                    &quot;label&quot;: &quot;<span class=\&quot;visually-hidden\&quot;>3 stars</span>&quot;,
                    &quot;customProperties&quot;: {
                      &quot;icon&quot;: &quot;<span class=\&quot;d-flex gap-1 py-1\&quot;><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i></span>&quot;,
                      &quot;selected&quot;: &quot;3 stars&quot;
                    }
                  },
                  {
                    &quot;value&quot;: &quot;4&quot;,
                    &quot;label&quot;: &quot;<span class=\&quot;visually-hidden\&quot;>4 stars</span>&quot;,
                    &quot;customProperties&quot;: {
                      &quot;icon&quot;: &quot;<span class=\&quot;d-flex gap-1 py-1\&quot;><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i></span>&quot;,
                      &quot;selected&quot;: &quot;4 stars&quot;
                    }
                  },
                  {
                    &quot;value&quot;: &quot;5&quot;,
                    &quot;label&quot;: &quot;<span class=\&quot;visually-hidden\&quot;>5 stars</span>&quot;,
                    &quot;customProperties&quot;: {
                      &quot;icon&quot;: &quot;<span class=\&quot;d-flex gap-1 py-1\&quot;><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i><i class=\&quot;ci-star-filled text-warning\&quot;></i></span>&quot;,
                      &quot;selected&quot;: &quot;5 stars&quot;
                    }
                  }
                ]
              }" data-select-template="true" required=""></select>
              <div class="invalid-feedback">Please choose your rating!</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="review-text">Review <span class="text-danger">*</span></label>
              <textarea class="form-control" rows="4" id="review-text" required=""></textarea>
              <div class="invalid-feedback">Please write a review!</div>
              <small class="form-text">Your review must be at least 50 characters.</small>
            </div>
            <div class="mb-3">
              <label class="form-label">Pros</label>
              <input type="text" class="form-select" data-select="{&quot;placeholderValue&quot;: &quot;Type and hit \&quot;Enter\&quot;&quot;}">
            </div>
            <div>
              <label class="form-label">Cons</label>
              <input type="text" class="form-select" data-select="{&quot;placeholderValue&quot;: &quot;Type and hit \&quot;Enter\&quot;&quot;}">
            </div>
          </div>
          <div class="modal-footer flex-nowrap gap-3 border-0 px-4">
            <button type="reset" class="btn btn-secondary w-100 m-0" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary w-100 m-0">Submit review</button>
          </div>
        </form>
      </div>
    </div>


    <!-- Shopping cart offcanvas -->
    <div class="offcanvas offcanvas-end pb-sm-2 px-sm-2" id="shoppingCart" tabindex="-1" aria-labelledby="shoppingCartLabel" style="width: 500px">

      <!-- Header -->
      <div class="offcanvas-header flex-column align-items-start py-3 pt-lg-4">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-lg-4">
          <h4 class="offcanvas-title" id="shoppingCartLabel">Shopping cart</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span class="text-dark-emphasis fw-semibold">Free Shipping</span></p>
        <div class="progress w-100" role="progressbar" aria-label="Free shipping progress" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
          <div class="progress-bar bg-warning rounded-pill" style="width: 75%"></div>
        </div>
      </div>


      <!-- Items -->
      <div class="offcanvas-body d-flex flex-column gap-4 pt-2">
        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="#!">
            <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Apple</a>
            </h5>
            <div class="h6 pb-1 mb-2">$899.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="position-relative flex-shrink-0" href="#!">
            <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
            <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Tablet Apple iPad Pro M2</a>
            </h5>
            <div class="h6 pb-1 mb-2">$989.00 <del class="text-body-tertiary fs-xs fw-normal">$1,099.00</del></div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>

        <!-- Item -->
        <div class="d-flex align-items-center">
          <a class="flex-shrink-0" href="#!">
            <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="#!">Smart Watch Series 7, White</a>
            </h5>
            <div class="h6 pb-1 mb-2">$429.00</div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="count-input rounded-2">
                <button type="button" class="btn btn-icon btn-sm" data-decrement="" aria-label="Decrement quantity">
                  <i class="ci-minus"></i>
                </button>
                <input type="number" class="form-control form-control-sm" value="1" readonly="">
                <button type="button" class="btn btn-icon btn-sm" data-increment="" aria-label="Increment quantity">
                  <i class="ci-plus"></i>
                </button>
              </div>
              <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Remove" aria-label="Remove from cart"></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="offcanvas-header flex-column align-items-start">
        <div class="d-flex align-items-center justify-content-between w-100 mb-3 mb-md-4">
          <span class="text-light-emphasis">Subtotal:</span>
          <span class="h6 mb-0">$2,317.00</span>
        </div>
        <div class="d-flex w-100 gap-3">
          <a class="btn btn-lg btn-secondary w-100" href="checkout-v1-cart.html">View cart</a>
          <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">Checkout</a>
        </div>
      </div>
    </div>


    <!-- Navbar -->
    <?php
        include 'include/nav.php';

             $isbn = $_GET['isbn'];
            include '../admin/include/connection.php';
            $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE tbl_book.isbn=$isbn";
            $result = mysqli_query($conn,$sql);
            // $row = mysqli_fetch_assoc($result);
       ?>                  

    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
          <li class="breadcrumb-item"><a href="shop-catalog-electronics.html">Shop</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product page</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 container mb-4"><?php echo $row['name'] ?></h1>


      <!-- Nav links + Reviews -->
      <section class="container pb-2 pb-lg-4">
        <div class="d-flex align-items-center border-bottom">
          <ul class="nav nav-underline flex-nowrap gap-4">
            <li class="nav-item me-sm-2">
              <a class="nav-link pe-none active" href="#!">General info</a>
            </li>
            <li class="nav-item me-sm-2">
              <a class="nav-link" href="shop-product-details-electronics.html">Product details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop-product-reviews-electronics.html">Reviews (68)</a>
            </li>
          </ul>
          <a class="d-none d-md-flex align-items-center gap-2 text-decoration-none ms-auto mb-1" href="#reviews">
            <div class="d-flex gap-1 fs-sm">
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-filled text-warning"></i>
              <i class="ci-star-half text-warning"></i>
            </div>
            <span class="text-body-tertiary fs-xs">68 reviews</span>
          </a>
        </div>
      </section>


      <!-- Gallery + Product options -->
      <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row">

          <!-- Product gallery -->
          <div class="col-md-6">

            <!-- Preview (Large image) -->
            <div class="swiper" data-swiper="{
              &quot;loop&quot;: true,
              &quot;navigation&quot;: {
                &quot;prevEl&quot;: &quot;.btn-prev&quot;,
                &quot;nextEl&quot;: &quot;.btn-next&quot;
              },
              &quot;thumbs&quot;: {
                &quot;swiper&quot;: &quot;#thumbs&quot;
              }
            }">
              <div class="swiper-wrapper">
                  <?php
                     while($row2 = mysqli_fetch_assoc($result)){
                  ?>
                <div class="swiper-slide">
                  <div class="ratio ratio-1x1">
                    <img src="../admin/uploads/books/<?php echo $row2["isbn"];?>/<?php echo $row2["stat_file"]; ?>" data-zoom="../admin/uploads/books/<?php echo $row2["isbn"];?>/<?php echo $row2["stat_file"]; ?>" data-zoom-options="{
                      &quot;paneSelector&quot;: &quot;#zoomPane&quot;,
                      &quot;inlinePane&quot;: 768,
                      &quot;hoverDelay&quot;: 500,
                      &quot;touchDisable&quot;: true
                    }" alt="Preview">
                  </div>
                </div>
                    <?php
                        }
                     ?>
              </div>
              <!-- Prev button -->
              <div class="position-absolute top-50 start-0 z-2 translate-middle-y ms-sm-2 ms-lg-3">
                <button type="button" class="btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start" aria-label="Prev">
                  <i class="ci-chevron-left fs-lg animate-target"></i>
                </button>
              </div>

              <!-- Next button -->
              <div class="position-absolute top-50 end-0 z-2 translate-middle-y me-sm-2 me-lg-3">
                <button type="button" class="btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
                  <i class="ci-chevron-right fs-lg animate-target"></i>
                </button>
              </div>
            </div>

            <!-- Thumbnails -->
            <div class="swiper swiper-load swiper-thumbs pt-2 mt-1" id="thumbs" data-swiper="{
              &quot;loop&quot;: true,
              &quot;spaceBetween&quot;: 12,
              &quot;slidesPerView&quot;: 3,
              &quot;watchSlidesProgress&quot;: true,
              &quot;breakpoints&quot;: {
                &quot;340&quot;: {
                  &quot;slidesPerView&quot;: 4
                },
                &quot;500&quot;: {
                  &quot;slidesPerView&quot;: 5
                },
                &quot;600&quot;: {
                  &quot;slidesPerView&quot;: 6
                },
                &quot;768&quot;: {
                  &quot;slidesPerView&quot;: 4
                },
                &quot;992&quot;: {
                  &quot;slidesPerView&quot;: 5
                },
                &quot;1200&quot;: {
                  &quot;slidesPerView&quot;: 6
                }
              }
            }">
              <div class="swiper-wrapper">
                <div class="swiper-slide swiper-thumb">
                  <div class="ratio ratio-1x1" style="max-width: 94px">
                    <img src="assets/img/shop/electronics/product/gallery/th01.png" class="swiper-thumb-img" alt="Thumbnail">
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Product options -->
          <div class="col-md-6 col-xl-5 offset-xl-1 pt-4">
            <div class="ps-md-4 ps-xl-0">
              <div class="position-relative" id="zoomPane">

                <!-- Model -->
                <div class="pb-3 mb-2 mb-lg-3">
                  <label class="form-label fw-semibold pb-1 mb-2">Model</label>
                  <div class="d-flex flex-wrap gap-2">
                    <input type="radio" class="btn-check" name="model-options" id="gb-64">
                    <label for="gb-64" class="btn btn-sm btn-outline-secondary">64 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-128" checked="">
                    <label for="gb-128" class="btn btn-sm btn-outline-secondary">128 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-256">
                    <label for="gb-256" class="btn btn-sm btn-outline-secondary">256 GB</label>
                    <input type="radio" class="btn-check" name="model-options" id="gb-512">
                    <label for="gb-512" class="btn btn-sm btn-outline-secondary">512 GB</label>
                  </div>
                </div>

                <!-- Color -->
                <div class="pb-3 mb-2 mb-lg-3">
                  <label class="form-label fw-semibold pb-1 mb-2">Color: <span class="text-body fw-normal" id="colorOption">Gray blue</span></label>
                  <div class="d-flex flex-wrap gap-2" data-binded-label="#colorOption">
                    <input type="radio" class="btn-check" name="color-options" id="color-1" checked="">
                    <label for="color-1" class="btn btn-color fs-xl" data-label="Gray blue" style="color: #5a7aa1">
                      <span class="visually-hidden">Gray blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-2">
                    <label for="color-2" class="btn btn-color fs-xl" data-label="Pink" style="color: #ee7976">
                      <span class="visually-hidden">Pink</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-3">
                    <label for="color-3" class="btn btn-color fs-xl" data-label="Light blue" style="color: #9acbf1">
                      <span class="visually-hidden">Light blue</span>
                    </label>
                    <input type="radio" class="btn-check" name="color-options" id="color-4">
                    <label for="color-4" class="btn btn-color fs-xl" data-label="Green" style="color: #8cd1ab">
                      <span class="visually-hidden">Green</span>
                    </label>
                  </div>
                </div>

                <!-- Price -->
                <div class="d-flex flex-wrap align-items-center mb-3">
                  <div class="h4 mb-0 me-3">$940.00</div>
                  <div class="d-flex align-items-center text-success fs-sm ms-auto">
                    <i class="ci-check-circle fs-base me-2"></i>
                    Available to order
                  </div>
                </div>

                <!-- Count + Buttons -->
                <div class="d-flex flex-wrap flex-sm-nowrap flex-md-wrap flex-lg-nowrap gap-3 gap-lg-2 gap-xl-3 mb-4">
                  <div class="count-input flex-shrink-0 order-sm-1">
                    <button type="button" class="btn btn-icon btn-lg" data-decrement="" aria-label="Decrement quantity">
                      <i class="ci-minus"></i>
                    </button>
                    <input type="number" class="form-control form-control-lg" value="1" min="1" max="5" readonly="">
                    <button type="button" class="btn btn-icon btn-lg" data-increment="" aria-label="Increment quantity">
                      <i class="ci-plus"></i>
                    </button>
                  </div>
                  <button type="button" class="btn btn-icon btn-lg btn-secondary animate-pulse order-sm-3 order-md-2 order-lg-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                    <i class="ci-heart fs-lg animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-icon btn-lg btn-secondary animate-rotate order-sm-4 order-md-3 order-lg-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                    <i class="ci-refresh-cw fs-lg animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-lg btn-primary w-100 animate-slide-end order-sm-2 order-md-4 order-lg-2">
                    <i class="ci-shopping-cart fs-lg animate-target ms-n1 me-2"></i>
                    Add to cart
                  </button>
                </div>

                <!-- Features -->
                <div class="d-flex flex-wrap gap-3 gap-xl-4 pb-4 pb-lg-5 mb-2 mb-lg-0 mb-xl-2">
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="text-warning me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"><path d="M1.333 9.667H7.5V16h-5c-.64 0-1.167-.527-1.167-1.167V9.667zm13.334 0v5.167c0 .64-.527 1.167-1.167 1.167h-5V9.667h6.167zM0 5.833V7.5c0 .64.527 1.167 1.167 1.167h.167H7.5v-1-3H1.167C.527 4.667 0 5.193 0 5.833zm14.833-1.166H8.5v3 1h6.167.167C15.473 8.667 16 8.14 16 7.5V5.833c0-.64-.527-1.167-1.167-1.167z"></path><path d="M8 5.363a.5.5 0 0 1-.495-.573C7.752 3.123 9.054-.03 12.219-.03c1.807.001 2.447.977 2.447 1.813 0 1.486-2.069 3.58-6.667 3.58zM12.219.971c-2.388 0-3.295 2.27-3.595 3.377 1.884-.088 3.072-.565 3.756-.971.949-.563 1.287-1.193 1.287-1.595 0-.599-.747-.811-1.447-.811z"></path><path d="M8.001 5.363c-4.598 0-6.667-2.094-6.667-3.58 0-.836.641-1.812 2.448-1.812 3.165 0 4.467 3.153 4.713 4.819a.5.5 0 0 1-.495.573zM3.782.971c-.7 0-1.448.213-1.448.812 0 .851 1.489 2.403 5.042 2.566C7.076 3.241 6.169.971 3.782.971z"></path></svg>
                    <div class="text-body-emphasis text-nowrap"><span class="fw-semibold">+32</span> bonuses</div>
                  </div>
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="text-primary me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path d="M15.264 8.001l.702-1.831a.5.5 0 0 0-.152-.568l-1.522-1.234-.308-1.937a.5.5 0 0 0-.416-.415l-1.937-.308L10.399.185a.5.5 0 0 0-.567-.152L8 .736 6.169.034a.5.5 0 0 0-.567.152L4.368 1.709l-1.937.308a.5.5 0 0 0-.415.415l-.308 1.937L.185 5.603a.5.5 0 0 0-.152.567l.702 1.831-.702 1.831a.5.5 0 0 0 .152.567l1.523 1.233.308 1.937a.5.5 0 0 0 .415.416l1.937.308 1.234 1.522c.137.17.366.23.568.152L8 15.265l1.831.702a.5.5 0 0 0 .568-.153l1.233-1.522 1.937-.308a.5.5 0 0 0 .416-.416l.308-1.937 1.522-1.233a.5.5 0 0 0 .152-.567l-.702-1.831z" fill="currentColor"></path><path d="M6.5 7.001a1.5 1.5 0 1 1 0-3 1.5 1.5 0 1 1 0 3zm0-2a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1zM9.5 12a1.5 1.5 0 1 1 0-3 1.5 1.5 0 1 1 0 3zm0-2a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1zm-4 2c-.101 0-.202-.03-.29-.093a.5.5 0 0 1-.116-.698l5-7a.5.5 0 1 1 .814.581l-5 7A.5.5 0 0 1 5.5 12z" fill="white"></path></svg>
                    <div class="text-body-emphasis text-nowrap">Interest-free loan</div>
                  </div>
                  <div class="d-flex align-items-center fs-sm">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"><path class="text-success" d="M7.42169 1.15662C3.3228 1.15662 0 4.47941 0 8.5783C0 12.6772 3.3228 16 7.42169 16C11.5206 16 14.8434 12.6772 14.8434 8.5783H7.42169V1.15662Z" fill="currentColor"></path><path class="text-info" d="M8.57812 0V7.42169H15.9998C15.9998 3.3228 12.677 0 8.57812 0Z" fill="currentColor"></path><defs><rect width="16" height="16" fill="white"></rect></defs></svg>
                    <div class="text-body-emphasis text-nowrap">Pay by installments</div>
                  </div>
                </div>
              </div>

              <!-- Shipping options -->
              <div class="d-flex align-items-center pb-2">
                <h3 class="h6 mb-0">Shipping options</h3>
                <a class="btn btn-sm btn-secondary ms-auto" href="#!">
                  <i class="ci-map-pin fs-sm ms-n1 me-1"></i>
                  Find local store
                </a>
              </div>
              <table class="table table-borderless fs-sm mb-2">
                <tbody>
                  <tr>
                    <td class="py-2 ps-0">Pickup from the store</td>
                    <td class="py-2">Today</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">Free</td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">Pickup from postal offices</td>
                    <td class="py-2">Tomorrow</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">$25.00</td>
                  </tr>
                  <tr>
                    <td class="py-2 ps-0">Delivery by courier</td>
                    <td class="py-2">2-3 days</td>
                    <td class="text-body-emphasis fw-semibold text-end py-2 pe-0">$35.00</td>
                  </tr>
                </tbody>
              </table>

              <!-- Warranty + Payment info accordion -->
              <div class="accordion" id="infoAccordion">
                <div class="accordion-item border-top">
                  <h3 class="accordion-header" id="headingWarranty">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#warranty" aria-expanded="false" aria-controls="warranty">
                      <span class="animate-target me-2">Warranty information</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="warranty" aria-labelledby="headingWarranty" data-bs-parent="#infoAccordion">
                    <div class="accordion-body">
                      <div class="alert d-flex alert-info mb-3" role="alert">
                        <i class="ci-check-shield fs-xl mt-1 me-2"></i>
                        <div class="fs-sm"><span class="fw-semibold">Warranty:</span> 12 months of official manufacturer's warranty. Exchange/return of the product within 14 days.</div>
                      </div>
                      <p class="mb-0">Explore the details of our <a class="fw-medium" href="#!">product warranties here</a>, including duration, coverage, and any additional protection plans available. We prioritize your satisfaction, and our warranty information is designed to keep you informed and confident in your purchase.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h3 class="accordion-header" id="headingPayment">
                    <button type="button" class="accordion-button animate-underline collapsed" data-bs-toggle="collapse" data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                      <span class="animate-target me-2">Payment and credit</span>
                    </button>
                  </h3>
                  <div class="accordion-collapse collapse" id="payment" aria-labelledby="headingPayment" data-bs-parent="#infoAccordion">
                    <div class="accordion-body">Experience hassle-free transactions with our <a class="fw-medium" href="#!">flexible payment options</a> and credit facilities. Learn more about the various payment methods accepted, installment plans, and any exclusive credit offers available to make your shopping experience seamless.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Sticky product preview + Add to cart CTA -->
      <section class="sticky-product-banner sticky-top d-md-none" data-sticky-element="">
        <div class="sticky-product-banner-inner pt-5">
          <div class="bg-body border-bottom border-light border-opacity-10 shadow pt-4 pb-2">
            <div class="container d-flex align-items-center">
              <div class="d-flex align-items-center min-w-0 ms-n2 me-3">
                <div class="ratio ratio-1x1 flex-shrink-0" style="width: 50px">
                  <img src="assets/img/shop/electronics/thumbs/10.png" alt="iPhone 14">
                </div>
                <div class="w-100 min-w-0 ps-2">
                  <h4 class="fs-sm fw-medium text-truncate mb-1">Apple iPhone 14 Plus 128GB Blue</h4>
                  <div class="h6 mb-0">$940.00</div>
                </div>
              </div>
              <div class="d-flex gap-2 ms-auto">
                <button type="button" class="btn btn-icon btn-secondary animate-pulse" aria-label="Add to Wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
                <button type="button" class="btn btn-primary animate-slide-end d-none d-sm-inline-flex">
                  <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                  Add to cart
                </button>
                <button type="button" class="btn btn-icon btn-primary animate-slide-end d-sm-none" aria-label="Add to Cart">
                  <i class="ci-shopping-cart fs-lg animate-target"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Bundle discount (Cheaper together) -->
      <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="bg-body-tertiary rounded-5 pt-5">
          <h2 class="h3 text-center pb-2 py-lg-3">Cheaper together</h2>
          <div class="row justify-content-center px-4 px-md-0">
            <div class="col-md-10">
              <div class="overflow-auto" data-simplebar="" data-simplebar-auto-hide="false">
                <div class="d-flex align-items-center justify-content-between pb-4 mb-2" style="min-width: 840px">

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="iphone" checked="" disabled="">
                      <label for="iphone" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/14.png" alt="iPhone 14">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB White</span>
                      </a>
                    </h3>
                    <div class="h6 mb-0">$940.00</div>
                  </div>

                  <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="airpods" checked="">
                      <label for="airpods" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/06.png" alt="AirPods 2 Pro">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-danger">-32%</span>
                      <span class="h6 mb-0">$224.00</span>
                      <del class="text-body-tertiary fs-xs">$330.00</del>
                    </div>
                  </div>

                  <div class="ci-plus fs-4 mt-n5 mx-3 mx-lg-4"></div>

                  <!-- Item -->
                  <div class="w-100" style="max-width: 306px">
                    <div class="form-check position-relative p-0 m-0 mb-3">
                      <input type="checkbox" class="form-check-input position-absolute top-0 end-0 mt-3 me-3" id="charger">
                      <label for="charger" class="d-flex justify-content-center bg-body rounded p-3">
                        <span class="ratio d-block" style="max-width: 258px; --cz-aspect-ratio: calc(240 / 258 * 100%)">
                          <img src="assets/img/shop/electronics/15.png" alt="Wireless charger">
                        </span>
                      </label>
                    </div>
                    <h3 class="mb-2">
                      <a class="d-block fs-sm fw-medium animate-underline text-truncate" href="#!">
                        <span class="animate-target">Wireless charger for iPhone</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-danger">-48%</span>
                      <span class="h6 mb-0">$26.00</span>
                      <del class="text-body-tertiary fs-xs">$50.00</del>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-0">
          <div class="row justify-content-center p-4 px-md-0">
            <div class="col-md-10 d-md-flex align-items-center py-md-3">
              <div class="fs-sm me-3 mb-3 mb-md-0">Total for selected products</div>
              <div class="d-flex align-items-center ms-auto">
                <span class="h5 mb-0 me-4">$1,164.00</span>
                <button type="button" class="btn btn-primary ms-auto">Purchase together</button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Trending products (Carousel) -->
      <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
        <h2 class="h3 border-bottom pb-4 mb-0">Trending products</h2>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper py-4 px-sm-3" data-swiper="{
            &quot;slidesPerView&quot;: 2,
            &quot;spaceBetween&quot;: 24,
            &quot;loop&quot;: true,
            &quot;navigation&quot;: {
              &quot;prevEl&quot;: &quot;.trending-prev&quot;,
              &quot;nextEl&quot;: &quot;.trending-next&quot;
            },
            &quot;breakpoints&quot;: {
              &quot;768&quot;: {
                &quot;slidesPerView&quot;: 3
              },
              &quot;992&quot;: {
                &quot;slidesPerView&quot;: 4
              }
            }
          }">
            <div class="swiper-wrapper">

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-21%</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/01.png" alt="VR Glasses">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">VRB01 Virtual Reality Glasses</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$340.99 <del class="text-body-tertiary fs-sm fw-normal">$430.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/02.png" alt="iPhone 14">
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
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(142)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$899.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/03.png" alt="Smart Watch">
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
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(67)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Smart Watch Series 7, White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                      <div class="h5 lh-1 mb-0">$429.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-info position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">New</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/04.png" alt="MacBook">
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
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(51)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Laptop Apple MacBook Pro 13 M2</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$1,200.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="posittion-relative">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/08.png" alt="Bluetooth Headphones">
                      </div>
                    </a>
                  </div>
                  <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-half text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(136)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Wireless Bluetooth Headphones Sony</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$299.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
          <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
            <button type="button" class="trending-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="trending-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Product details and Reviews shared container -->
      <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row">
          <div class="col-md-7">

            <!-- Product details -->
            <h2 class="h3 pb-2 pb-md-3">Product details</h2>
            <h3 class="h6">General specs</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-3 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Model:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">iPhone 14 Plus</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Manufacturer:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Apple Inc.</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Finish:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Ceramic, Glass, Aluminium</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="Ceramic shield front, Glass back and Aluminium design"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Capacity:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">128GB</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Chip:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">A15 Bionic chip</span>
              </li>
            </ul>
            <h3 class="h6">Display</h3>
            <ul class="list-unstyled d-flex flex-column gap-3 fs-sm pb-1 m-0 mb-2 mb-sm-3">
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Diagonal:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">6.1"</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Screen type:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">Super Retina XDR</span>
                <i class="ci-info fs-base text-body-tertiary position-absolute top-50 end-0 translate-middle-y" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-custom-class="popover-sm" data-bs-content="HDR display, True Tone, Wide color (P3), Haptic Touch, 800 nits brightness"></i>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Resolution:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">2778x1284px at 458ppi</span>
              </li>
              <li class="d-flex align-items-center position-relative pe-4">
                <span>Refresh rate:</span>
                <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                <span class="text-dark-emphasis fw-medium text-end">120 Hz</span>
              </li>
            </ul>
            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-details-electronics.html">
                <span class="animate-target">See all product details</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>


            <!-- Reviews -->
            <div class="d-flex align-items-center pt-5 mb-4 mt-2 mt-md-3 mt-lg-4" id="reviews" style="scroll-margin-top: 80px">
              <h2 class="h3 mb-0">Reviews</h2>
              <button type="button" class="btn btn-secondary ms-auto" data-bs-toggle="modal" data-bs-target="#reviewForm">
                <i class="ci-edit-3 fs-base ms-n1 me-2"></i>
                Leave a review
              </button>
            </div>

            <!-- Reviews stats -->
            <div class="row g-4 pb-3">
              <div class="col-sm-4">

                <!-- Overall rating card -->
                <div class="d-flex flex-column align-items-center justify-content-center h-100 bg-body-tertiary rounded p-4">
                  <div class="h1 pb-2 mb-1">4.1</div>
                  <div class="hstack justify-content-center gap-1 fs-sm mb-2">
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star-filled text-warning"></i>
                    <i class="ci-star text-body-tertiary opacity-60"></i>
                  </div>
                  <div class="fs-sm">68 reviews</div>
                </div>
              </div>
              <div class="col-sm-8">

                <!-- Rating breakdown by quantity -->
                <div class="vstack gap-3">

                  <!-- 5 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      5<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Five stars" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 54%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">37</div>
                  </div>

                  <!-- 4 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      4<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Four stars" aria-valuenow="23.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 23.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">16</div>
                  </div>

                  <!-- 3 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      3<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Three stars" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 13%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">9</div>
                  </div>

                  <!-- 2 stars -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      2<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="Two stars" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 6%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">4</div>
                  </div>

                  <!-- 1 star -->
                  <div class="hstack gap-2">
                    <div class="hstack fs-sm gap-1">
                      1<i class="ci-star-filled text-warning"></i>
                    </div>
                    <div class="progress w-100" role="progressbar" aria-label="One star" aria-valuenow="3.5" aria-valuemin="0" aria-valuemax="100" style="height: 4px">
                      <div class="progress-bar bg-warning rounded-pill" style="width: 3.5%"></div>
                    </div>
                    <div class="fs-sm text-nowrap text-end" style="width: 40px;">3</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-3 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="text-nowrap me-3">
                  <span class="h6 mb-0">Rafael Marquez</span>
                  <i class="ci-check-circle text-success align-middle ms-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Verified customer"></i>
                </div>
                <span class="text-body-secondary fs-sm ms-auto">June 28, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
              </div>
              <ul class="list-inline gap-2 pb-2 mb-1">
                <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
                <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
              </ul>
              <p class="fs-sm">The phone has a new A15 Bionic chip, which makes it lightning-fast and responsive. The camera system has also been upgraded, and it now includes a 12-megapixel ultra-wide lens and a 12-megapixel wide lens.</p>
              <ul class="list-unstyled fs-sm pb-2 mb-1">
                <li><span class="text-dark-emphasis fw-medium">Pros:</span> Powerful A15 Bionic chip, improved camera</li>
                <li><span class="text-dark-emphasis fw-medium">Cons:</span> High price tag</li>
              </ul>
              <div class="nav align-items-center">
                <button type="button" class="nav-link animate-underline px-0">
                  <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                  <span class="animate-target">Reply</span>
                </button>
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                  <i class="ci-thumbs-up fs-base animate-target me-1"></i>
                  0
                </button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                  <i class="ci-thumbs-down fs-base animate-target me-1"></i>
                  0
                </button>
              </div>
            </div>

            <!-- Review -->
            <div class="border-bottom py-3 mb-3">
              <div class="d-flex align-items-center mb-3">
                <div class="text-nowrap me-3">
                  <span class="h6 mb-0">Daniel Adams</span>
                </div>
                <span class="text-body-secondary fs-sm ms-auto">May 15, 2024</span>
              </div>
              <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star-filled text-warning"></i>
                <i class="ci-star text-body-tertiary opacity-75"></i>
              </div>
              <ul class="list-inline gap-2 pb-2 mb-1">
                <li class="fs-sm me-4"><span class="text-dark-emphasis fw-medium">Color:</span> Blue</li>
                <li class="fs-sm"><span class="text-dark-emphasis fw-medium">Model:</span> 128GB</li>
              </ul>
              <p class="fs-sm">The phone has a new A15 Bionic chip, which makes it lightning-fast and responsive. The camera system has also been upgraded, and it now includes a 12-megapixel ultra-wide lens and a 12-megapixel wide lens.</p>
              <ul class="list-unstyled fs-sm pb-2 mb-1">
                <li><span class="text-dark-emphasis fw-medium">Pros:</span> Powerful A15 Bionic chip, improved camera</li>
                <li><span class="text-dark-emphasis fw-medium">Cons:</span> High price tag</li>
              </ul>
              <div class="nav align-items-center">
                <button type="button" class="nav-link animate-underline px-0">
                  <i class="ci-corner-down-right fs-base ms-1 me-1"></i>
                  <span class="animate-target">Reply</span>
                </button>
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-auto me-n1">
                  <i class="ci-thumbs-up text-success fs-base animate-target me-1"></i>
                  18
                </button>
                <hr class="vr my-2 mx-3">
                <button type="button" class="nav-link text-body-secondary animate-scale px-0 ms-n1">
                  <i class="ci-thumbs-down text-danger fs-base animate-target me-1"></i>
                  2
                </button>
              </div>
            </div>

            <div class="nav">
              <a class="nav-link text-primary animate-underline px-0" href="shop-product-reviews-electronics.html">
                <span class="animate-target">See all reviews</span>
                <i class="ci-chevron-right fs-base ms-1"></i>
              </a>
            </div>
          </div>


          <!-- Sticky product preview visible on screens > 991px wide (lg breakpoint) -->
          <aside class="col-md-5 col-xl-4 offset-xl-1 d-none d-md-block" style="margin-top: -100px">
            <div class="position-sticky top-0 ps-3 ps-lg-4 ps-xl-0" style="padding-top: 100px">
              <div class="border rounded p-3 p-lg-4">
                <div class="d-flex align-items-center mb-3">
                  <div class="ratio ratio-1x1 flex-shrink-0" style="width: 110px">
                    <img src="assets/img/shop/electronics/thumbs/10.png" width="110" alt="iPhone 14">
                  </div>
                  <div class="w-100 min-w-0 ps-2 ps-sm-3">
                    <div class="d-flex align-items-center gap-2 mb-2">
                      <div class="d-flex gap-1 fs-xs">
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star-filled text-warning"></i>
                        <i class="ci-star text-body-tertiary opacity-75"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">68</span>
                    </div>
                    <h4 class="fs-sm fw-medium mb-2">Apple iPhone 14 Plus 128GB Blue</h4>
                    <div class="h5 mb-0">$940.00</div>
                  </div>
                </div>
                <div class="d-flex gap-2 gap-lg-3">
                  <button type="button" class="btn btn-primary w-100 animate-slide-end">
                    <i class="ci-shopping-cart fs-base animate-target ms-n1 me-2"></i>
                    Add to cart
                  </button>
                  <button type="button" class="btn btn-icon btn-secondary animate-pulse" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Add to Wishlist" aria-label="Add to Wishlist">
                    <i class="ci-heart fs-base animate-target"></i>
                  </button>
                  <button type="button" class="btn btn-icon btn-secondary animate-rotate" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-sm" data-bs-title="Compare" aria-label="Compare">
                    <i class="ci-refresh-cw fs-base animate-target"></i>
                  </button>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </section>


      <!-- Viewed products (Carousel) -->
      <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">
        <h2 class="h3 border-bottom pb-4 mb-0">Viewed products</h2>

        <!-- Product carousel -->
        <div class="position-relative mx-md-1">

          <!-- External slider prev/next buttons visible on screens > 500px wide (sm breakpoint) -->
          <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start position-absolute top-50 start-0 z-2 translate-middle-y ms-n1 d-none d-sm-inline-flex" aria-label="Prev">
            <i class="ci-chevron-left fs-lg animate-target"></i>
          </button>
          <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end position-absolute top-50 end-0 z-2 translate-middle-y me-n1 d-none d-sm-inline-flex" aria-label="Next">
            <i class="ci-chevron-right fs-lg animate-target"></i>
          </button>

          <!-- Slider -->
          <div class="swiper py-4 px-sm-3" data-swiper="{
            &quot;slidesPerView&quot;: 2,
            &quot;spaceBetween&quot;: 24,
            &quot;loop&quot;: true,
            &quot;navigation&quot;: {
              &quot;prevEl&quot;: &quot;.viewed-prev&quot;,
              &quot;nextEl&quot;: &quot;.viewed-next&quot;
            },
            &quot;breakpoints&quot;: {
              &quot;768&quot;: {
                &quot;slidesPerView&quot;: 3
              },
              &quot;992&quot;: {
                &quot;slidesPerView&quot;: 4
              }
            }
          }">
            <div class="swiper-wrapper">

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/13.png" alt="Dualsense Edge">
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
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(187)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Sony Dualsense Edge Controller</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$200.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <span class="badge bg-danger position-absolute top-0 start-0 mt-2 ms-2 mt-lg-3 ms-lg-3">-17%</span>
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/11.png" alt="Nikon Camera">
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
                        <i class="ci-star-filled text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(14)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">VRB01 Camera Nikon Max</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$652.00 <del class="text-body-tertiary fs-sm fw-normal">$785.00</del></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/10.png" alt="iPhone 14">
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
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(335)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Apple iPhone 14 128GB Blue</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$899.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
                <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                  <div class="posittion-relative">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/07.png" alt="iPad Pro">
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
                        <i class="ci-star-half text-warning"></i>
                      </div>
                      <span class="text-body-tertiary fs-xs">(49)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Tablet Apple iPad Pro M1</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$739.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="swiper-slide">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#!">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/06.png" alt="AirPods 2">
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
                      <span class="text-body-tertiary fs-xs">(78)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="#!">
                        <span class="animate-target">Headphones Apple AirPods 2 Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$224.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- External slider prev/next buttons visible on screens < 500px wide (sm breakpoint) -->
          <div class="d-flex justify-content-center gap-2 mt-n2 mb-3 pb-1 d-sm-none">
            <button type="button" class="viewed-prev btn btn-prev btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-start me-1" aria-label="Prev">
              <i class="ci-chevron-left fs-lg animate-target"></i>
            </button>
            <button type="button" class="viewed-next btn btn-next btn-icon btn-outline-secondary bg-body rounded-circle animate-slide-end" aria-label="Next">
              <i class="ci-chevron-right fs-lg animate-target"></i>
            </button>
          </div>
        </div>
      </section>


      <!-- Subscription form + Vlog -->
      <section class="bg-body-tertiary py-5">
        <div class="container pt-sm-2 pt-md-3 pt-lg-4 pt-xl-5">
          <div class="row">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
              <h2 class="h4 mb-2">Sign up to our newsletter</h2>
              <p class="text-body pb-2 pb-ms-3">Receive our latest updates about our products &amp; promotions</p>
              <form class="d-flex needs-validation pb-1 pb-sm-2 pb-md-3 pb-lg-0 mb-4 mb-lg-5" novalidate="">
                <div class="position-relative w-100 me-2">
                  <input type="email" class="form-control form-control-lg" placeholder="Your email" required="">
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Subscribe</button>
              </form>
              <div class="d-flex gap-3">
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Instagram">
                  <i class="ci-instagram fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Facebook">
                  <i class="ci-facebook fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="YouTube">
                  <i class="ci-youtube fs-base"></i>
                </a>
                <a class="btn btn-icon btn-secondary rounded-circle" href="#!" aria-label="Telegram">
                  <i class="ci-telegram fs-base"></i>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 offset-lg-1 offset-xl-2">
              <ul class="list-unstyled d-flex flex-column gap-4 ps-md-4 ps-lg-0 mb-3">
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/01.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">6:16</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 New Cool Gadgets You Must See on Cartzilla - Cheap Budget</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/02.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">10:20</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">5 Super Useful Gadgets on Cartzilla You Must Have in 2023</a>
                  </div>
                </li>
                <li class="nav flex-nowrap align-items-center position-relative">
                  <img src="assets/img/home/electronics/vlog/03.jpg" class="rounded" width="140" alt="Video cover">
                  <div class="ps-3">
                    <div class="fs-xs text-body-secondary lh-sm mb-2">8:40</div>
                    <a class="nav-link fs-sm hover-effect-underline stretched-link p-0" href="#!">Top 5 New Amazing Gadgets on Cartzilla You Must See</a>
                  </div>
                </li>
              </ul>
              <div class="nav ps-md-4 ps-lg-0">
                <a class="btn nav-link animate-underline text-decoration-none px-0" href="#!">
                  <span class="animate-target">View all</span>
                  <i class="ci-chevron-right fs-base ms-1"></i>
                </a>
              </div>
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
    </footer>


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
      </a>
    </div>


    <!-- Vendor scripts -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/drift-zoom/Drift.min.js"></script>
    <script src="assets/vendor/simplebar/simplebar.min.js"></script>
    <script src="assets/vendor/choices.js/choices.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
  

</body>
<!-- Mirrored from cartzilla-html.createx.studio/shop-product-general-electronics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 09:28:34 GMT -->
</html>