<?php
$con = mysqli_connect("localhost", "root", "","photo");

if(mysqli_connect_errno()){
    echo "Echec ". mysqli_connect_error();
    exit();
  }
  mysqli_set_charset($con,"utf8");


 ?>