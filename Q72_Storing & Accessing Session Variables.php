<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Armaan";
    $_SESSION["lastname"] = "Narotra";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
    echo"<br>This code is executed by Armaan Narotra (0221BCA159)";
 
?>