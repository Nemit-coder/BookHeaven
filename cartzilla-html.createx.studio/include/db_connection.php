<?php
 $username = "localhost";
 $directory = "root";
 $password = "";
 $database = "bookheaven";

 $connect_query = mysqli_connect($username,$directory,$password,$database);

 if(!$connect_query){
    echo "Error";
 }
?>