<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index_style.css">

    <title>HINT POS | LOGIN</title>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <div class="logo">
                <img src="assets/logo.png" alt="HINT POS LOGO">
            </div>
            <h2 class="title-login">LOGIN</h2>
            <form action="home.php" method="post">
                <div class="username">
                    <input type="text" name="username" id="userName" placeholder="Username">
                </div>
                <div class="password">
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                <button name="submit" type="submit" class="login_btn">Login</button>
            </form>
            <div class="link">
                <a href="#">Forget password?</a> or <a href="signin.php">Sign up</a>
            </div>
        </div>
    </div>

</body>

</html>