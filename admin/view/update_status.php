<?php include '../include/connection.php';
$category= base64_encode(base64_encode(base64_encode('category')));
$doc= base64_encode(base64_encode(base64_encode('image')));

if(isset($_GET['productid'])){
       $targetId = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['productid'])))));

$result = mysqli_query($conn, "SELECT * FROM tbl_category WHERE  id=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 1){
              $status = 0;
              mysqli_query($conn, "UPDATE tbl_category SET status='$status'
                            WHERE id=$targetId");
              echo "<script>alert('RECORD Deactivated')</script>";
              echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$category','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_category SET status='$status'
                            WHERE id=$targetId");
              echo "<script>alert('Record Activated')</script>";
              echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$category','_self')</script>";
     }

}

else if(isset($_GET['paid'])){

       $targetId = base64_decode($_GET['paid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>confirm('Course is Disabled')</script>";
                     echo "<script>window.open('student_fees.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>confirm('Course is enabled')</script>";
                     echo "<script>window.open('student_fees.php','_self')</script>";
            }


}
else if(isset($_GET['courseid'])){

       $targetId = base64_decode($_GET['courseid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_course_master WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 0;
                     mysqli_query($conn, "UPDATE tbl_course_master SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is Disabled')</script>";
                     echo "<script>window.open('psit_course_management.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_course_master SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('psit_course_management.php','_self')</script>";
            }


}


else if(isset($_GET['rem_completeid'])){

       $targetId = $_GET['rem_completeid'];
       $result = mysqli_query($conn, "SELECT * FROM tbl_student_fees_reminder WHERE id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_student_fees_reminder SET status='$status' WHERE id=$targetId");
                     echo "<script>alert('Reminder Deleted')</script>";
                 echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$reminder','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_student_fees_reminder SET status='$status' WHERE id=$targetId");
                     echo "<script>alert('Reminder i')</script>";
                     echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$reminder','_self')</script>";
            }


}


else if(isset($_GET['dropid'])){

       $targetId = base64_decode($_GET['dropid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 0;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Student is Droped')</script>";
                     echo "<script>window.open('student_details.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('student_details.php','_self')</script>";
            }


}
else if(isset($_GET['completeid'])){

       $targetId = base64_decode($_GET['completeid']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Student course is completed')</script>";
                     echo "<script>window.open('complete_students.php','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Course is enabled')</script>";
                     echo "<script>window.open('complete_students.php','_self')</script>";
            }


}

else if(isset($_GET['staff_disable_id'])){

       $targetId = base64_decode($_GET['staff_disable_id']);
       $result = mysqli_query($conn, "SELECT * FROM tbl_staff WHERE  id=$targetId");
       $row = mysqli_fetch_array($result);
       $status = $row['status'];
              if($status == 1){
                     $status = 2;
                     mysqli_query($conn, "UPDATE tbl_staff SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Staff is disabled')</script>";
                     echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$staff','_self')</script>";
              }
              else{
                     $status = 1;
                     mysqli_query($conn, "UPDATE tbl_staff SET status='$status'
                                   WHERE id=$targetId");
                     echo "<script>alert('Staff is Active')</script>";
                     echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$staff','_self')</script>";
            }


}
else if(isset($_GET['complete_batch'])){
       $targetId = $_GET['complete_batch'];

$result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE enrollment_no=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 1){
              $status = 22;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('RECORD Deactivated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Record Activated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
     }

}
else if(isset($_GET['finance_drop_batch'])){
       $targetId = $_GET['finance_drop_batch'];

$result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE enrollment_no=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 1){
              $status = 11;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Student Status Changed')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Record Activated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
     }

}
else if(isset($_GET['running_batch'])){
       $targetId = $_GET['running_batch'];

$result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE enrollment_no=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 22){
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Student is now Reactivated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Record Activated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$staff','_self')</script>";
     }

}
else if(isset($_GET['drop_student'])){
       $targetId = $_GET['drop_student'];

$result = mysqli_query($conn, "SELECT * FROM tbl_admission WHERE enrollment_no=$targetId");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 1){
              $status = 11;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Student is now Reactivated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
       }
       else{
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admission SET status='$status'
                            WHERE enrollment_no=$targetId");
              echo "<script>alert('Record Activated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";
     }

}

else if(isset($_GET['admin_login'])){
       $targetId = base64_decode($_GET['admin_login']);

$result = mysqli_query($conn, "SELECT * FROM tbl_admin_login WHERE id='$targetId'");
$row = mysqli_fetch_array($result);
$status = $row['status'];
       if($status == 0){
              $status = 1;
              mysqli_query($conn, "UPDATE tbl_admin_login SET status='$status' WHERE id=$targetId");
              echo "<script>alert('Student is now Reactivated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admin_login','_self')</script>";
       }
       else{
              $status = 0;
              mysqli_query($conn, "UPDATE tbl_admin_login SET status='$status' WHERE id=$targetId");
              echo "<script>alert('Record Activated')</script>";
               echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admin_login','_self')</script>";
     }

}
?>