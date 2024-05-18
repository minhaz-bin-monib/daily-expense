<?php

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . '/daily-expense';

$con = new mysqli('localhost', 'root', '', 'deailyexpanse');

if (!$con) {
    // Security issue
    die(mysqli_error($con));
}
// else{
//     die(mysqli_error($con));
// }
