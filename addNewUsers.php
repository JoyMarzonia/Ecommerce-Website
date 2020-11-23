<?php 
	session_start();
	include 'connect.php';

	$firstName = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$confirmpw = $_POST['confirmpw'];

	$sql1 = "SELECT username FROM users WHERE username = '$username'";

	$result1 = mysqli_query($conn,$sql1);
	$row_count = mysqli_num_rows($result1);

	if ($row_count == 0 && ($password == $confirmpw)) {
		$hashpw = sha1($password);
		$sql2 = "INSERT INTO users(username,email,firstName,lastName,password,address,contact) VALUES ('$username', '$email', '$firstName', '$lastName', '$hashpw', '$address', '$contact')";
		$result2 = mysqli_query($conn, $sql2);

		header ('Location:../dashboard.php');
	}

	mysqli_close($conn);
 ?>