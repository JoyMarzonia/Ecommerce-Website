<?php
	session_start(); //be able to use $_SESSION
	//no session_start(), no $_SESSION

	//gets the user input from form and cleans it up.
	$uname = htmlspecialchars($_POST["user_name"]);   //post or get use htmlspecialchars
	$pw = htmlspecialchars($_POST["password"]);
	$hashpw = sha1($pw);
	$role = "admin";

	//if user credentials are correct, assign username to session variable.
	if (authenticate($uname,$hashpw)) {
		if(authenticateAdmin($uname,$hashpw,$role)){
			$_SESSION['admin'] = $uname;
			$_SESSION["role"] = $role;
			// //echo("welcome admin $email");
			header("location: ../admin.php");
		
		}else{
			$_SESSION["user_name"]= $uname;
			header("Location: ../index.php");
		}

	}else{
		echo 'Incorrect login details.';
		echo "<a href= '../index.php'>Try Again</a>";
	}

	//checks if the username is what we intend it to be
	function authenticate($uname,$pw1){
		include "connect.php";
		$sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pw1' AND status = 0";
		// echo $sql;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {      
				return true;
			}else{
				return false;
			}
			mysqli_close($conn);
	}

	function authenticateAdmin($uname2,$pw2,$role){
		include "connect.php";
		$sql = "SELECT * FROM users WHERE user_name = '$uname2' AND password = '$pw2' AND role = '$role'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {      
				return true;
			}else{
				return false;
			}
			mysqli_close($conn);
	}


?>