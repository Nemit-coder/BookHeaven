<?php include '../include/connection.php';?>
<?php 
session_start();
if(!isset($_SESSION["username"])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<?php 
  $isbn = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['isbn'])))));
  $sql = "SELECT * FROM tbl_book INNER JOIN tbl_category ON tbl_book.category_id=tbl_category.category_id WHERE tbl_book.isbn='$isbn'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  
  $sql3 = "SELECT * FROM tbl_book INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE tbl_book.isbn='$isbn' AND type='front'";
  $result3 = mysqli_query($conn,$sql3);
  $row3 = mysqli_fetch_array($result3);
 
$cnt=1;
// while ($row=mysqli_fetch_array($ret)) {
 
?>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>PSIT Admin | Dashboard &amp; Web App Template</title>

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
        <?php include '../top.php'?>
        <br>
       
        <div class="content">
          <div class="card mb-3">
            <div class="card-body d-flex flex-wrap flex-between-center">
              <div>
                <h6 class="text-primary"><?php echo $row['isbn'] ?></h6>
                <h5 class="mb-0"><?php echo $row['name'] ?></h5>
              </div>
              <div>
           </div>
              <div>
             
              <a class="btn btn-primary btn-sm me-2" type="button" href="<?php echo BASE_URL?>insert/insert.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('add_book_image')));?>&isbn=<?php echo $isbn ?>">
                <span class="far fa-file-pdf me-md-1"> </span>
                <span class="d-none d-md-inline">Add Book Image</span>
                  </a>

             </div>
            </div>
          </div>
          <div class="row g-1 mb-3">
            <div class="col-lg-6 col-xl-12 col-xxl-12 col-sm-12 col-md-6">
              <div class="row g-3">
                <div class="col-xl-12 col-lg-6 col-md-6 col-xxl-12">
                  <div class="card font-sans-serif h-100">
                    <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                        <h6 class="mb-0">Book Information</h6>
                        <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-payment-methods" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-payment-methods"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                          </div>
                        </div>
                      </div>
                    <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                    <img src="../../admin/uploads/books/<?php echo $row3["isbn"];?>/<?php echo $row3["stat_file"]; ?>" height="250px">
                      <table class="table table-borderless fs-10 fw-medium mb-0 mx-5">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 15%;">ISBN Number :</td>
                            <td class="p-1" style="width: 25%;"><?php echo $row['isbn'] ?></td>
                          </tr>
                         
                          <tr>
                            <td class="p-1" style="width: 15%;">Name :</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row['name'] ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 15%;">Category :</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row['category_name'] ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Publisher :</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row['publisher'] ?></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Author :</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row['author'] ?></a></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Description :</td>
                            <td class="p-1"><a class="text-600 text-decoration-none"><?php echo $row['description'] ?></a></td>
                          </tr>
                          
                        </tbody>
                      </table>
                      <!-- <div class="dropdown btn-reveal-trigger position-absolute top-0 end-0 m-3"><button class="btn btn-link btn-reveal text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="studentInfoDropdown" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-11"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="studentInfoDropdown"><a class="dropdown-item" href="#!">View Profile</a><a class="dropdown-item" href="#!">Enrolled Courses</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Logout</a>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
              </div> 
              
            
          
              <div class="col-lg-12 col-xl-12 col-xxl-12 col-sm-12 col-md-12">
              <div class="card h-100">
                <div class="card-header bg-body-tertiary d-flex flex-between-center py-2">
                  <h6 class="mb-0">asdsd Details</h6>
                  <div class="dropdown font-sans-serif position-static d-inline-block btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-payment-methods" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-payment-methods"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Edit</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="row g-3 h-100">
                   
                    <div class="col-sm-6 col-lg-12">
                      <table class="table table-borderless fw-medium font-sans-serif fs-10 mb-2">
                        <tbody>
                          <tr>
                            <td class="p-1" style="width: 35%;">Language :</td>
                            <td class="p-1 text-600"><b><?php echo $row['language'] ?></b></td>
                          </tr>
                          <tr>
                            <td class="p-1" style="width: 35%;">Amount :</td>
                            <td class="p-1 text-600"><?php echo $row['amount'] ?></td>
                          </tr>
                            <td class="p-1" style="width: 35%;">Course Status:</td>
                            <td class="p-1 text-600">
                        <?php if($row['status'] == 1) { ?>
                            <span class="badge rounded-pill badge-subtle-success me-2"><span>
                            Active
                            </span>
                        <?php
                            }
                          else {?>
                              <span class="badge rounded-pill badge-subtle-danger me-2"><span>
                                Deactive
                              </span>
                        <?php  
                          }
                        ?>
                            </td>
                        </tr>
                  </div>
                        <!-- <div class="badge rounded-pill badge-subtle-warning fs-11">No Records
                          <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                        </div>
                      
                          <div class="badge rounded-pill badge-subtle-success fs-11">Completed
                              <span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span>
                            </div> -->
                    </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-body d-flex flex-row gap-5 mt-5 justify-content-center">             
             <?php
               $sql2 = "SELECT * FROM tbl_book INNER JOIN tbl_book_image ON tbl_book.isbn=tbl_book_image.isbn WHERE tbl_book.isbn='$isbn'";
               $result2 = mysqli_query($conn,$sql2);
                while($row2 = mysqli_fetch_array($result2)){
             ?>
               <img src="../../admin/uploads/books/<?php echo $row2["isbn"];?>/<?php echo $row2["stat_file"]; ?>" height="250px">
               <?php
                }
                ?>
                </div>
              </div>
            </div>        
          </div>
          <?php include '../template/bottom.php'?>
        </div>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->

    

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="<?php echo BASE_URL?>vendors/popper/popper.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/anchorjs/anchor.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/is/is.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/echarts/echarts.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=initMap" async></script>
    <script src="<?php echo BASE_URL?>vendors/dayjs/dayjs.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/fontawesome/all.min.js"></script>
    <script src="<?php echo BASE_URL?>vendors/lodash/lodash.min.js"></script>
    <script src="<?php echo BASE_URL?><?php echo BASE_URL?>../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="<?php echo BASE_URL?>vendors/list.js/list.min.js"></script>
    <script src="<?php echo BASE_URL?>assets/js/theme.js"></script>
  </body>

</html>