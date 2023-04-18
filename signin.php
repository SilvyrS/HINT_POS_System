<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/signin_style.css">

    <title>HINT POS System | DASHBOARD</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="assets/logo.png" alt="HINT POS LOGO">
            </div>
            <h2 class="title-login">SIGN IN</h2>
            <form action="dashboard.php" method="post">
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="username">
                    <input type="text" name="username" id="userName" placeholder="Username">
                </div>
                <div class="id-number">
                    <input type="text" name="id-number" id="id-number" placeholder="ID Number">
                </div>
                <button name="submit" type="submit" class="login_btn">Login</button>
            </form>
            <div class="link">
                <a href="#">Forget password?</a> or <a href="#">Sign up</a>
            </div>
        </div>
    </div>
</body>

</html>