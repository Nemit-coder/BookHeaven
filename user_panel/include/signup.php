<?php
require_once 'init.php';

if(isset($_POST['signup'])){
    $user_code = strtoupper(bin2hex(random_bytes(4)));
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $mobile_no = mysqli_real_escape_string($conn, $_POST['mobile_no']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $exist = "SELECT * FROM tbl_user_signup WHERE mobile_no=? OR email=?";
    $stmt = mysqli_prepare($conn, $exist);
    mysqli_stmt_bind_param($stmt, "ss", $mobile_no, $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result)>0){
        $_SESSION['error'] = "User already exists";
        header("Location: ../index.php");
        exit();
    } else {
        $sql = "INSERT INTO tbl_user_signup (user_code,username,mobile_no,email,password) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $user_code, $username, $mobile_no, $email, $password);
        $result2 = mysqli_stmt_execute($stmt);

        if($result2){
            $_SESSION['username'] = $username;
            $_SESSION['user_logged_in'] = true;
            $_SESSION['success'] = "Signup Successful";
            $_SESSION['show_offcanvas'] = true;
            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['error'] = "Something went wrong";
            header("Location: ../index.php");
            exit();
        }
    }    
}

// Sign In Handler
if(isset($_POST['signin'])){
  $emailorpass = $_POST['emailorpass'];
  $password = $_POST['password'];

    $sql = "SELECT * from tbl_user_signup where email='{$emailorpass}' OR mobile_no= '{$emailorpass}' AND password='{$password}'";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $emailorpass, $emailorpass);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_logged_in'] = true;
            $_SESSION['success'] = "Signin Successful";
            $_SESSION['show_offcanvas'] = true;
            header("Location: ../index.php");
            exit();
        }
    }
    $_SESSION['error'] = "Invalid credentials";
    header("Location: index.php");
    exit();
}

// Logout Handler
if(isset($_POST['logout'])){
    session_destroy();
    header("Location: index.php");
    exit();
}
?>