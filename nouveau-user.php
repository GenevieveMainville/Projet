<?php

require ('include/connex.php');


    $valideUser = false;
    $validePassword = false;
        
    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount !== 1)
    {
       $valideUser = true;  
    }
    else{
        echo "deja un compte";
    }
    
    if(preg_match("/[0-9a-zA-Z -\/:-@\[-\`{-~]{15,}/", $userpassword))
    { 
        $validePassword = true;
    }
    else
    {
        echo "Le mot de passe doit contenir plus de 15 caractères.";
    }
    if($valideUser && $validePassword)
    {
        $password_hash = password_hash($userpassword,PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (nom, username, userpassword, email) VALUES ('$nom', '$username', '$password_hash', '$email')";
        $result = mysqli_query($con, $sql);
        header("Location: login.php");
    }
    
    
    
  
 ?>
