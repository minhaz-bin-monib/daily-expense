<?php 
   include '../../connect.php'; 
   if(isset($_POST['submit']))
   {
     $name = $_POST['name'];
     $description = $_POST['description'];

     $sql = "Insert into category (name, description) values('$name', '$description')";

     $result=mysqli_query($con, $sql);

     if($result)
     {
        // echo "Data inserted successfully";
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
                <input type="text" name="name" class="form-control" id="categoryName">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" name="description" class="form-control" id="description">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

   
   <?php include '../../footer.php' ?>