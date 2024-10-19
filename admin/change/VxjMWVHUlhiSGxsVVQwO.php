
<?php 
include '../include/connection.php';
session_start();


$abc = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['ojkriwkfngqolgjygneywjvjw'])))));
$result = mysqli_query($conn,"SELECT * FROM tbl_admission WHERE enrollment_no=$abc");
$row= mysqli_fetch_array($result);


$admissiony = base64_encode(base64_encode(base64_encode('admission')));

if(isset($_POST['update_admission'])) {    
    $enrollment_no = mysqli_real_escape_string($conn, $_POST['enrollment_no']);
    $student_name = mysqli_real_escape_string($conn, $_POST['student_name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $alt_phone_no = mysqli_real_escape_string($conn, $_POST['alt_phone_no']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $area = mysqli_real_escape_string($conn, $_POST['area']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $course_name = mysqli_real_escape_string($conn, $_POST['course_name']);
    $c_category = mysqli_real_escape_string($conn, $_POST['c_category']);
    $counsellor = mysqli_real_escape_string($conn, $_POST['counsellor']);
    $course_fee = mysqli_real_escape_string($conn, $_POST['course_fee']);
    $admission_source = mysqli_real_escape_string($conn, $_POST['admission_source']);
    $payment_mode = mysqli_real_escape_string($conn, $_POST['payment_mode']);
    $center = mysqli_real_escape_string($conn, $_POST['center']);
    $remark = mysqli_real_escape_string($conn, $_POST['remark']);
    $password = password_hash($enrollment_no, PASSWORD_DEFAULT);

    $updateQuery = "UPDATE tbl_admission SET 
    student_name=?, date=?, email=?, phone_no=?, alt_phone_no=?, gender=?, dob=?, qualification=?, 
    address=?, area=?, city=?, pincode=?, course_name=?, c_category=?, counsellor=?, course_fee=?, 
    admission_source=?, payment_mode=?, remark=?, center=? WHERE enrollment_no=?";
$updateStmt = mysqli_prepare($conn, $updateQuery);
mysqli_stmt_bind_param($updateStmt, 'sssssssssssssssssssi', $student_name, $date, $email, $phone_no, $alt_phone_no, $gender, $dob, $qualification, $address, $area, $city, $pincode, $course_name, $c_category, $counsellor, $course_fee, $admission_source, $payment_mode, $remark, $center, $enrollment_no);
$result = mysqli_stmt_execute($updateStmt);
    if ($result) {
        echo "<script> alert('Admission updated successfully'); </script>";
        echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
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
    <title>Falcon | Dashboard &amp; Web App Template</title>

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
                  <h5 class="mb-2 mb-md-0">Chnage in Admission</h5>
                </div>
                <div class="col-auto">
                  <input  type="reset" class="btn btn-link text-secondary p-0 me-3 fw-medium"  value="Discard">
                  <input type="submit" class="btn btn-primary" name="update_admission" role="button" value="Update Admission">
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
                      <div class="col-md-8 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Student Admission name:</label>
                        <input class="form-control" id="product-name" name="student_name" type="text" value="<?php echo $row['student_name'];?>"/></div>
                  
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment No:</label>
                        <input class="form-control" name="enrollment_no" id="product-name" type="text" value="<?php echo $row['enrollment_no'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Enrollment Date:</label>
                        <input class="form-control datetimepicker" id="start-date" type="text" name="date" value="<?php echo $row['date'];?>" readonly />
                      </div>
                  </div>

                  <div class="row gx-2">
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Email Address:</label>
                        <input class="form-control" name="email" id="product-name" type="email" value="<?php echo $row['email'];?>" readonly/>
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Contact No:</label>
                        <input class="form-control" id="product-name" name="phone_no" type="number" value="<?php echo $row['phone_no'];?>" readonly/>
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Alt Contact No:</label>
                        <input class="form-control" id="product-name" name="alt_phone_no" type="number" value="<?php echo $row['alt_phone_no'];?>" readonly/>
                      </div>
                  </div>

                  <div class="row gx-2">
                  <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="import-status">Gender: </label>
                       <input class="form-control" name="gender" id="product-name" type="text" value="<?php echo $row['gender'];?>" readonly/>
                       
                      </select>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="manufacturar-name">Date of Birth</label>
                        <input class="form-control datetimepicker" name="dob" id="start-date" type="text" placeholder="dd/mm/yy" value="<?php echo $row['dob'];?>" readonly />
                      </div>
                      <div class="col-md-4 col-sm-12 mb-2">
                        <label class="form-label" for="import-status">Qualification: </label>
                        <input type="text" id="qualification" name="qualification" class="form-control" placeholder="" value="<?php echo $row['qualification'];?>" readonly/>
                    </div>
                  </div>


                  <div class="row gx-2">
                      <div class="col-md-6 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Address:</label>
                        <input class="form-control" id="product-name" type="text" name="address" value="<?php echo $row['address'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="import-status">Area: </label>
                        <input type="text" id="area" name="area" class="form-control" placeholder="" value="<?php echo $row['area'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">City: </label>
                          <input class="form-control" id="product-name" type="text" name="city" value="<?php echo $row['city'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                        <label class="form-label" for="import-status">Pincode: </label>
                        <input type="text" id="area" name="pincode" class="form-control" placeholder="" value="<?php echo $row['pincode'];?>" readonly/>
                      </div>

                  </div>


                  <div class="row gx-2">
                      
                      <div class="col-md-8 mb-2">
                        <label class="form-label" for="import-status">Select Course: </label>
                        <input class="form-control" id="import-status" name="course_name" value="<?php echo $row['course_name'];?>" readonly/>
                       
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">Course Category: </label>
                         <input type="text" id="c_category" class="form-control" name="c_category" placeholder="" value="<?php echo $row['c_category'];?>" readonly/>
                      </div>
                      <div class="col-md-2 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">Counsellor: </label>
                          <input type="text" id="counsellor" class="form-control" name="counsellor" placeholder="" value="<?php echo $row['counsellor'];?>" readonly/>
                      </div>
                  </div>

                  <div class="row gx-2">
                      
                  <div class="col-md-3 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Course Fee:</label>
                        <input class="form-control" name="course_fee" id="product-name" name="course_fee" type="number" value="<?php echo $row['course_fee'];?>" />
                      </div>
                      <div class="col-md-3 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">Payment Mode: </label>
                        <input type="text" id="payment_mode" class="form-control" placeholder="" name="payment_mode" value="<?php echo $row['payment_mode'];?>" readonly/>
                      </div>
                       <div class="col-md-3 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">Admission Source: </label>
                      <input type="text" id="admission_source" class="form-control" placeholder="" name="admission_source" value="<?php echo $row['admission_source'];?>" readonly/>
                      </div>
                       <div class="col-md-3 col-sm-12 mb-2">
                          <label class="form-label" for="import-status">Center: </label>
                          <input type="text" id="center" class="form-control" placeholder="" name="center" value="<?php echo $row['center'];?>" readonly/>
                      </div>
                      
                    </div>
                    <div class="row gx-2">
                      <div class="col-md-12 col-sm-12 mb-2">
                        <label class="form-label" for="product-name">Remarks:</label>
                        <input class="form-control" name="remark" id="product-name" type="text" value="<?php echo $row['remark'];?>" readonly />
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
