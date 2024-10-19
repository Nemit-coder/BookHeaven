<?php
   $r = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM tbl_role"));
   ?>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
   <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
   <a class="navbar-brand me-1 me-sm-3" href="<?php echo BASE_URL?>index.php">
      <div class="d-flex align-items-center">
         <h3>Book Heaven</h3>
         <!-- <img class="me-2" src="<?php echo BASE_URL?>assets/img/pureskill.png" alt="" width="140" /> -->
      </div>
   </a>
   <div class="collapse navbar-collapse scrollbar" id="navbarStandard" style="margin-left:100px">
      <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
         <?php if( $r['id'] == 1 || $r['id'] == 2 || $r['id'] == 3 || $r['id'] == 5){?>  
         <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('category')));?>" role="button"  aria-haspopup="true" aria-expanded="false">Category</a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('book')));?>" role="button"  aria-haspopup="true" aria-expanded="false">Product Image</a>
         </li>
         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Admission List</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
               <div class="bg-white dark__bg-1000 rounded-3 py-2">
                  <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('admission')));?>">Admission List</a>
                  <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('student_documents')));?>">Document</a>                  
                  <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('placement')));?>">Placement</a>
                  <?php if( $r['id'] == 1 ){?>
                     <a class="dropdown-item link-600 fw-medium" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('internship')));?>">Internship</a>
                     <?php }else {}?>
               
               </div>
            </div>
         </li> -->
         <?php }else {}?>
         
      </ul>
   </div>
   <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
      <li class="nav-item dropdown">
         <a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-xl">
               <img class="rounded-circle" src="">
            </div>
         </a>
         <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
            <div class="bg-white dark__bg-1000 rounded-2 py-2">
               <a class="dropdown-item fw-bold text-warning" href="#!"><?php echo $_SESSION['first_name'] .$_SESSION['last_name']?></span></a>
               <div class="dropdown-divider"></div>
               <?php if( $r['id'] == 1 ){?>  
               <a class="dropdown-item" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('all_users')));?>">All Users</a>
               <a class="dropdown-item" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('notification')));?>">Activity</a>
               <a class="dropdown-item" href="<?php echo BASE_URL?>view/view.php?VxjMWVHUlhiSGxsVVQwOQ=<?php echo base64_encode(base64_encode(base64_encode('report_yash')));?>">Target Report</a>
               <?php } else {}?>
               <a class="dropdown-item" href="<?php echo BASE_URL?>view/user_profile.php">Profile</a>
               <a class="dropdown-item" href="#!">Feedback</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="<?php echo BASE_URL?>pages/user/settings.html">Settings</a>
               <a class="dropdown-item" href="<?php echo BASE_URL?>logout.php">Logout</a>
            </div>
         </div>
      </li>
   </ul>
</nav>