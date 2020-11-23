<?php 
	include 'connect.php';

	$name = $_POST['name'];
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];


echo $name;

	$sql3 = "UPDATE users SET user_name='$user_name', fullname='$name', email='$email', address='$address', phone='$phone' WHERE user_name='$user_name'";

	echo $sql3;

	$result3 = mysqli_query($conn,$sql3);

	 
	header('Location: ../settings.php');


	mysqli_close($conn);
 ?>