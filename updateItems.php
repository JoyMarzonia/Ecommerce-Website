<?php 
	include 'connect.php';


	$id = $_POST['id'];
	$prodName = $_POST['productName'];
	$cat_id = $_POST['cat_id'];
	$prodPrice = $_POST['price'];
	$unitsInstock = $_POST['unitsInstock'];
	$old_img_path = $_POST['productImg'];

	$new_img_path = $_POST['newprodImg'];
	$desc = $_POST['desc'];

	$filename = $_FILES['productImg']['name'];
	$file_tmpname = $_FILES['productImg']['tmp_name'];
	
	$final_filepath = "assets/images/items/" . $filename;


	if ($new_img_path == "") {
		$image_path = $old_img_path;
	} else {
		$image_path = "assets/images/items/" . $new_img_path;
	}

	$sql3 = "UPDATE products SET name='$prodName', price='$prodPrice', img_path='$image_path', description='$desc', unitsInstock='$unitsInstock', category_id='$cat_id' WHERE id=$id";

	$result3 = mysqli_query($conn,$sql3);
	echo $sql3;
	 
	header('Location: ../admin.php');

	move_uploaded_file($file_tmpname, $final_filepath);


	mysqli_close($conn);
 ?>

