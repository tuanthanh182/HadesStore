<?php
$mysqli = new mysqli("localhost","root","","hadesdata");
$mysqli->set_charset("utf8");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Lỗi kết nối : " . $mysqli -> connect_error;
  exit();
}

?>