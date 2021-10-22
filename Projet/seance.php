<!--Source Genevieve Mainville-->
<?php

session_start();
  require ('include/connex.php');
  
  $userId = mysqli_real_escape_string($con, $_SESSION['userId']);
  
  foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($con, $value);
  }

  $sql = "INSERT INTO rv (rvchoix,rvdate,rvheure) VALUES ('$rvchoix','$rvdate', '$rvheure')";
  mysqli_query($con, $sql);
  $rvId = mysqli_insert_id($con);
  $sql = "INSERT INTO rvuser VALUES (NULL, '$userId','$rvId')";
  mysqli_query($con, $sql);
  mysqli_close($con);

  header("Location: index.html");
?>