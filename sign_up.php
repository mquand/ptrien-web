<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/sign_up.css">
    <link rel="icon" type="image/x-icon" href="css/assets/images/favicon.ico">

</head>

<body>
    <script src="js/app.js"></script>
    <header>
        <div class="inner-header container">

            <nav class="header_navbar">
                <a href="index.php" id="logo">GANGGANG</a>
                <p id="text-header">Tạo tài khoản</p>
            </nav>
        </div>
    </header>
    <div class="banner1">

    </div>
    <div class="container-signup">
        <div>
            <form class="form-signUp" action="login_signup.php" method="post">
                <h2 id="text-signup" style="margin-bottom: 20px;">TẠO TÀI KHOẢN MỚI</h2>
                <div>
                    <a href=""></a>
                </div>
                <div class="input-group">
                    <p id="text-signup">Email</p>
                    <input class="signup" type="text" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <p id="text-signup">Phone number</p>
                    <input class="signup" type="text" id="phonenumb" name="phonenumb" required>
                </div>
                <div class="input-group">
                    <p id="text-signup">username</p>
                    <input class="signup" type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <p id="text-signup"> password</p>
                    <input class="signup" type="password" id="password" name="password" required><br>
                </div>
                <div>
                    <input type="checkbox" onclick="myFunction()" id="checkBox"><span id="text-signup">Show
                        Password</span> <br><br>
                </div>
                <div class="input-group">
                    <input type="submit" value="Đăng ký " id="btn-sign_up" name="signup">
                </div>
            </form>
        </div>
    </div>
</body>

</html>