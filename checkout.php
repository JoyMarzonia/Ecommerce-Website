<?php 
	session_start();
	include 'connect.php';

	if (isset($_SESSION['cart'])) {
		$username = $_SESSION['user_name']; 
		$sql = "SELECT * FROM users WHERE user_name = '$username'";
		$result = mysqli_query($conn, $sql);
		$row1 = mysqli_fetch_assoc($result);

		$user_id = $row1['id'];
		$requiredate = date("F j, Y, g:i a");
		$ref_num= mt_rand(1000000,9999999);
		$totalPrice = 0;
		

		foreach ($_SESSION['cart'] as $id => $product)
			{
				$subTotal = ($product['qty']*$product['price']);
				// echo "Amount: &#x20b1;" . $subTotal;
				$totalPrice += $subTotal;
				// echo $total;
			}
		$sql1 = "INSERT INTO orders(user_id,total,referenceNumber)VALUES('$user_id', " . $totalPrice .",'$ref_num')";

		// echo $sql1;
		$result1 = mysqli_query($conn,$sql1);
		$sql2 = "SELECT * FROM orders WHERE referenceNumber = '$ref_num'";
		$result2 = mysqli_query($conn, $sql2);
		// echo $sql2;
		$row = mysqli_fetch_assoc($result2);


		$order_id = $row['id'];
	 	// echo $order_id;

		echo" 
			<div class='container mx-5 my-5'
				<div class='card'>
					<div class='card-body'>
					<h1 class='text-center'><strong>Order Summary</strong></h1>
					<div class='container'>
					  <table class='table table-striped'>
					   <tbody>
				       <thead class='blue-grey lighten-4'>
				        <tr>
				            <th></th>
				            <th></th>
				            <th></th>
				        </tr>
				      </thead>

				        <tr>
				            <td>Full Name:</td>
				            <td>".$row1['fullname']."</td>
				            <td></td>
				        </tr>

				        <tr>
				            <td>Shipping Address:</td>
				            <td>".$row1['address']."</td>
				            <td></td>
				        </tr>

				         <tr>
				            <td>Reference Number:</td>
				            <td>".$ref_num."</td>
				            <td></td>
				        </tr>

				         <tr>
				            <td>Phone:</td>
				            <td>".$row1['phone']."</td>
				            <td></td>
				        </tr>

				         <tr>
				            <td>Email Address:</td>
				            <td>".$row1['email']."</td>
				            <td></td>
				        </tr>

					  ";


		foreach ($_SESSION['cart'] as $id => $product2)
		{
			$subTotal = $product2['qty'] * $product2['price'];
			$sql3 = "INSERT INTO orderdetails(product_id,order_id,qty_ordered,subTotal)VALUES(".$product2['id']." , $order_id , ".$product2['qty']." ,  ".$subTotal." )";
			
			$result3 = mysqli_query($conn, $sql3);
			
		
			echo" 
				   
				        <tr>
				            <td>Item Name:</td>
				            <td>".$product2['name']."</td>
				            <td></td>
				        </tr>

				        <tr>
				            <td>Quantity:</td>
				            <td>".$product2['qty']."</td>
				            <td></td>
				        </tr

				        <tr>
				            <td>Amount to Pay:</td>
				            <td>".$totalPrice."</td>
				            <td></td>
				        </tr>
				";
		}
			echo "

		    		</tbody>
				</table>
			</div>
			</div>

			<div class='text-center'>
				<a  href='../cart.php'>
				<button class='btn btn-success'>Back to Catalog</button>
				</a>
				<a  href='../index.php'>
				<button class='btn btn-default'>Back to Home</button>
				</a>
			</div>
			<div class='text-center'>
				
			</div>
				";

	
}else{

}

 ?>

  <?php 

	mysqli_close($conn);
	unset($_SESSION['cart']);
	unset($_SESSION['totalCartItem']);
	

?>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script
