
<?php 
include '../include/connection.php';
session_start();
if(!isset($_SESSION["username"])){
  header("Location:https://pureskill.in/system/login.php");
}
$b = $_SESSION["id"];
$faname = $_SESSION["first_name"];
$laname = $_SESSION["last_name"];


?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT | Admin Panel</title>

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

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link href="<?php echo BASE_URL?>vendors/choices/choices.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/dropzone/dropzone.min.css" rel="stylesheet">
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
        <?php include '../top.php';?>
        <br>
        <div class="content">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Add User Details</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="update_user" role="button" value="Update User">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">User information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">User:</label>
                        <input class="form-control" id="product-name" name="username" type="text"></div>
                  
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Password:</label>
                        <input class="form-control" name="password" id="product-name" type="text" />
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Security Key:</label>
                        <input class="form-control" name="s_key" id="product-name" type="text" />
                      </div>
                  </div>
                
                  </form>
                </div>
              </div>
             
            </div>
            
          </div>
         
          
          <?php include '../template/bottom.php';?>
        </div>
        </div>
        
          </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/tinymce/tinymce.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/choices/choices.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/flatpickr.js"></script>
    <script src="<?php echo BASE_URL?>vendors/dropzone/dropzone.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?><?php echo BASE_URL?>polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>


</html>
<?php
if (isset($_POST['update_user'])) {
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = sha1($_POST['password']);
    $s_key = sha1($_POST['s_key']);

 // Insert query for tbl_admin_login table
$sqlInsert = "INSERT INTO tbl_admin_login (username, password, s_key) VALUES (?, ?, ?)";
$stmtInsert = $conn->prepare($sqlInsert);
$stmtInsert->bind_param("sss", $username, $password, $s_key);
if ($stmtInsert->execute()) {
    // Insert query for tbl_activity table
    $sqlInsertActivity = "INSERT INTO tbl_activity (faname, laname, ac_cat, action) VALUES (?, ?, ?, ?)";
    $stmtInsertActivity = $conn->prepare($sqlInsertActivity);
    $ac_cat = "Insert";
    $action = "Add User in Database successfully";
    $stmtInsertActivity->bind_param("ssss", $faname, $laname, $ac_cat, $action);
    if ($stmtInsertActivity->execute()) {
        echo "<script>alert('User details updated successfully');</script>";
        echo "<script>window.location.href='../logout.php';</script>";
    } else {
        echo "Error updating activity log: " . $stmtInsertActivity->error;
    }
    $stmtInsertActivity->close();
} else {
    echo "Error updating user credentials: " . $stmtInsert->error;
}
$stmtInsert->close();
$conn->close();
}
?>
