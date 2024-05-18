<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'].'/daily-expense';
?>
  
  <!-- Bootstrap JS (optional) -->
  <script src="<?php echo $base_url?>/static/js/jquery.slim.min.js" ></script>
    <script src="<?php echo $base_url?>/static/js/bootstrap.bundle.min.js" ></script>
</body>
</html>