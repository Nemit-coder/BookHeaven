
<?php 
include '../include/connection.php';
session_start();

if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
$abcc = $_GET['ojkriwkfngqolgjygneywjvjw'];
$result = mysqli_query($conn,"SELECT * FROM tbl_student_fees_reminder WHERE id=$abcc");
$row= mysqli_fetch_array($result);




$admissiony= base64_encode(base64_encode(base64_encode('Fees_reminder')));
if (isset($_POST['update_fees_reminder'])) {
  $enrollment_no = mysqli_real_escape_string($conn, $_POST['enrollment_no']);
  $student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
  $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
  $course_fee = mysqli_real_escape_string($conn, $_POST['course_fee']);
  $rem_amount = mysqli_real_escape_string($conn, $_POST['rem_amount']);
  $rem_date = mysqli_real_escape_string($conn, $_POST['rem_date']);
  $rem_fees_category = mysqli_real_escape_string($conn, $_POST['rem_fees_category']);
  $remark = mysqli_real_escape_string($conn, $_POST['remark']);

  $sql = "UPDATE tbl_student_fees_reminder SET 
          student_name=?, 
          course_name=?, 
          course_fee=?, 
          rem_amount=?, 
          rem_date=?, 
          rem_fees_category=?, 
          remark=? 
          WHERE enrollment_no=?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssissss", $student_name, $course_name, $course_fee, $rem_amount, $rem_date, $rem_fees_category, $remark, $enrollment_no);
  if ($stmt->execute()) {
      echo "<script> alert('Reminder updated successfully'); </script>";
      echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=".$admissiony."','_self')</script>";
  } else {
      echo "Error: " . $stmt->error;
  }
  $stmt->close();
  $conn->close();
}

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT | Dashboard &amp; Web App Template</title>

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
        <?php include '../top.php'?>
        <div class="content mt-3">
          
          <div class="card mb-3">
            <div class="card-body">
            <form action="" method="post">
              <div class="row flex-between-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0"><?php echo $row['student_name'];?> | Add Reminder Details</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="update_fees_reminder" role="button" value="Add Reminder">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Reminder Information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-4 mb-2">
                        <label class="form-label" for="product-name">Student name:</label>
                        <input class="form-control" id="product-name" name="student_name" type="text" value="<?php echo $row['student_name'];?>" readonly/></div>
                     
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment No:</label>
                        <input class="form-control" name="enrollment_no" id="product-name" type="text" value="<?php echo $row['enrollment_no'];?>" readonly/>
                      </div>
                      <div class="col-4 mb-2">
                        <label class="form-label" for="manufacturar-name">Course Name:</label>
                        <input class="form-control" name="course_name" id="product-name" type="email" value="<?php echo $row['course_name'];?>" readonly/>
                      </div>
                       <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Course Fee:</label>
                        <input class="form-control" name="course_fee" id="product-name" type="email" value="<?php echo $row['course_fee'];?>" readonly/>
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-2 mb-2">
                        <label class="form-label" for="product-name">Reminder Amount:</label>
                        <input class="form-control" name="rem_amount" id="product-name" type="rem_amount" value="<?php echo $row['rem_amount'];?>"/>
                      </div>
                  
                     
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Reminder Date:</label>
                        <input class="form-control datetimepicker" id="start-date" type="date" name="rem_date" placeholder="dd/mm/yy" data-options='{"dateFormat":"Y-m-d","disableMobile":true}' />
                      </div>
                      <div class="col-2 mb-2">
                        <label class="form-label" for="manufacturar-name">Fees Category:</label>
                        <select class="form-select" id="import-status"name="rem_fees_category">
                        <option value="imported" selected disabled>Select Category</option>
                        <option value="Booking">Booking</option>
                      <option value="New">New</option>
                           <option value="Semester">Semester</option>
                            <option value="Installment">Installment</option>
                     
                       
                      </select>
                      </div>
                       <div class="col-6 mb-2">
                        <label class="form-label" for="manufacturar-name">Remarks</label>
                        <input class="form-control" id="product-name" type="text" name="remark" />
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
