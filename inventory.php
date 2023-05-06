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
    <link rel="stylesheet" href="css/inventory_style.css">

    <title>Document</title>
</head>

<body>
    <!--Navigation bar-->
    <div class="topnav">
        <div class="logo">
            <a href="home.php"><img src="assets/logo.png" alt="HINT Logo" class="logo"></a>
        </div>
        <div class="topleft">
            <a class="" href="home.php">Home</a>
            <a class="" href="">Sales Report</a>
            <a class="active" href="inventory.php">Inventory</a>
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

    <script src="js/modal_menu.js"></script> 

    <!--//Table-->
    <div class = "Inventory">
        <div class="table">
            <table>
                <tr class ="rowhead">
                    <th> </th>
                    <th> Item </th>
                    <th> Cost </th>
                    <th> Quantity </th>
                    <th> Options </th>
                </tr>
                    <tr>
                        <td><img class="tableimage" src="assets/Itemfill.jpg" alt="Placeholder"></td>
                        <td> Item 1 </td>
                        <td class="Costcol"> 00.0 </td>
                        <td> 20 </td>
                        <td>
                        <button id="myBtn">
                            <img class="addremove" src="assets/add_item.png" alt="add logo">
                        </button>
                        <button id="myBtn">
                        <img class="addremove" src="assets/remove_item.png" alt="remove logo">
                        </button>
                    </td>
                    </tr>
    </div>
</div>

<script src="js/inventory_modal.js"></script>

</body>



</html>