<?php

if (isset($_POST["submit"])) {
    $user = $_POST["uid"];
    $pass = $_POST["pass"];
    
    include_once "autoload.inc.php"; // Assuming this file includes necessary dependencies

    $login = new Logincontr();
    
    // Validate and process user login
    $login->loginUsers($user, $pass);
}



?>