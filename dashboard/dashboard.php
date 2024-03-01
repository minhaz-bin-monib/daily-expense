<?php
include '../connect.php';

?>

<?php include '../header.php' ?>
<?php include '../menu.php' ?>

<style>
    .table td {
        padding: 1px;
    }
    .table th {
        padding: 2px;
    }
</style>
<div class="container mt-3 mainContainer" style="width: 100%;">
    <div class="text-center">
        <h4>All-March Bangladesh Limited</h4>
    </div>
    <div class="row" style="width: 500px; margin: 0 auto;">
        <div class="col-5">
            Previous Balance:
        </div>
        <div class="col-3"><b>257,010</b></div>
        <div class="col-4">
            <button type="submit" class="btn btn-sm light btn-primary" name="submit">Deposit Balance</button>
        </div>

        <div class="col-5">
            Today Total Debit:
        </div>
        <div class="col-3">33,850</div>
        <div class="col-4"></div>

        <div class="col-5">
            Today Closing Balance:
        </div>
        <div class="col-3"><b>223,160</b></div>
        <div class="col-4">
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-6">
            <button type="submit" class="btn btn-sm light btn-primary" name="addNewCost">Add Expense</button>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <p class="mx-3">Date: 02/03/2024 Fri</p>
            <button type="submit" class="btn btn-sm light btn-primary" name="confirmTodaysExpanse">Confirm Expenses</button>

        </div>

    </div>
    <div class="row px-5 ">
        <table class="table mt-2 table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="3">Debit</th>
                    <th scope="col" colspan="2"></th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="col">30-11-23</th>
                    <th scope="col">Previous Balance</th>
                    <th scope="col">257,010</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                <?php
                    $sql = "SELECT catId, name, description from category";
                    $result = mysqli_query($con, $sql);
                    if ($result) {
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>
                                <td scope="col"></td>
                                <td scope="col"></td>
                                <td scope="col"></td>
                                <td scope="col"> <b> ' . $row['name'] . '</b></td>
                                <td scope="col"></td>
                                <td scope="col"></td>
                                <td scope="col"></td>
                             </tr>';
                        //    TODO: inner loop to get Sub Category and print by row by row 
                           $i++;
                            $ii = 1;
                            $sum = 0;
                            while ($ii <= $i)
                            {
                                $sum += 1000;
                                echo '<tr>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col"></td>
                                    <td scope="col">Demo Sub Category</td>
                                    <td scope="col">1000</td>
                                    <td scope="col">' . (($ii == $i) ? $sum : '') . '</td>
                                    <td scope="col">
                                        <button class="btn btn-sm btn-primary"><a href="' . $base_url . '/dashboard/update.php?updateId=' . $row['catId'] . '" class="text-light" >Update</a></button>
                                        <button class="btn btn-sm btn-danger"><a href="' . $base_url . '/dashboard/delete.php?deleteId=' . $row['catId'] . '" class="text-light">Delete</a></button>
                                    </td>
                                </tr>';
                                $ii++;
                            }
                           
                        }
                    }

                    echo '<tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"> <b> Today Total Debit:</b></td>
                        <td scope="col">33,850</td>
                        <td scope="col">33,850</td>
                        <td scope="col"></td>
                     </tr>';
                    echo '<tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"> <b> Today Closing Balance:</b></td>
                        <td scope="col">223,160</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                    </tr>';
                    echo '<tr>
                        <td scope="col" colspan="2">Today Total Credit:</td>
                        <td scope="col">257,010</td>
                        <td scope="col"></td>
                        <td scope="col">257,010</td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                    </tr>';

                ?>




            </tbody>
        </table>
    </div>

</div>


<?php include '../footer.php' ?>