<?php
include 'db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from login_db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $usernamefromdb = $row['username'];
        $passwordfromdb = $row['password'];

        if ($usernamefromdb == $username) {
            if ($passwordfromdb == $password) {
                session_start();
                $_SESSION["login_db"] = $usernamefromdb;
                header('Location: dashboard.php');
            } else {
                header('Location: index.php');
            }
        } else {
            header('Location: index.php');
        }
    }
} else {
    echo "No result";
}

$conn->close();
