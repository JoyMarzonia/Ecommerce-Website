<?php 
	include "partials/connect.php";
		$name = $_POST['fullname'];
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
		$confirmpw = $_POST['confirmpassword'];
		$role = "user";
		



		$sql1 = "SELECT user_name FROM users WHERE user_name = '$user_name'";
		$result1 = mysqli_query($conn, $sql1);
		$row_count = mysqli_num_rows($result1);
		if ($row_count == 0 && ($password == $confirmpw)){
			$hashpw = sha1($password);
			$sql2 = "INSERT INTO users(user_name, email, fullname, password, address,phone, role) VALUES ('$user_name', '$email', '$name', '$hashpw', '$address','$phone','$role')";
			$result2 = mysqli_query($conn, $sql2);

			echo"

				<div class='alert alert-secondary' role='alert'>
  					You have successfully created a new account!
				</div>";

			echo "
				<button><class='nav-link' data-toggle='modal' data-target='#modalLoginForm'>Login</a></button>";
			

		} else {
			echo "Error in registration";
		}

		

 ?>

 


