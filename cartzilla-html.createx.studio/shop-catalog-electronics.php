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
  </head>


  <!-- Body -->
  <body>
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
          <a class="flex-shrink-0" href="shop-product-general-electronics.html">
            <img src="assets/img/shop/electronics/thumbs/08.png" width="110" alt="iPhone 14">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Apple iPhone 14 128GB White</a>
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
          <a class="position-relative flex-shrink-0" href="shop-product-general-electronics.html">
            <span class="badge text-bg-danger position-absolute top-0 start-0">-10%</span>
            <img src="assets/img/shop/electronics/thumbs/09.png" width="110" alt="iPad Pro">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Tablet Apple iPad Pro M2</a>
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
          <a class="flex-shrink-0" href="shop-product-general-electronics.html">
            <img src="assets/img/shop/electronics/thumbs/01.png" width="110" alt="Smart Watch">
          </a>
          <div class="w-100 min-w-0 ps-2 ps-sm-3">
            <h5 class="d-flex animate-underline mb-2">
              <a class="d-block fs-sm fw-medium text-truncate animate-target" href="shop-product-general-electronics.html">Smart Watch Series 7, White</a>
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


    <!-- Navigation bar (Page header) -->
    <header class="navbar navbar-expand-lg navbar-dark bg-dark d-block z-fixed p-0" data-sticky-navbar="{&quot;offset&quot;: 500}">
      <div class="container d-block py-1 py-lg-3" data-bs-theme="dark">
        <div class="navbar-stuck-hide pt-1"></div>
        <div class="row flex-nowrap align-items-center g-0">
          <div class="col col-lg-3 d-flex align-items-center">

            <!-- Mobile offcanvas menu toggler (Hamburger) -->
            <button type="button" class="navbar-toggler me-4 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar brand (Logo) -->
            <a href="home-electronics.html" class="navbar-brand me-0">
              <span class="d-none d-sm-flex flex-shrink-0 text-primary me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36"><path d="M36 18.01c0 8.097-5.355 14.949-12.705 17.2a18.12 18.12 0 0 1-5.315.79C9.622 36 2.608 30.313.573 22.611.257 21.407.059 20.162 0 18.879v-1.758c.02-.395.059-.79.099-1.185.099-.908.277-1.817.514-2.686C2.687 5.628 9.682 0 18 0c5.572 0 10.551 2.528 13.871 6.517 1.502 1.797 2.648 3.91 3.359 6.201.494 1.659.771 3.436.771 5.292z" fill="currentColor"></path><g fill="#fff"><path d="M17.466 21.624c-.514 0-.988-.316-1.146-.829-.198-.632.138-1.303.771-1.501l7.666-2.469-1.205-8.254-13.317 4.621a1.19 1.19 0 0 1-1.521-.75 1.19 1.19 0 0 1 .751-1.521l13.89-4.818c.553-.197 1.166-.138 1.64.158a1.82 1.82 0 0 1 .85 1.284l1.344 9.183c.138.987-.494 1.994-1.482 2.33l-7.864 2.528-.375.04zm7.31.138c-.178-.632-.85-1.007-1.482-.81l-5.177 1.58c-2.331.79-3.28.02-3.418-.099l-6.56-8.412a4.25 4.25 0 0 0-4.406-1.758l-3.122.987c-.237.889-.415 1.777-.514 2.686l4.228-1.363a1.84 1.84 0 0 1 1.857.81l6.659 8.551c.751.948 2.015 1.323 3.359 1.323.909 0 1.857-.178 2.687-.474l5.078-1.54c.632-.178 1.008-.829.81-1.481z"></path><use href="#czlogo"></use><use href="#czlogo" x="8.516" y="-2.172"></use></g><defs><path id="czlogo" d="M18.689 28.654a1.94 1.94 0 0 1-1.936 1.935 1.94 1.94 0 0 1-1.936-1.935 1.94 1.94 0 0 1 1.936-1.935 1.94 1.94 0 0 1 1.936 1.935z"></path></defs></svg>
              </span>
              Cartzilla
            </a>
          </div>
          <div class="col col-lg-9 d-flex align-items-center justify-content-end">

            <!-- Search visible on screens > 991px wide (lg breakpoint) -->
            <div class="position-relative flex-fill d-none d-lg-block pe-4 pe-xl-5">
              <i class="ci-search position-absolute top-50 translate-middle-y d-flex fs-lg text-white ms-3"></i>
              <input type="search" class="form-control form-control-lg form-icon-start border-white rounded-pill" placeholder="Search the products">
            </div>

            <!-- Sale link visible on screens > 1200px wide (xl breakpoint) -->
            <a class="d-none d-xl-flex align-items-center text-decoration-none animate-shake navbar-stuck-hide me-3 me-xl-4 me-xxl-5" href="shop-catalog-electronics.html">
              <div class="btn btn-icon btn-lg fs-lg text-primary bg-body-secondary bg-opacity-75 pe-none rounded-circle">
                <i class="ci-percent animate-target"></i>
              </div>
              <div class="ps-2 text-nowrap">
                <div class="fs-xs text-body">Only this month</div>
                <div class="fw-medium text-white">Super Sale 20%</div>
              </div>
            </a>

            <!-- Button group -->
            <div class="d-flex align-items-center">

              <!-- Navbar stuck nav toggler -->
              <button type="button" class="navbar-toggler d-none navbar-stuck-show me-3" data-bs-toggle="collapse" data-bs-target="#stuckNav" aria-controls="stuckNav" aria-expanded="false" aria-label="Toggle navigation in navbar stuck state">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Theme switcher (light/dark/auto) -->
              <div class="dropdown">
                <button type="button" class="theme-switcher btn btn-icon btn-lg btn-outline-secondary fs-lg border-0 rounded-circle animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
                  <span class="theme-icon-active d-flex animate-target">
                    <i class="ci-sun"></i>
                  </span>
                </button>
                <ul class="dropdown-menu" style="--cz-dropdown-min-width: 9rem">
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

              <!-- Search toggle button visible on screens < 992px wide (lg breakpoint) -->
              <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake d-lg-none" data-bs-toggle="collapse" data-bs-target="#searchBar" aria-expanded="false" aria-controls="searchBar" aria-label="Toggle search bar">
                <i class="ci-search animate-target"></i>
              </button>

              <!-- Account button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-shake d-none d-md-inline-flex" href="account-signin.html">
                <i class="ci-user animate-target"></i>
                <span class="visually-hidden">Account</span>
              </a>

              <!-- Wishlist button visible on screens > 768px wide (md breakpoint) -->
              <a class="btn btn-icon btn-lg fs-lg btn-outline-secondary border-0 rounded-circle animate-pulse d-none d-md-inline-flex" href="account-wishlist.html">
                <i class="ci-heart animate-target"></i>
                <span class="visually-hidden">Wishlist</span>
              </a>

              <!-- Cart button -->
              <button type="button" class="btn btn-icon btn-lg btn-secondary position-relative rounded-circle ms-2" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart" aria-controls="shoppingCart" aria-label="Shopping cart">
                <span class="position-absolute top-0 start-100 mt-n1 ms-n3 badge text-bg-success border border-3 border-dark rounded-pill" style="--cz-badge-padding-y: .25em; --cz-badge-padding-x: .42em">3</span>
                <span class="position-absolute top-0 start-0 d-flex align-items-center justify-content-center w-100 h-100 rounded-circle animate-slide-end fs-lg">
                  <i class="ci-shopping-cart animate-target ms-n1"></i>
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
            <h5 class="offcanvas-title" id="navbarNavLabel">Browse Cartzilla</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body py-3 py-lg-0">
            <div class="container px-0 px-lg-3">
              <div class="row">

                

                <!-- Navbar nav -->
                <div class="col-lg-9 d-lg-flex pt-3 pt-lg-0 ps-lg-0">
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
                      <a class="nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Shop</a>
                      <div class="dropdown-menu rounded-4 p-4">
                        <div class="d-flex flex-column flex-lg-row gap-4">
                          <div style="min-width: 190px">
                            <div class="h6 mb-2">Electronics Store</div>
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
                  <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown me-lg-n2 me-xl-n1">
                      <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Eng</a>
                      <ul class="dropdown-menu fs-sm" style="--cz-dropdown-min-width: 7.5rem; --cz-dropdown-spacer: .25rem">
                        <li><a class="dropdown-item" href="#!">Français</a></li>
                        <li><a class="dropdown-item" href="#!">Deutsch</a></li>
                        <li><a class="dropdown-item" href="#!">Italiano</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown me-lg-n1">
                      <a class="nav-link dropdown-toggle fs-sm px-3" href="#!" role="button" data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">USD ($)</a>
                      <ul class="dropdown-menu dropdown-menu-end fs-sm" style="--cz-dropdown-min-width: 7rem; --cz-dropdown-spacer: .25rem">
                        <li><a class="dropdown-item" href="#!">€ EUR</a></li>
                        <li><a class="dropdown-item" href="#!">£ UKP</a></li>
                        <li><a class="dropdown-item" href="#!">¥ JPY</a></li>
                      </ul>
                    </li>
                  </ul>
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


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- Breadcrumb -->
      <nav class="container pt-3 my-3 my-md-4" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-electronics.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Catalog with sidebar filters</li>
        </ol>
      </nav>


      <!-- Page title -->
      <h1 class="h3 container mb-4">Shop catalog</h1>


      <!-- Banners that are turned into collaspse on screens < 768px wide (sm breakpoint) -->
      <section class="accordion container pb-4 pb-md-5 mb-xl-3">
        <div class="accordion-item border-0">
          <div class="accordion-header d-md-none" id="offersHeading">
            <button type="button" class="accordion-button w-auto fw-medium collapsed border border-dashed border-danger border-opacity-50 rounded py-2 px-3" data-bs-toggle="collapse" data-bs-target="#offers" aria-expanded="false" aria-controls="offers">
              <span class="d-inline-flex ci-percent fs-lg text-danger rounded-circle me-2"></span>
              <span class="me-2">See latest offers</span>
            </button>
          </div>
          <div class="accordion-collapse collapse d-md-block" id="offers" aria-labelledby="offersHeading">
            <div class="row g-3 g-lg-4 pt-3 pt-md-0">
              <div class="col-md-7">
                <div class="position-relative d-flex flex-column flex-sm-row align-items-center h-100 rounded-5 overflow-hidden px-5 px-sm-0 pe-sm-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #accbee 0%, #e7f0fd 100%)"></span>
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #1b273a 0%, #1f2632 100%)"></span>
                  <div class="position-relative z-1 text-center text-sm-start pt-4 pt-sm-0 ps-xl-4 mt-2 mt-sm-0 order-sm-2">
                    <h2 class="h3 mb-2">iPhone 14</h2>
                    <p class="fs-sm text-light-emphasis mb-sm-4">Apple iPhone 14 128GB Blue</p>
                    <a class="btn btn-primary" href="shop-product-general-electronics.html">
                      From $899
                      <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                    </a>
                  </div>
                  <div class="position-relative z-1 w-100 align-self-end order-sm-1" style="max-width: 416px">
                    <div class="ratio rtl-flip" style="--cz-aspect-ratio: calc(320 / 416 * 100%)">
                      <img src="assets/img/shop/electronics/banners/iphone-1.png" alt="iPhone 14">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="position-relative d-flex flex-column align-items-center justify-content-between h-100 rounded-5 overflow-hidden pt-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(90deg, #fdcbf1 0%, #fdcbf1 1%, #ffecfa 100%)"></span>
                  <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(90deg, #362131 0%, #322730 100%)"></span>
                  <div class="position-relative z-1 text-center pt-3 mx-4">
                    <i class="ci-apple text-body-emphasis fs-3 mb-3"></i>
                    <p class="fs-sm text-light-emphasis mb-1">Deal of the week</p>
                    <h2 class="h3 mb-4">iPad Pro M1</h2>
                  </div>
                  <a class="position-relative z-1 d-block w-100" href="shop-product-general-electronics.html">
                    <div class="ratio" style="--cz-aspect-ratio: calc(159 / 525 * 100%)">
                      <img src="assets/img/shop/electronics/banners/ipad.png" width="525" alt="iPad">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      


      <!-- Products grid -->
      <section class="container pb-5 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5">
        <div class="row">

          <!-- Product grid -->
          <div class="col-lg-12">
            <div class="row row-cols-2 row-cols-md-4 g-3 pb-3 mb-3">

              <!-- Item -->
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
                    <?php
                        include '../admin/include/connection.php';
                        $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE type='front'";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                    ?>   
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                        <span class="animate-target"><?php echo $row['name'] ?></span>
                      </a>
                    </h3>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                        <span class="animate-target"><?php echo $row['author'] ?></span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0"><?php echo $row['amount'] ?></div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>

            <!-- Banner -->
            <div class="position-relative rounded-5 overflow-hidden mb-4">
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none-dark rtl-flip" style="background: linear-gradient(-90deg, #accbee 0%, #e7f0fd 100%)"></span>
              <span class="position-absolute top-0 start-0 w-100 h-100 d-none d-block-dark rtl-flip" style="background: linear-gradient(-90deg, #1b273a 0%, #1f2632 100%)"></span>
              <div class="row align-items-center position-relative z-1">
                <div class="col-md-6 pt-5 pt-md-0 mb-2 mb-md-0">
                  <div class="text-center text-md-start py-md-5 px-4 ps-md-5 pe-md-0 me-md-n5">
                    <h3 class="text-uppercase fw-bold ps-xxl-3 pb-2 mb-1">Seasonal weekly sale 2024</h3>
                    <p class="text-body-emphasis ps-xxl-3 mb-0">Use code <span class="d-inline-block fw-semibold text-dark bg-white rounded-pill py-1 px-2">Sale 2024</span> to get best offer</p>
                  </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center justify-content-md-end">
                  <div class="me-3 me-lg-4 me-xxl-5">
                    <img src="assets/img/shop/electronics/banners/iphone-2.png" class="d-block rtl-flip" width="335" alt="Camera">
                  </div>
                </div>
              </div>
            </div>

            <div class="row row-cols-2 row-cols-md-3 g-4">

              <!-- Item -->
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Controls:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Adjustable triggers</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Connectivity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Audio:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">3.5mm, built-in speaker</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">325 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Display:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">11" LED</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Capacity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Chip:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Apple M1</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Camera:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">12 MP Wide</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">470 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/09.png" alt="Wireless Buds">
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
                      <span class="text-body-tertiary fs-xs">(142)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                        <span class="animate-target">Xiaomi Wireless Buds Pro</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$156.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Audio:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Connectivity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Material:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Plastic</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">98 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Display:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">6.1" XDR</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Capacity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">128 GB</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Chip:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">A15 Bionic</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Camera:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">12 + 12 MP</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">172 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="col">
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Audio:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Noise Cancellation</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Connectivity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Bluetooth, 3.5mm jack</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Material:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Leather, Plastic</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">185 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Banner -->
              <div class="col" data-bs-theme="dark">
                <div class="d-flex flex-column align-items-center justify-content-end h-100 text-center overflow-hidden rounded-5 px-4 px-lg-3 pt-4 pb-4" style="background: #1d2c41 url(assets/img/shop/electronics/banners/background.jpg) center/cover no-repeat">
                  <div class="ratio animate-up-down position-relative z-2 me-lg-4" style="max-width: 320px; margin-bottom: -22%; --cz-aspect-ratio: calc(256 / 260 * 100%)">
                    <img src="assets/img/shop/electronics/banners/laptop.png" alt="Laptop">
                  </div>
                  <h3 class="display-5 mb-2">MacBook</h3>
                  <p class="text-body fs-sm fw-medium mb-3">Be Pro Anywhere</p>
                  <a class="btn btn-sm btn-primary mb-2" href="#!">
                    From $1,199
                    <i class="ci-arrow-up-right fs-base ms-1 me-n1"></i>
                  </a>
                </div>
              </div>

              <!-- Item -->
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
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
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Resolution:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">45.7 MP</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Sensor:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">35.9mm x 23.9mm</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Storage:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">SD card</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Movie:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">4K UHD</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">216 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
                      <div class="ratio" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                        <img src="assets/img/shop/electronics/12.png" alt="Power Bank">
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
                      <span class="text-body-tertiary fs-xs">(125)</span>
                    </div>
                    <h3 class="pb-1 mb-2">
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                        <span class="animate-target">Power Bank PBS 10000 mAh Black</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$45.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Capacity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">10000 mAh</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Indcators:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">LED light</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Color:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Black</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Movie:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">4K UHD</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Item -->
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
                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="shop-product-general-electronics.html">
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
                      <a class="d-block fs-sm fw-medium text-truncate" href="shop-product-general-electronics.html">
                        <span class="animate-target">Smart Watch Series 7, White</span>
                      </a>
                    </h3>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="h5 lh-1 mb-0">$429.00</div>
                      <button type="button" class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2" aria-label="Add to Cart">
                        <i class="ci-shopping-cart fs-base animate-target"></i>
                      </button>
                    </div>
                  </div>
                  <div class="product-card-details position-absolute top-100 start-0 w-100 bg-body rounded-bottom shadow mt-n2 p-3 pt-1">
                    <span class="position-absolute top-0 start-0 w-100 bg-body mt-n2 py-2"></span>
                    <ul class="list-unstyled d-flex flex-column gap-2 m-0">
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Display:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">45mm OLED</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Chip:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">64-bit Dual-core</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Connectivity:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Wi-Fi, Bluetooth</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Power:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">Lithium-ion battery</span>
                      </li>
                      <li class="d-flex align-items-center">
                        <span class="fs-xs">Weight:</span>
                        <span class="d-block flex-grow-1 border-bottom border-dashed px-1 mt-2 mx-2"></span>
                        <span class="text-dark-emphasis fs-xs fw-medium text-end">37.0 grams</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="border-top mt-4 pt-3" aria-label="Catalog pagination">
              <ul class="pagination pagination-lg pt-2 pt-md-3">
                <li class="page-item disabled me-auto">
                  <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Previous page">
                    <i class="ci-chevron-left mx-1"></i>
                  </a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item">
                  <span class="page-link pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">16</a>
                </li>
                <li class="page-item ms-auto">
                  <a class="page-link d-flex align-items-center h-100 fs-lg px-2" href="#!" aria-label="Next page">
                    <i class="ci-chevron-right mx-1"></i>
                  </a>
                </li>
              </ul>
            </nav>
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
  

</body>
<!-- Mirrored from cartzilla-html.createx.studio/shop-catalog-electronics.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Oct 2024 09:28:26 GMT -->
</html>