<?php
    include "connect.php";
 
$id = $_GET['id'];
 
$sql = "UPDATE users SET status = "1" WHERE id=$id";
 		
 	$result1 = mysqli_query($conn, $sql);

	session_unset();
	session_destroy();
	include "partials/header.php";
		
?>

	<h2>You have logged out successfully</h2>
	<button><a class="nav-link" data-toggle="modal" data-target="#modalLoginForm">Login Again </a> </button>
