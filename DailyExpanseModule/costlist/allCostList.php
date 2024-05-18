<?php include '../../connect.php';?>


<?php include '../../header.php' ?>
<?php  include '../../menu.php' ?>

<div class="container mt-3 mainContainer" style="width: 100%;">
<div class="row px-5 ">
        <table class="table mt-2 table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col" >Date</th>
                    <th scope="col" >Opening Balance</th>
                    <th scope="col">Day's Cost</th>
                    <th scope="col">Closing Balance</th>
                    <th scope="col">Closing Remark</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                   echo '<tr>
                        <td scope="col">25-11-2023 Sun</td>
                        <td scope="col">23500</td>
                        <td scope="col">1500</td>
                        <td scope="col">22000</td>
                        <td scope="col">Give Note for The Day</td>
                        <td scope="col">
                            <a href="' . $base_url . '/DailyExpanseModule/costlist/costDetails.php" class="btn btn-sm btn-primary">Details</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">26-11-2023 Sun</td>
                        <td scope="col">22000</td>
                        <td scope="col">1000</td>
                        <td scope="col">21000</td>
                        <td scope="col">Give Note for The Day</td>
                        <td scope="col">
                            <a href="' . $base_url . '/DailyExpanseModule/costlist/costDetails.php" class="btn btn-sm btn-primary">Details</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="col">27-11-2023 Sun</td>
                        <td scope="col">30000</td>
                        <td scope="col">2000</td>
                        <td scope="col">28000</td>
                        <td scope="col">Some Amount Deposit by Sir</td>
                        <td scope="col">
                            <a href="' . $base_url . '/DailyExpanseModule/costlist/costDetails.php" class="btn btn-sm btn-primary">Details</a>
                        </td>
                    </tr>'
                ?>
            </tbody>
        </table>
    </div>
</div>


<?php include '../../footer.php' ?>