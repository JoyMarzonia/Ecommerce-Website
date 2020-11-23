<?php
    include "connect.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "DELETE FROM users WHERE id=$id";
 		// echo $sql1;
 	$result1 = mysqli_query($conn, $sql);
	header('Location: ../admin.php');

		// echo $sql2;
	mysqli_close($conn);
?>