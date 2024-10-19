<?php include '../include/connection.php';
session_start();
$faname = $_SESSION["first_name"];
$laname = $_SESSION["last_name"];

$category= base64_encode(base64_encode(base64_encode('category')));
$book= base64_encode(base64_encode(base64_encode('book')));


 if(isset($_POST['insert_category']))
{	 
	 
	 $name = mysqli_real_escape_string($conn,$_POST['name']);
		
	 $sql = "INSERT INTO tbl_category (category_name) VALUES (?)";
	 $stmt = $conn->prepare($sql);
	 $stmt->bind_param("s", $name);
	if ($stmt->execute()) {
	echo "<script> alert('course submitted successfully'); </script>";
		echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$category','_self')</script>";
    } else {
		echo "Error: " . $stmt->error;
	}
	$stmt->close();
	$conn->close();
}


else if(isset($_POST['insert_book'])) {
		// Taking Inputs
		$isbn = $_POST['isbn'];
		$bookname = $_POST['bookname'];
		$category = $_POST['category'];
		$publisher = $_POST['publisher'];
		$author = $_POST['author'];
		$description = $_POST['description'];
		$language = $_POST['language'];
		$amount = $_POST['amount'];
		$spamount = $_POST['spamount'];

		$sql = "INSERT INTO tbl_book (`isbn`, `name`,`category`, `publisher`, `author`, `description`, `language`, `amount`, `sp_amount`) VALUES ('$isbn','$bookname','$category','$publisher','$author','$description','$language','$amount','$spamount')";
		$result = mysqli_query($conn,$sql);

		if($result){
			echo "<script>alert('Book Inserted Successfully')</script>";
			echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$book','_self')</script>";
		}
		else{
			echo "<script>alert('Error Inserting Book')</script>";
			echo "<script>window.open('doc.php','_self')</script>";
		}
}

	else if (isset($_POST['insert_student_notice'])) {

		$category = $_POST['category'];
		$stat_file = $_FILES['stat_file'];
		$file_name = $stat_file['name'];
		$file_size = $stat_file['size'];
		$file_tmp = $stat_file['tmp_name'];
		$file_ext= explode('.', $file_name);
		$file_check= strtolower(end($file_ext));
		$extension = array('pdf');
	
		if (empty($file_name) == true) {
			$stat_file_err=  "Please select PDF file.";
		}elseif (!(in_array($file_check, $extension))) {
		  $stat_file_err= "Please select file in pdf format.";
		}elseif ($file_size >= 10485760) {
			$stat_file_err= 'Please Select PDF file size of 10 MB or Lower.';
		}else{
		  move_uploaded_file($file_tmp, '../documents/notice/'.$file_name);
		}
	
		if (empty($stat_file_err)) {
			$sql = "INSERT INTO tbl_notice(category,stat_file) VALUES ('$category','$file_name')";
	
		 if (mysqli_query($conn, $sql)) {
			echo "<script> alert('data submitted successfully'); </script>";
			echo "<script>window.open('../template/table.php?VxjMWVHUlhiSGxsVVQwOQ=".$notice."','_self')</script>";
		} else {
			echo "Error: " . $sql . "
	" . mysqli_error($conn);
		 }
		 mysqli_close($conn);
	
   
	 }
   }

   else if(isset($_POST['insert_bsc_fees_student'])) {
    $studentName = $_POST['student_name'];
    $enrollmentNo = $_POST['enrollment_no'];
    $bm_er = $_POST['bm_er'];
    $amount = $_POST['amount'];
    $sem = $_POST['sem'];
    $date = $_POST['date'];
    $mode = $_POST['mode'];
	$cat = $_POST['cat'];
    $remaks = $_POST['remaks'];

    $sql = "INSERT INTO tbl_bsc (enrollment_no, bm_er,student_name, amount, sem,mode,cat, date, remaks) 
                    VALUES ('$enrollmentNo', '$bm_er', '$studentName','$amount', '$sem','$mode','$cat', '$date', '$remaks')";

if (mysqli_query($conn, $sql)) {

	$action = "Inserted ". $student_name . "B.sc Fees ".$amount."in Database successfully";
$ac_cat = "Insert";
$sql1c = "INSERT INTO tbl_activity (faname, laname,ac_cat, action) VALUES (?, ?, ?, ?)";
$stmt1 = $conn->prepare($sql1c);
$stmt1->bind_param("ssss", $faname, $laname,$ac_cat,$action);
if ($stmt1->execute()) {
	echo "<script> alert('B.Sc Fees submitted successfully'); </script>";
	echo "<script>window.open('../view/bsd.php?vgyjurwyshaiswlfe=" . base64_encode(base64_encode(base64_encode($enrollmentNo))) . "','_self')</script>";

 } else {
	echo "Error: " . $stmt1->error;
}
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);
}
else if (isset($_POST['insert_placement'])) {
	$studentName = $_POST['student_name'];
    $enrollmentNo = $_POST['enrollment_no'];
    $companyName = $_POST['company_name'];
    $date = $_POST['date'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $remarks = $_POST['remarks'];

    // File upload handling
    $targetDir = "../documents/place/"; // Folder to store uploaded files
    $docFileName = basename($_FILES["doc_file"]["name"]);
    $targetFilePath = $targetDir . $docFileName;
    move_uploaded_file($_FILES["doc_file"]["tmp_name"], $targetFilePath);

    $sql = "INSERT INTO tbl_placement (student_name, enrollment_no, company_name, date, salary,designation, remarks, doc_file) 
            VALUES ('$studentName', '$enrollmentNo', '$companyName', '$date', '$salary','$designation', '$remarks', '$docFileName')";

    if ($conn->query($sql) === TRUE) {
		echo "<script> alert('Placement Added successfully'); </script>";
        echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=".$placement."','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	mysqli_close($conn);

}

   else {

   }
?>


<!-- if (mysqli_query($conn, $sql)) {
		 $sql1 = "INSERT INTO student_login (username,password) VALUES ('$enrollment_no','$password')";	
		 if (mysqli_query($conn, $sql1)) {		
			 echo "<script> alert('Admission submitted successfully'); </script>";
			 $action = "Inserted ". $student_name . "Admisssion in Database successfully";
		 $ac_cat = "Insert";
		 $sql1c = "INSERT INTO tbl_activity (faname, laname,ac_cat, action) VALUES (?, ?, ?, ?)";
		 $stmt1 = $conn->prepare($sql1c);
		 $stmt1->bind_param("ssss", $faname, $laname,$ac_cat,$action);
		 if ($stmt1->execute()) {
			 echo "<script> alert('Admission submitted successfully'); </script>";
			 echo "<script>window.open('../view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$admissiony','_self')</script>";        } else {
			 echo "Error: " . $stmt1->error;
		 }
	 }  else {
		 echo "Error: " . $sql . "
 " . mysqli_error($conn);
	  } 
	} -->