<?php 
    include "connect.php";

 ?>

<?php 
   
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM products WHERE id=$id";
    $result1 = mysqli_query($conn,$sql1);

    while ($row = mysqli_fetch_array($result1)) {
        $prodName = $row['name'];
        $cat_id = $row['category_id'];
        $prodPrice = $row['price'];
        $unitsInstock= $row['unitsInstock'];
        $img_path = $row['img_path'];
        $desc = $row['description'];
    }
?>


    <div class="container col-md-4" id="updateItem">
        <div class="form-group">
            <form action="updateItems.php" method="POST" enctype="multipart/form-data">

            <label for="productName">Product Name:</label>
            <input type="text" name="productName" class='form-control' value="<?php echo $prodName; ?>">

            <br>

            <label for="category">Category:</label>
            <input type="number" name="cat_id" class='form-control' value="<?php echo $cat_id; ?>">

            <br>

            <label for="price">Price:</label>
            <input type="number" name="price" class='form-control' value="<?php echo $prodPrice; ?>">

            <br>

            <label for="unitsInstock">Units In Stock:</label>
            <input type="number" name="unitsInstock" class='form-control' value="<?php echo $unitsInstock; ?>">

            <br>
            
            <label>Old Image Path:</label>
            <input type="text" name="productImg" value="<?php echo $img_path;?>">
            
            <label for="image">New Image Path:</label>
            <input type="file" name="newprodImg" class='form-control' value="<?php echo $new_img_path; ?>">

            <br>

            <label for="description">Description:</label>
            <input type="text" name="desc" class='form-control' value="<?php echo $desc; ?>">

            <label for="id">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            <input type="submit" name="update" class="btn btn-success" value="Update">
            </form>
        </div>
    </div>

    <?php
      include "header.php";
    ?>



     <?php 
        include "footer.php";
      ?>
