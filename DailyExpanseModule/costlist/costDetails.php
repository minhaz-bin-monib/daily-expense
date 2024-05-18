<?php include '../../connect.php';?>


<?php include '../../header.php' ?>
<?php  include '../../menu.php' ?>

<div class="container mt-3 mainContainer" style="width: 100%;">
    <div class="row">
        <div class="col-8"></div>
        <div class="col-4">Close By Rahim</div>
        <div class="col-8"></div>
        <div class="col-4">Date: 25-11-2023</div>
        <div class="col-8"></div>
        <div class="col-2">Time: 06:23 PM</div>
        <div class="col-2">
            <button class="btn btn-sm btn-primary">Excel</button>
            <button class="btn btn-sm btn-primary">PDF</button>
        </div>
    </div>
    <div class="row px-5 ">
        <table class="table mt-2 table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="3">Debit</th>
                    <th scope="col" colspan="2"></th>
                    <th scope="col">Sub Total</th>

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
                     </tr>';
                    echo '<tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"> <b> Today Closing Balance:</b></td>
                        <td scope="col">223,160</td>
                        <td scope="col"></td>
                    </tr>';
                    echo '<tr>
                        <td scope="col" colspan="2">Today Total Credit:</td>
                        <td scope="col">257,010</td>
                        <td scope="col"></td>
                        <td scope="col">257,010</td>
                        <td scope="col"></td>
                    </tr>';

                ?>
            </tbody>
        </table>
    </div>

</div>

<?php include '../../footer.php' ?>