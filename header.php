<?php 
    include "connect.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Oggay Ink</title>

	<!-- external css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

	<!-- web icon -->
	<link rel="icon" type="image/gif/png" href="assets/images/logo.png">

    <!-- javascript -->
	<script language="javascript"></script>

    <!-- googlefonts -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


  </head>


  <body>

      <!-- Modal -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <form action="partials/authenticate.php" method="POST">
                <div class="md-form mb-5">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" class="form-control validate" name="user_name">
                    <label data-error="wrong" data-success="right" for="defaultForm-email">Username</label>
                </div>

                <div class="md-form mb-4">
                    <i class="fa fa-lock prefix grey-text"></i>
                    <input type="password" id="defaultForm-pass" class="form-control validate" name="password">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                </div>
            </div>

            <div class="modal-footer d-flex justify-content-center">
                <button type="submit" class="btn btn-default">Login<i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>

            <div class="modal-footer mx-5 pt-3 mb-1">
                <p class="font-small grey-text d-flex justify-content-end">Not a member yet? <a href="register.php" class="blue-text ml-1">Register now</a></p>
            </div>

            </form>
        </div>
    </div>
</div>

 <!-- /modal -->



	<nav class="navbar navbar-expand-lg navbar-dark  grey darken-3" id="navcolor">
        <div><a class="navbar-brand testing" href="#">Oggay Ink</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    

<?php if(!isset($_SESSION['user_name'])){ ?>
    <?php if(isset($_SESSION['admin'])){ ?>


        <!-- ADmin Session -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalog.php">Catalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Edit Items</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
        </div>


	 


<?php } else { ?>

        <!-- Session no user -->

        

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="catalog.php">Catalog</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>

            </li>

            <li class="nav-item">
                <a class="nav-link"data-toggle="modal" data-target="#modalLoginForm">Log In</a>
            </li>
        </ul>
    </div>

        

    

    <?php } ?>

    <?php } else { ?>

        <!-- Session user -->


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link"><?php echo "<h6>Welcome " . $_SESSION['user_name'] . "</h6>" ?></a>
                 </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="catalog.php">Catalog</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
  

                <li class="nav-item">
                    <a class="nav-link" href="settings.php">Settings</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>

                </li>
                 
            </ul>
        </div>

<?php } ?>

</nav>

</div>



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>

</body>
</html>







