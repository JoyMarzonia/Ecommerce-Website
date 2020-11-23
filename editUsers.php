<?php 
    include "partials/connect.php";
    include "partials/header.php";

 ?>

<?php 
   
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM users WHERE id=$id";
    $result1 = mysqli_query($conn,$sql1);

    while ($row = mysqli_fetch_array($result1)) {
        $name = $_POST['fullname'];
        $user_name = $_POST['user_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
    }
?>


    <div class="container col-md-4" id="updateUsers">
        <div class="form-group">
            <form action="updateUsers.php" method="POST" enctype="multipart/form-data">

            <label for="name">Full Name:</label>
            <input type="text" name="name" class='form-control' value="<?php echo $name; ?>">

            <br>

            <label for="user_name">User Name:</label>
            <input type="text" name="user_name" class='form-control' value="<?php echo $user_name; ?>">

            <br>

            <label for="email">Email:</label>
            <input type="text" name="email" class='form-control' value="<?php echo $email; ?>">

            <br>

            <label for="pasword">Password:</label>
            <input type="text" name="password" class='form-control' value="<?php echo $password; ?>">
            <br>

            <label for="address">Address:</label>
            <input type="text" name="address" class='form-control' value="<?php echo $address; ?>">

            <label for="phone">Contact Number:</label>
            <input type="number" name="phone" class='form-control' value="<?php echo $phone; ?>">

            <label for="id">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            <input type="submit" name="update" class="btn btn-success" value="Update">
            </form>
        </div>
    </div>



     <?php 
        include "partials/footer.php";
      ?>
