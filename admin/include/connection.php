<?php
     define('BASE_URL', 'http://localhost/Internship-book/BookHeaven/admin/');

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"db_book_heaven");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>