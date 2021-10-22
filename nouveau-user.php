<?php

require ('include/connex.php');


    
        
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }
    $valideUser = false;
    $validePassword = false;
    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount !== 1)
    {
       $valideUser = true;  
    }
    else{
        header("Location: creer.php?msg=2");;
    }
    
    if(preg_match("/[0-9a-zA-Z -\/:-@\[-\`{-~]{15,}/", $userpassword))
    { 
        $validePassword = true;
    }
    else
    {
        header("Location: creer.php?msg=1");
    }
    
    if($valideUser && $validePassword)
    {
        $password_hash = password_hash($userpassword,PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (nom, username, userpassword, email) VALUES ('$nom', '$username', '$password_hash', '$email')";
        $result = mysqli_query($con, $sql);
        header("Location: login.php");
    }
    
    
    
  
 ?>
