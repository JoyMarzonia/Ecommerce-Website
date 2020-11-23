<?php
    include "connect.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "DELETE FROM products WHERE id=$id";
 		// echo $sql;
 	$result1 = mysqli_query($conn, $sql);
	header('Location: ../admin.php');

 


	mysqli_close($conn);
?>