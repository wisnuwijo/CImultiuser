<?php
  error_reporting(0);
  $mode = $_GET['mode'];
  if ($mode == "data_user") {
    include 'datauser_sb.php';
  } elseif ($mode ==  "biodata") {
    include 'biodata_sb.php';
  } elseif ($mode == "sekolah") {
    include 'sekolah_sb.php';
  }
  elseif ($mode == null) {
    include 'datauser_sb.php';
  } else{
    //echo "parameter error";
  }
?>