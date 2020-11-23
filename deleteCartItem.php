<?php 

session_start();
include "connect.php";


$product_id = $_POST['id'];

unset($_SESSION['cart'][$product_id]); 


 ?>