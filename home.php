<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/modal_menu_content.css">
    <link rel="stylesheet" href="css/navBar.css">

    <title>HINT POS | HOME</title>
</head>

<body>
    <!--Navigation bar-->
    <div class="topnav">
        <div class="logo">
            <a href="home.php"><img src="assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="active" href="#home">Home</a>
            <a href="">Sales Report</a>
            <a href="inventory.php">Inventory</a>
        </div>

        <div class="topright">
            <a class="admin" href="">Admin</a>
            <button id="myBtn" class="menu-btn"><i class="fa fa-ellipsis-v"></i></button>
        </div>
    </div>

    <!--Modal Codes-->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <a href="logout.php">Logout</a>
                <hr>
                <a href="signin.php">Sign In</a>
            </div>
        </div>

    </div>

    <!--Reciept section-->
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
            <div class="blank">
                <hr>
                <div class="total">
                    <p>Total:</p>
                </div>
            </div>
            <div class="payment-section">
                <div class="payment-method">

                </div>
            </div>
        </div>


        <!--Products Section-->
        <div class="product">
            <div class="toprow">
                <p>Select a Product</p>
                <button class="search"><i class="fa fa-search"></i></button>
            </div>
            <hr>
            <div class="product-cards">
                <div class="row">
                    <div class="column">
                        <button class="modal-open" data-modal="modal1">
                            <img src="assets/steelpipe.jpg" alt="steelpipe" class="product-img">
                            <div class="product-name">
                                <p>Steelpipe</p>
                                <p>6" 17kg</p>
                            </div>

                            <p>Price</p>
                        </button>
                    </div>
                    <div class="column">
                        <button class="modal-open" data-modal="modal1">
                            <img src="assets/steelpipe.jpg" alt="steelpipe" class="product-img">
                            <div class="product-name">
                                <p>Steelpipe</p>
                                <p>6" 17kg</p>
                            </div>

                            <p>Price</p>
                        </button>
                    </div>

                </div>

                <div class="row">
                    <div class="column">
                        <button class="modal-open" data-modal="modal1">
                            <img src="assets/steelpipe.jpg" alt="steelpipe" class="product-img">
                            <div class="product-name">
                                <p>Steelpipe</p>
                                <p>6" 17kg</p>
                            </div>

                            <p>Price</p>
                        </button>
                    </div>
                    <div class="column">
                        <button class="modal-open" data-modal="modal1">
                            <img src="assets/steelpipe.jpg" alt="steelpipe" class="product-img">
                            <div class="product-name">
                                <p>Steelpipe</p>
                                <p>6" 17kg</p>
                            </div>

                            <p>Price</p>
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="js/modal_menu.js"></script>
</body>

</html>