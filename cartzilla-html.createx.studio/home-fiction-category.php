<?php
  session_start();
?>
<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
<head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Fiction - Category ||Book Heaven || For Book Lovers</title>
    <meta name="description" content="Cartzilla - Multipurpose Bootstrap E-Commerce HTML Template">
    <meta name="keywords" content="online shop, e-commerce, online store, market, multipurpose, product landing, cart, checkout, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
    <link rel="stylesheet" href="assets/vendor/img-comparison-slider/styles.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="preload" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="assets/css/style.css">
    
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
    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top px-0" data-sticky-element="">
      <div class="container flex-nowrap">

        <!-- Mobile offcanvas menu toggler (Hamburger) -->
        <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar brand (Logo) -->
        <a href="index.php" class="navbar-brand py-1 py-md-1 py-xl-1 mx-5">
          <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
            <img src="assets/img/book-heaven-logo.jpeg" width="90">
          </span>
        </a>

        <!-- Main navigation that turns into offcanvas on screens < 992px wide (lg breakpoint) -->
        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
          <div class="offcanvas-header py-3">
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pt-3 pb-4 py-lg-0 mx-lg-auto">
            <ul class="navbar-nav position-relative">
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Home</a>
                <ul class="dropdown-menu" style="--cz-dropdown-spacer: .875rem">
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
              <li class="nav-item dropdown position-static py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                <div class="dropdown-menu rounded-4 p-4" style="--cz-dropdown-spacer: .875rem">
                  <div class="d-flex flex-column flex-lg-row gap-4">
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">
                      <a href="home-fiction-category.php" class="animate-underline animate-target d-inline">Fiction</a>
                      </div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-categories-electronics.html">Categories Page</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-electronics.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-general-electronics.html">Product General Info</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-details-electronics.html">Product Details</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-reviews-electronics.html">Product Reviews</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Fashion Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-fashion.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-fashion.html">Product Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Furniture Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-furniture.html">Catalog with Top Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-furniture.html">Product Page</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Grocery Store</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-catalog-grocery.html">Catalog with Side Filters</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="shop-product-grocery.html">Product Page</a>
                        </li>
                      </ul>
                      <div class="h6 pt-4 mb-2">Checkout v.1</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-cart.html">Shopping Cart</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-1.html">Delivery Info (Step 1)</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-delivery-2.html">Delivery Info (Step 2)</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-shipping.html">Shipping Address</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-payment.html">Payment</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v1-thankyou.html">Thank You Page</a>
                        </li>
                      </ul>
                    </div>
                    <div style="min-width: 190px">
                      <div class="h6 mb-2">Checkout v.2</div>
                      <ul class="nav flex-column gap-2 mt-0">
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-cart.html">Shopping Cart</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-delivery.html">Delivery Info</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-pickup.html">Pickup from Store</a>
                        </li>
                        <li class="d-flex w-100 pt-1">
                          <a class="nav-link animate-underline animate-target d-inline fw-normal text-truncate p-0" href="checkout-v2-thankyou.html">Thank You Page</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Account</a>
                <ul class="dropdown-menu" style="--cz-dropdown-spacer: .875rem">
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
              <li class="nav-item dropdown py-lg-2 me-lg-n1 me-xl-0">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" data-bs-auto-close="outside" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu" style="--cz-dropdown-spacer: .875rem">
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
            </ul>
          </div>
        </nav>

        <!-- Button group -->
        <div class="d-flex gap-3 gap-sm-4">

          <!-- Theme switcher (light/dark/auto) -->
          <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-secondary fs-lg rounded-circle animate-scale" data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="ci-sun"></i>
              </span>
            </button>
            <ul class="dropdown-menu start-50 translate-middle-x" style="--cz-dropdown-min-width: 9rem; --cz-dropdown-spacer: .5rem">
              <li>
                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-sun"></i>
                  </span>
                  <span class="theme-label">Light</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-moon"></i>
                  </span>
                  <span class="theme-label">Dark</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="ci-auto"></i>
                  </span>
                  <span class="theme-label">Auto</span>
                  <i class="item-active-indicator ci-check ms-auto"></i>
                </button>
              </li>
            </ul>
          </div>

          <!-- Buy button  -->
           <?php
              if(isset($_SESSION['signin']) && $_SESSION['signin']==true){
                echo '<a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex"        href="account-signin.php">
                        <i class="ci-user animate-target"></i>
                        <span class="visually-hidden">Account</span>
                      </a>
                      <a class="btn btn-primary animate-slide-end" href="account-logout.php" rel="noreferrer">
                     Logout
                      </a>';
                      }

              else if(isset($_SESSION['signup']) && $_SESSION['signup']==true){
                  echo '<a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex"        href="account-signin.php">
                        <i class="ci-user animate-target"></i>
                        <span class="visually-hidden">Account</span>
                      </a>
                      <a class="btn btn-primary animate-slide-end" href="account-logout.php" rel="noreferrer">
                     Logout
                      </a>';
              }

              else{  
                echo ' <a class="btn btn-primary animate-slide-end" href="account-signin.php" rel="noreferrer">
                      Sign in
                        </a>          
                      <a class="btn btn-primary animate-slide-end" href="account-signup.php" rel="noreferrer">
                          Sign up
                        </a>';
              }
          ?>
        </div>
      </div>
    </header>


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Hero (Demos) -->
      <section class="pt-1 pt-sm-1 mt-1 mt-sm-0">

        


        
      </section>


      <!-- new releases -->
      <!-- <div class="container mt-5">
        <h2 class="container-title">New Releases</h2>
        <div class="scroll-button-container">
            <button class="scroll-button left btn btn-primary mr-3" onclick="scrollLeft()">‹</button>
            <div class="scroll-container">
              <?php
                include '../admin/include/connection.php';
                $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
              ?>
                <div class="card book-card" style="width: 19rem;">
                    <img src="../admin/uploads/<?php echo $row["category_id"];?>/<?php echo $row["stat_file"]; ?>" class="card-img-top book-img" alt="Book 1" style="width: 100%; height: 300px;">
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
    </div> -->


    
    <div class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5 mt-3">
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 gy-5" id="productGrid">
            <?php
                // include '../admin/include/connection.php';
                $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE type='front'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
              ?>   
    <div class="animate-underline mb-sm-2">
              <a class="ratio ratio-1x1 d-block mb-3" href="shop-product-furniture.html">
                <img src="../admin/uploads/books/<?php echo $row["isbn"];?>/<?php echo $row["stat_file"]; ?>" class="" alt="Product">
              </a>
              <h3 class="mb-2">
                <a class="d-block fs-sm fw-medium text-truncate mb-1" href="shop-product-furniture.html">
                  <span class="animate-target"><?php echo $row['name'] ?></span>
                </a>
                <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-furniture.html">
                  <span class="animate-target"><?php echo $row['author'] ?></span>
                </a>
              </h3>
              <div class="h6"><?php echo $row['amount'] ?></div>
              <div class="d-flex gap-2">
                <button type="button" class="btn btn-dark w-100 rounded-pill px-3">Add to cart</button>
                <button type="button" class="btn btn-icon btn-secondary rounded-circle animate-pulse" aria-label="Add to wishlist">
                  <i class="ci-heart fs-base animate-target"></i>
                </button>
              </div>
            </div>
          <?php
                }
              ?>       
          </div>        
    </div> 
      




















      <!-- Features -->
      <!-- <section class="container py-5 mt-2 mb-sm-2 mt-sm-3 my-md-4 my-lg-5">
        <h2 class="h1 text-center pb-3 pb-sm-4 pb-lg-2 pb-xl-3 pt-xl-4 mt-xxl-2 mb-lg-5">Cartzilla Feature Highlights</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 g-lg-5 pb-xl-2 pb-xxl-4">
          <div class="col text-center">
            <img src="assets/img/intro/features/bootstrap.png" width="56" class="d-inline-flex mb-3" alt="Bootstrap">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Built with Latest Bootstrap</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Cartzilla is the powerful e-commerce front-end solution based on Bootstrap 5 - the world's most popular responsive, mobile-first front-end component library.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/sass.png" width="48" class="d-inline-flex mb-3" alt="Sass">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Easy to Customize with Sass</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Cartzilla is built using Sass, allowing for effortless customization of colors, typography, and beyond. It is the most mature, stable, and powerful CSS extension language in the world.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/npm.png" width="56" class="d-inline-flex mb-3" alt="Npm">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Kick-start Your Development</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Start your development process fast and easy with included Npm scripts setup, full tasks automation and local server hot reload. The configuration files are included in the download package.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/js.png" width="48" class="d-inline-flex mb-3" alt="JavaScript">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Future-proof JavaScript</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Cartzilla's core scripts, along with all dependencies, are meticulously crafted in vanilla JS (ES6 modules), ensuring optimal performance and compatibility across various platforms.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/html5.png" width="48" class="d-inline-flex mb-3" alt="HTML5">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">W3C Valid HTML Code</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">As you likely know, ensuring 100% valid code through W3C validation for all HTML files is crucial. Invalid HTML imposes restrictions on innovation, yet Cartzilla remains innovative at its core.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/figma.png" width="48" class="d-inline-flex mb-3" alt="Figma">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Premium Figma File Included</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">A well-crafted Figma design file is included in the download package. It offers a visually stunning and thoroughly organized layout, utilizing Figma's components and styles.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/touch.png" width="48" class="d-inline-flex mb-3" alt="Touch UI">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Touch-enabled Sliders</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">In the era of touch screens it is important to ensure great user experience on handheld devices, especially when it comes to such frequently used interface component as slider.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/google-fonts.png" width="48" class="d-inline-flex mb-3" alt="Google Fonts">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Google Fonts</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Cartzilla uses preloaded variable Google font (Inter) which is free, fast to load and of very high quality. Currently Google fonts library includes 1600+ font families to choose from.</p>
          </div>
          <div class="col text-center">
            <img src="assets/img/intro/features/vector.png" width="48" class="d-inline-flex mb-3" alt="Vector Icons">
            <h3 class="h5 pt-sm-1 pb-2 mb-1">Vector Based HD-ready Icons</h3>
            <p class="mb-2 mb-sm-3 mb-lg-0">Cartzilla is equiped with font-based icon pack and svg icons to ensure that infographics and interface icons look sharp on any device with any screen resolution and pixel density.</p>
          </div>
        </div>
      </section> -->      
    </main>





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
    <script src="assets/vendor/img-comparison-slider/index.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="assets/js/theme.min.js"></script>
    <script src="assets/js/script.js"></script>
  

</body>
</html>