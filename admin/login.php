<?php 
include 'include/connection.php';

//temporary login
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $s_key = $_POST['s_key'];

  $sql="SELECT * from tbl_admin_login where username = '{$username}' AND password = '{$password}' AND s_key = '{$s_key}' and status=1";
  $result=mysqli_query($conn,$sql);


  if (mysqli_num_rows($result) > 0) {
    while($row=mysqli_fetch_assoc($result)){
      session_start();
      $_SESSION['username'] = $username;
      header("location: index.php");
    }
  }
  else{
    echo '<div class="alert alert-danger">Email and password not matched</div>';
  }
}

// session_start();
// if(!isset($_SESSION['username'])){
//   header("location:lgin.php");
// }
// // Check if the maximum login attempts have been exceeded
// if(isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= 3){
//     header("Location:login.php"); // Redirect to login1.php after 3 failed attempts
//     exit;
// }

// if(isset($_POST['login'])){
//     // Check if the login attempts session variable is set
//     if(!isset($_SESSION['login_attempts'])){
   
//         $_SESSION['login_attempts'] = 0; // Initialize the login attempts counter
//     }

//     // Check if the last login attempt time is set
//     if(!isset($_SESSION['last_login_attempt_time'])){
//         $_SESSION['last_login_attempt_time'] = time(); // Initialize the last login attempt time
//     }

//     // Check if the login attempts exceed the limit and the time elapsed since the last attempt
//     if($_SESSION['login_attempts'] < 3 || (time() - $_SESSION['last_login_attempt_time']) > 18){ // 1800 seconds = 30 minutes
//         $username = mysqli_real_escape_string($conn,$_POST['username']);
//         $password = sha1(mysqli_real_escape_string($conn,$_POST['password']));
//         $s_key = sha1(mysqli_real_escape_string($conn,$_POST['s_key']));

//         $sql = "SELECT * from tbl_admin_login where username = '{$username}' AND password = '{$password}' AND s_key = '{$s_key}' and status=1";
//         $result = mysqli_query($conn,$sql) or die("Query Failed");

//         if(mysqli_num_rows($result)>0){
//             while($row = mysqli_fetch_assoc($result)){
//                 // Reset the login attempts counter on successful login
//                 $_SESSION['login_attempts'] = 0;

//                 // Reset the last login attempt time
//                 $_SESSION['last_login_attempt_time'] = time();

//                 // Store login track in a new table
//                 date_default_timezone_set("Asia/Kolkata");
//                 $login_time = date('Y-m-d H:i:s');
//                 $user_id = $row['username']; // Assuming there's a column named 'id' in tbl_admin_login
//                 $insert_track_sql = "INSERT INTO login_tracks (user_id, login_time) VALUES ('$user_id', '$login_time')";
//                 mysqli_query($conn, $insert_track_sql);

                

//                 // Set session variables
//                 $_SESSION["id"] = $row['id'];
//                 $_SESSION["emp_c"] = $row['emp_c'];
//                 $_SESSION["username"] = $row['username'];
//                 $_SESSION["role"] = $row['role'];
//                 $_SESSION["first_name"] = $row['first_name'];
//                 $_SESSION["last_name"] = $row['last_name'];

//                 // Redirect to index.php
//                 header("Location:index.php");
//             }
//         }
//         else {
//             // Increment the login attempts counter
//             date_default_timezone_set("Asia/Kolkata");
//                 $login_time = date('Y-m-d H:i:s');
//                 $user_id = $_POST['username']; // Assuming there's a column named 'id' in tbl_admin_login
//                 $insert_track_sql = "INSERT INTO login_tracks (user_id, login_time) VALUES ('$user_id', '$login_time')";
//                 mysqli_query($conn, $insert_track_sql);
//             $_SESSION['login_attempts']++;
//             if($_SESSION['login_attempts'] >= 3){
//                 // Set the last login attempt time to the current time
//                 $_SESSION['last_login_attempt_time'] = time();
//                 header("Location:login1.php"); // Redirect to login1.php after 3 failed attempts
//                 exit;
//             } else {
//                 echo "<script> alert('Invalid username or password. Attempt ".$_SESSION['login_attempts']." of 3'); </script>";
//             }
//             echo "<script>window.open('login.php','_self')</script>";
//         }
//     } else {
//         echo "<script> alert('Maximum login attempts exceeded. Please try again later.'); </script>";
//     }
// }
// else {
//     // Handle the case when the login form is not submitted
// }
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Admin Login | RK</title>

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
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL?>vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="<?php echo BASE_URL?>assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo BASE_URL?>assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

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
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
          <div class="col-lg-8 col-xxl-5 py-3 position-relative">
            <img class="bg-auth-circle-shape" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250">
            <img class="bg-auth-circle-shape-2" src="<?php echo BASE_URL?>assets/img/icons/spot-illustrations/shape-1.png" alt="" width="150">
            <div class="card overflow-hidden z-1">
              <div class="card-body p-0">
                <div class="row g-0 h-100">
                  <div class="col-md-5 text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url(<?php echo BASE_URL?>assets/img/icons/spot-illustrations/half-circle.png);"></div><!--/.bg-holder-->
                      <div class="z-1 position-relative">
                        <!-- <img class="me-2 mb-3" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" /> -->
                        <p class="opacity-75 text-white mt-4">With the power of Rk, you can now focus only on functionaries for your digital products, while leaving the UI design on us!</p>
                      </div>
                    </div>
                    
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <h3>Admin Login</h3>
                        </div>
                      </div>
                      <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post"  enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="card-email">Username</label>
                          <input class="form-control" id="card-email" type="text" name="username" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Password</label>
                          </div>
                          <input class="form-control" id="card-password" type="password" name="password" required/>
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="card-password">Skey</label>
                          </div>
                          <input class="form-control" id="card-password" type="password" name="s_key" required/>
                        </div>
                        
                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="login">Log in</button></div>
                      </form>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>

  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "danger",
});
</script> -->

</html>