<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'].'/daily-expense';
?>

  <nav class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
       
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url ?>/dashboard/dashboard.php">Expense Dashborard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">All Expense List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $base_url ?>/category/categoryList.php">Category List</a>
        </li>
      </ul>
    </div>
  </nav>





