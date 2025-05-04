<?php

require('db/connect.php');
session_start();
// sign up
if (isset($_POST['signup'])) {

    // lấy thông tin input từ form signup
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phonenumb = $_POST['phonenumb'];

    // xử lý đăng ký
    $sql = "INSERT INTO user (user_name, phone_number, email, user_password) VALUES ('$username', '$phonenumb', '$email', md5('$password'))";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "error";
    }
}

// login
if (isset($_POST['login'])) {

    // lấy thông tìn input từ form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // xử lý đăng nhập
    $sql = "SELECT * FROM user WHERE user_name = '$username' AND user_password = '$password'";
    $row = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($row);
    if($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['login_userName'] = $row_data['user_name'];
        $_SESSION['login_id'] = $row_data['id'];
        header("Location: index.php");
        // header("Refresh: 0");

    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Sai Mật Khẩu");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}


$conn->close();
