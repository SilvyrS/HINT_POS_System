<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <title>HINT POS | HOME</title>
</head>

<body>
    <div class="topnav">
        <div class="logo">
            <a href="home.php"><img src="assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="active" href="#home">Home</a>
            <a href="#news">Sales Report</a>
            <a href="#contact">Inventory</a>
        </div>

        <div class="topright">
            <a href="#admin">Admin</a>
            <button class="menu-btn"><i class="fa fa-ellipsis-v"></i></button>
        </div>


    </div>

    <div class="section">
        <div class="receipt">
            <div class="selected-product">
                <p>Product:</p>
            </div>
            <div class="quantity">
                <p>Quantity:</p>
                <input type="number">
            </div>
            <hr>
            <div class=""></div>
        </div>
        <hr>
        <div class="product">
            <div class="toprow">
                <p>Select a Product</p>
                <button class="search"><i class="fa fa-search"></i></button>
            </div>
            <hr>
            <div class="product-card">

            </div>
        </div>
    </div>

</body>

</html>