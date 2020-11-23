<?php 
	include 'connect.php';

	$productName = $_POST['productName'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$unitsInstock = $_POST['unitsInstock'];

	$filename = $_FILES['productImg']['name'];
	$filesize = $_FILES['productImg']['size'];
	$description = $_POST['description'];

	
	$file_tmpname = $_FILES['productImg']['tmp_name'];
	$file_type = $_FILES['productImg']['type'];
	


	$final_filepath = "assets/images/" . $filename;
	$sql = "INSERT INTO products(name, price, unitsInstock, img_path, description, category_id) VALUES ('$productName', $price, $unitsInstock, '$final_filepath', '$description', $category)";


	$result = mysqli_query($conn,$sql);
	   echo "

	   		<button><class='nav-link' data-toggle='modal' data-target='#modalLoginForm'>Login</a></button>";


	header('Location: ../admin.php');

	move_uploaded_file($file_tmpname, $final_filepath);


	mysqli_close($conn);
 ?>


<i class="far fa-edit"></i>
