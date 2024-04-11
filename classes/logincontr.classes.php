<?php

class Logincontr extends Login {

    public function loginUsers($user, $pass) {
        if (empty($user) || empty($pass)) {
            header("Location: ../index.php?error=emptydetails");
            exit();
        }
        
        if (!preg_match("/^[a-zA-Z0-9@.]*$/", $user)) {
            header("Location: ../index.php?error=invaliddata");
            exit();
        }

        // Validate login credentials
        $loginResult = $this->getUser($user, $pass);

        if ($loginResult) {
            header("Location: ../home.php?login=success");
            exit();
        } else {
            header("Location: ../login.php?error=invalidlogin");
            exit();
        }
    }

}





?>