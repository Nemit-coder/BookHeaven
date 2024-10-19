<?php
    include 'include/connection.php';

    // $targetId = $_GET['productid'];
    $targetId = base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($_GET['productid'])))));
    $result = mysqli_query($conn, "SELECT * FROM tbl_product WHERE id=$targetId");
    while($row = mysqli_fetch_array($result)){
        $img = $row['stat_file'];
        $file = $row['category'];
    }
    $doc= base64_encode(base64_encode(base64_encode('image')));
    unlink("uploads/".$file."/".$img);

    mysqli_query($conn, "DELETE FROM tbl_product WHERE id=$targetId");

    echo "<script>alert('Photo Deleted Successfully')</script>";
    echo "<script>window.open('view/view.php?VxjMWVHUlhiSGxsVVQwOQ=$doc','_self')</script>";
?>
