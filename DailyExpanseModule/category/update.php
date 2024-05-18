<?php 
   include '../../connect.php'; 

   $catId = $_GET['updateId'];
   $sql = "SELECT * from category where catId = $catId";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);

   
   if(isset($_POST['submit']))
   {
     $name = $_POST['name'];
     $description = $_POST['description'];

     $sql = "UPDATE category SET name= '$name', description= '$description' WHERE catId = $catId";

     $result=mysqli_query($con, $sql);

     if($result)
     {
         echo "Updated Successfully";
        header('location: categoryList.php');
     }
     else{
        die(mysqli_error($con));
     }
    
    }
?>


<?php include '../../header.php' ?>
<?php  include '../../menu.php' ?>

    <div class="container mt-3 mainContainer">
        <form method="post">
            <div class="form-group">
                <label for="categoryName">Catagory Name</label>
                <input type="text" name="name" value= '<?php echo $row['name'] ?>' class="form-control" id="categoryName">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" name="description" value='<?php echo $row['description'] ?>' class="form-control" id="description">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

   
    <?php include '../../footer.php' ?>