
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
    <link rel="stylesheet" href="css/modal_inventory.css">

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

    <?php 

    include 'db/inv_connection.php';

    if(isset($_GET['item_id'])) {;
    $sql = "SELECT * FROM inventory_tb WHERE item_id=$item_id";
    $result = $conn -> query($sql);
    $row = $result->fetch_assoc();
    }
?>
    </div>
    <form method="post" action="">
        <input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
     Enter Quantity
    </br>
    <input type="number" name="item_Quantity" class="textfield" value="<?php echo $row['item_Quantity']; ?>">
    <br>
    <input type="submit" name="submit" value="Update" class="button">
    <br>
    </form>
    <?php 
        if(isset($_POST['submit'])) {
            $item_id = $_POST['item_id'];
            $item_Quantity = $_POST['item_Quantity'];

        if ($item_Quantity != '') {
            $sql = "UPDATE inventory_tb SET item_Quantity='$item_Quantity' WHERE item_id='$item_id'";
        if ($conn->query($sql) === TRUE) {
            echo "Quantity Updated";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        } else {
            echo "Please enter a new Quantity";
        }
    }
    ?>
    </body>
