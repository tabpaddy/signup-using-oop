<?php

class Login extends Dbh {

    protected function getUser($id, $pass) {
        $stmt = $this->connect()->prepare('SELECT * FROM registration WHERE user = :id OR email = :id');
        $stmt->execute(array(':id' => $id));
        
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $user['pass'])) {
                session_start();
                $_SESSION["id"] = $user["id"];
                $_SESSION["user"] = $user["user"];
                return true; // Login successful
            } else {
                return false; // Incorrect password
            }
        } else {
            return false; // User not found
        }
    }

}





?>