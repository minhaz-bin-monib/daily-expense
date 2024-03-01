
<?php 
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'].'/dailyexpanse';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Left Side Menu</title>
  <base href="http://localhost" />

  <link rel="stylesheet" href="<?php echo $base_url?>/static/css/bootstrap.min.css" >
  <link rel="stylesheet" href="<?php echo $base_url?>/static/css/style.css" >
  <style>
   
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      z-index: 100;
      padding: 48px 0 0;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      background-color: #f8f9fa;
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto; 
    }

    .nav-link {
      color: #333;
    }
  </style>
</head>
<body>