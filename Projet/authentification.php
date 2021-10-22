<!--Source Genevieve Mainville-->
<?php
  session_start();
  require ('include/connex.php');


  foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($con, $value);
  }


  $sql = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($con, $sql);

  $rowcount = mysqli_num_rows($result);


  if($rowcount == 1){

    $user =  mysqli_fetch_assoc($result);

    $dbPassword = $user['userpassword'];

    if(password_verify($userpassword, $dbPassword)){

        session_regenerate_id();
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

        header("Location: r-v.php");


    }else{
    
      header("Location: login.php?msg=2");
    }

  }else{
  
    header("Location: login.php?msg=1");
  }

 


 ?>
