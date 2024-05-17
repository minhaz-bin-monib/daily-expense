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
            <button type="submit" onclick="openDepositBlanceModal()" class="btn btn-sm light btn-primary" name="submit">Deposit Balance</button>
        </div>

        <div class="col-5">
            Today's Total Debit:
        </div>
        <div class="col-3">33,850</div>
        <div class="col-4"></div>

        <div class="col-5">
            Today's Closing Balance:
        </div>
        <div class="col-3"><b>223,160</b></div>
        <div class="col-4">
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col-6">
            <button type="submit" onclick="openAddExpanceModal()" class="btn btn-sm light btn-primary" name="addNewCost">Add Expense</button>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <p class="mx-3">Date: 02/03/2024 Fri</p>
            <button type="submit" class="btn btn-sm light btn-primary" onclick="openclosingTodaysExpanseModal()" name="confirmTodaysExpanse">Confirm Expenses</button>

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

<!-- START Modal for Add Amount into Main Balance -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Diposit Balance</h5>
        <button type="button" onclick="closeDepositBlanceModal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4 mb-3">Amount for Diposit</div>
            <div class="col-8 mb-3">
                <input type="number" min="0.00" class="form-control" placeholder="0.00" />
            </div>
            <div class="col-4">Remark</div>
            <div class="col-8">
                <input type="text" min="0.00" class="form-control" placeholder="Notes" />
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" onclick="closeDepositBlanceModal()" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END Modal for Add Amount into Main Balance -->

<!-- START Modal for Add Daily Expanse -->
<div class="modal fade" id="addExpanceModalId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Expance</h5>
        <button type="button" onclick="closeAddExpanceModal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-4 mb-3">Category</div>
            <div class="col-8 mb-3">
                <select name="fruit" id="fruit" class="form-control">
                    <option value="apple">Hussain Sir</option>
                    <option value="banana">Rajan</option>
                    <option value="orange">Food+Egg Coconut+Entertentment</option>
                    <option value="orange">	CAR</option>
                </select>
            </div>
            <div class="col-4 mb-3">Description</div>
            <div class="col-8 mb-3">
                <select name="fruit" id="fruit" class="form-control">
                    <option value="apple">Sub Category Discription 1</option>
                    <option value="banana">Sub Category Discription 2</option>
                    <option value="orange">Sub Category Discription 3</option>
                    <option value="orange">Sub Category Discription 4</option>
                </select>
                <button type="button" class="btn btn-sm btn-primary">New</button>
            </div>
            <div class="col-4 mb-3">Amount</div>
            <div class="col-8 mb-3">
            <input type="number" min="0.00" class="form-control" placeholder="0.00" />
            </div>
            <div class="col-4">Remark</div>
            <div class="col-8">
                <input type="text" min="0.00" class="form-control" placeholder="Notes" />
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" onclick="closeAddExpanceModal()" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- END Modal for Add Daily Expanse -->

<!-- START Modal for Closing Days -->
<div class="modal fade" id="closingTodaysExpanseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Close Todays Expanse</h5>
        <button type="button" onclick="closeclosingTodaysExpanseModal()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-12 mb-3">
                <h5 class="text-center text-danger">Do you want to Close Todays Expanse?</h5>
            </div>
            <div class="col-4">Remark</div>
            <div class="col-8">
                <input type="text" min="0.00" class="form-control" placeholder="Notes" />
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" onclick="closeclosingTodaysExpanseModal()" data-dismiss="modal">NO</button>
        <button type="button" class="btn btn-sm btn-primary">YES</button>
      </div>
    </div>
  </div>
</div>
<!-- END Modal for Closing Days -->

<script>
    function openDepositBlanceModal()
    {
        $("#exampleModal").modal("show");
    }
    function closeDepositBlanceModal()
    {
        $("#exampleModal").modal("hide");
    }
    function openAddExpanceModal()
    {
        $("#addExpanceModalId").modal("show");
    }
    function closeAddExpanceModal()
    {
        $("#addExpanceModalId").modal("hide");
    }
    function openclosingTodaysExpanseModal()
    {
        $("#closingTodaysExpanseModal").modal("show");
    }
    function closeclosingTodaysExpanseModal()
    {
        $("#closingTodaysExpanseModal").modal("hide");
    }
</script>


<?php include '../footer.php' ?>