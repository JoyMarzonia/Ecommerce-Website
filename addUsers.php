<?php 
	include "partials/connect.php";
	include "partials/header.php";
 ?>

 <div class="container col-md-4 mt-5" id="updateUsers">
 	<div class="form-group mt-5">
 		<form action="partials/addNewUsers.php" method="POST" enctype="multipart/form-data">

 			<div class="md-form form-sm mb-4 mt-5">
 				<input type="text" class="form-control" name="firstName" placeholder="First Name">
 				<label data-error="wrong" data-success="right" for="firstName"></label>			
 			</div>

 			<div class="md-form form-sm mb-4">
 				<input type="text" class="form-control" name="lastName" placeholder="Last Name">
 				<label data-error="wrong" data-success="right" for="lastName"></label>	
 			</div>

 			<div class="md-form form-sm mb-5">
 				<input type="text" name="username" class="form-control form-control-sm validate" placeholder="Your username">
 				<label data-error="wrong" data-success="right" for="username"></label>
 			</div>

 			<div class="md-form form-sm mb-4">
 				<input type="text" class="form-control" name="address" placeholder="Address">
 				<label data-error="wrong" data-success="right" for="address"></label>   
 			</div>

 			<div class="md-form form-sm mb-4">
 				<input type="number" class="form-control" name="contact" placeholder="Contact Number">
 				<label data-error="wrong" data-success="right" for="contact"></label>	
 			</div>

 			<div class="md-form form-sm mb-5">
 				<input type="email" name="email" class="form-control form-control-sm validate" placeholder="Email Address">
 				<label data-error="wrong" data-success="right" for="email"></label>
 			</div>

 			<div class="md-form form-sm mb-5">
 				<input type="password" name="password" class="form-control form-control-sm validate" placeholder="Your password">
 				<label data-error="wrong" data-success="right" for="password"></label>
 			</div>

 			<div class="md-form form-sm mb-4">
 				<input type="password" name="confirmpw" class="form-control form-control-sm validate" placeholder="Confirm Password">
 				<label data-error="wrong" data-success="right" for="confirmpw"></label>
 			</div>

 				<button type="submit" class="btn btn-success">Add New User</button>
 			</form>
 		</div>
 	</div>

<?php 
	include "partials/footer.php";
 ?>


