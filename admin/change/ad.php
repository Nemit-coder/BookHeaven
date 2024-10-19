
<?php 
include '../include/connection.php';
session_start();

if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
$abcc = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['gqolgjygneywjvjw'])))))));
$result = mysqli_query($conn,"SELECT * FROM tbl_student_fees WHERE id=$abcc");
$row= mysqli_fetch_array($result);




$admissiony= base64_encode(base64_encode(base64_encode('admission')));

if (isset($_POST['update_student_fees'])) {
  $enrollment_no = mysqli_real_escape_string($conn, $_POST['enrollment_no']);
  $student_name = $_POST['student_name'];
  $email = $_POST['email'];
  $course_name = $_POST['course_name'];
  $course_fee = $_POST['course_fee'];
  $amount = $_POST['amount'];
  $pending_fee = $_POST['pending_fee']; // Calculate pending fee
  $date = $_POST['date'];
  $fees_category = $_POST['fees_category'];
  $payment_mode = $_POST['payment_mode'];
  $remarks = $_POST['remarks'];

  // Use prepared statement with parameterized query for update
  $sql = "UPDATE tbl_student_fees SET 
          student_name=?, 
          email=?, 
          course_name=?, 
          course_fee=?, 
          amount=?, 
          pending_fee=?, 
          date=?, 
          fees_category=?, 
          payment_mode=?, 
          remarks=? 
          WHERE enrollment_no=?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssiisssssi", $student_name, $email, $course_name, $course_fee, $amount, $pending_fee, $date, $fees_category, $payment_mode, $remarks, $enrollment_no);
  if ($stmt->execute()) {
      echo "<script> alert('Fees updated successfully'); </script>";
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
        <script>
function calculatePendingFee() {
    var courseFee = document.getElementById('course_fee').value;
    var amountPaid = document.getElementById('amount').value;
    var pendingFee = courseFee - amountPaid;

    // Set the calculated pending fee to the pending_fee input
    document.getElementById('pending_fee').value = pendingFee;
}
</script>
        <?php include '../top.php'?>
        <div class="content mt-3">
          
          <div class="card mb-3">
            <div class="card-body" style="background-color:#95A5A6;">
            <form action="" method="post">
              <div class="row flex-between-center">
                <div class="col-md col-sm-12">
                  <h5 class="mb-2 mb-md-0"><?php echo $row['student_name'];?> | Change Fees Details</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-dark" name="update_student_fees" role="button" value="Update Fees">
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-12 pe-lg-2">
              <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Basic information</h6>
                </div>
                <div class="card-body pt-0">
                 
                  <div class="row gx-2">
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Student name:</label>
                        <input class="form-control" id="product-name" name="student_name" type="text" value="<?php echo $row['student_name'];?>" readonly/></div>
                     
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment No:</label>
                        <input class="form-control" name="enrollment_no" id="product-name" type="text" value="<?php echo $row['enrollment_no'];?>" readonly/>
                      </div>
                      <div class="col-md-6 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Course Name:</label>
                        <input class="form-control" name="course_name" id="product-name" type="email" value="<?php echo $row['course_name'];?>" readonly/>
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-md-3 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Email Address:</label>
                        <input class="form-control" name="email" id="product-name" type="email" value="<?php echo $row['email'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Previous Pending</label>
                        <input class="form-control" id="course_fee" name="course_fee" type="number" value="<?php echo $row['course_fee'];?>" oninput="calculatePendingFee()" readonly/>

                        <!-- <input class="form-control" id="product-name" name="course_fee" type="number" value="<?php echo $row['course_fee'];?>" /> -->
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Amount:</label>
                        <input class="form-control" id="amount" name="amount" type="number" value="<?php echo $row['amount'];?>"  oninput="calculatePendingFee()" />
                      </div>
                      <div class="col-md-3 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Latest Pending:</label>

                        <input class="form-control" id="pending_fee" name="pending_amount" type="number"  />
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Date:</label>
                        <input class="form-control datetimepicker" id="start-date" type="text" name="date" placeholder="dd/mm/yy" value="<?php echo $row['date'];?>" />
                      </div>
                      
                  </div>

                  <div class="row gx-2">
                  <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Fees Category:</label>
                        <input class="form-control" id="product-name" name="fees_category" type="text" value="<?php echo $row['fees_category'];?>" readonly />
                      </div>
                  <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="import-status">Payment Mode: </label>
                        <input class="form-control" id="product-name" type="text" name="payment_mode" value="<?php echo $row['payment_mode'];?>" readonly/>
                    </div>
                   
                    <div class="col-md-8 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Remarks</label>
                        <input class="form-control" id="product-name" type="text" name="remarks" value="<?php echo $row['remarks'];?>" />
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
