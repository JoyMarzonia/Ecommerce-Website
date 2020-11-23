<?php 
	include 'connect.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];




	$sql3 = "UPDATE users SET user_name='$user_name', fullname='$name', email='$email', password='$password', address='$address', phone='$phone' WHERE id=$id";

	$result3 = mysqli_query($conn,$sql3);
	echo $sql3;
	 
	header('Location: ../admin.php');


	mysqli_close($conn);
 ?>