<?php include 'include/connection.php';?>
<?php
      session_start();
      if(!isset($_SESSION["username"])){
        header("Location:login.php");
      }
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
      <title>Book Heaven | Dashboard &amp; Web App Template</title>
      <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL?>assets/img/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL?>assets/img/favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL?>assets/img/favicons/favicon-16x16.png">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL?>assets/img/favicons/favicon.ico">
      <link rel="manifest" href="<?php echo BASE_URL?>assets/img/favicons/manifest.json">
      <meta name="msapplication-TileImage" content="<?php echo BASE_URL?>assets/img/favicons/mstile-150x150.png">
      <meta name="theme-color" content="#ffffff">
      <script src="<?php echo BASE_URL?>assets/js/config.js"></script>
      <script src="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.js"></script>
      <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
      <style>
         *{
         font-family: "Exo", sans-serif;
         font-style: normal;
         }
         
      </style>
      <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
      <link rel="preconnect" href="https://fonts.gstatic.com/">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
      <link href="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
      <link href="<?php echo BASE_URL?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
      <link href="<?php echo BASE_URL?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
      <link href="<?php echo BASE_URL?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
      <link href="<?php echo BASE_URL?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
      <script>
         var isRTL = JSON.parse(localStorage.getItem('isRTL'));
         if (isRTL) {
           var linkDefault = document.getElementById('style-default');
           var userLinkDefault = document.getElementById('user-style-default');
           linkDefault.setAttribute('disabled', true);
           userLinkDefault.setAttribute('disabled', true);
           document.querySelector('html').setAttribute('dir', 'rtl');
         } else {
           var linkRTL = document.getElementById('style-rtl');
           var userLinkRTL = document.getElementById('user-style-rtl');
           linkRTL.setAttribute('disabled', true);
           userLinkRTL.setAttribute('disabled', true);
         }
      </script>
   </head>
   <body>
   <div id="loader" style="display: block; position: fixed; z-index: 9999; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255, 255, 255, 0.8); text-align: center;">
      <img src="path_to_your_loader_image" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
   </div>
   <script>
      document.addEventListener("DOMContentLoaded", function() {
         setTimeout(function() {
            document.getElementById('loader').style.display = 'none';
         }, 100); // 3 seconds
      });
   </script>
   <!-- Your existing content -->
      <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
      <main class="main" id="top">
         <div class="container-fluid" data-layout="container-fluid">
         <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
              var container = document.querySelector('[data-layout]');
              container.classList.remove('container');
              container.classList.add('container-fluid');
            }
         </script>
         <?php include 'top.php';?>
         <br>
         <div class="content">
            <div class="row g-3 mb-3">
               <div class="col-xxl-6 col-xl-12">
                  <div class="row g-3">
                     <div class="col-12">
                        <div class="card bg-transparent-50 overflow-hidden">
                           <div class="card-header position-relative">
                              <div class="bg-holder d-none d-md-block bg-card z-1" style="background-image:url(../assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;"></div>
                              <!--/.bg-holder-->
                              <div class="position-relative z-2">
                                 <div>
                                    <h3 class="text-primary mb-1">
                                    <?php
$a = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
$time = $a->format('H');

?></h3>
                                    <p>Here’s what happening with your business Today  </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          
            <?php include 'bottom.php'?>
         </div>
         </div>
         
      </main>
      <!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->
      <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
      <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
      <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
      <script src="<?php echo BASE_URL?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
      <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
      <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
   </body>
</html>