<?php
$_connection = mysqli_connect("localhost", "root", "", "blog");

// Check connection
if (mysqli_connect_errno()) {
  echo "FATAL ERROR";
  exit();
}
?>