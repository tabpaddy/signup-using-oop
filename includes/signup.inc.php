<?php

if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    // Include necessary files and instantiate Signup controller
    // include_once __DIR__ . "/../classes/dbh.class.php";
    // include_once __DIR__ . "/../classes/signup.class.php";
    // include_once __DIR__ . "/../classes/signupcontr.class.php";
    include_once "autoload.inc.php";

    $signup = new Signupcontr();
    
    // Validate and process user signup
    $signup->signupUsers($user, $email, $pass, $cpass);
}
// if (isset($_POST["submit"])) {
//     //grabbing the data
//     $user = $_POST["user"];
//     $email = $_POST["email"];
//     $pass = $_POST["pass"];
//     $cpass = $_POST["cpass"];

//     //instantiate Signup contr class
//     include "../classes/dbh.classes.php";
//     include "../classes/signup.classes.php";
//     include "../classes/signup.contr.classes.php";
//     $signup = new SignupContr($user, $email, $pass, $cpass);


//     //running error handlers and user signup
//     $signup->signupUsers();

//     //going to back to front page
//     header("location: ../home.php?signup=success");
// }


?>