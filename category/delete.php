<?php 
    include '../connect.php';

    if(isset($_GET['deleteId']))
    {
        $id = $_GET['deleteId'];
        // echo $id;
        $sql = "delete from category where catId = $id";

        $result=mysqli_query($con, $sql);
        if($result)
        {
            echo "category deleted successfully";
            header('location: categoryList.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
?>

