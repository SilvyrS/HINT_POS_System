<?php 

if (isset($_GET['id'])) {
    include "db/db_connect.php";

	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	};

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM inventory_tb WHERE id=$id";
    $result = $conn->query($sql);

}

?>