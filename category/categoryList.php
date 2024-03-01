<?php
include '../connect.php';

?>


<?php include '../header.php' ?>
<?php  include '../menu.php' ?>

    <div class="container mt-3 mainContainer">
        <button class="btn btn-primary">
            <a class="text-light" href="<?php echo $base_url?>/category/category.php"> Add Category</a>
        </button>


        <table class="table mt-3">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT catId, name, description from category";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <td>' . $row['name'] . '</td>
                                <td>' . $row['description'] . '</td>
                                <td> 
                                <button class="btn btn-sm btn-primary"><a href="'.$base_url.'/category/update.php?updateId='.$row['catId'].'" class="text-light" >Update</a></button>
                                <button class="btn btn-sm btn-danger"><a href="'.$base_url.'/category/delete.php?deleteId='.$row['catId'].'" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                    }
                }

                ?>





            </tbody>
        </table>
    </div>

    <?php include '../footer.php' ?>