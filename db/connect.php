<?php

// connect to database//
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "webdev";


// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); // hướng thủ tục

// if($conn ){
//     mysqli_query($conn, "SET NAMES 'utf8'");
// }
// else{
//     echo "ket noi that bai". mysqli_connect_errno();
// }
//----------------------------------------------------------------
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname); //hướng đối tượng

// kiểm tra kết nối//
// if ($conn->connect_error) {
//     die("Kết nối không thành công: " . $conn->connect_error);
// }
// echo "kết nối thành công: ";
//----------------------------------------------------------------
