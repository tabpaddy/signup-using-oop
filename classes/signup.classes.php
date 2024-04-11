<?php
   class Signup extends Dbh{

    protected function setUser($user, $email, $pass) {
        $stmt = $this->connect()->prepare('INSERT INTO registration (user, email, pass) VALUES (?,?,?)');

        $hashedpass = password_hash($pass, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($user, $email, $hashedpass))) {
            # code...
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    private $resultcheck;

    protected function checkUser($user, $email) {
        $stmt = $this->connect()->prepare('SELECT user FROM registration WHERE user = ? OR email = ?');

        if (!$stmt->execute(array($user, $email))) {
            # code...
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        
        if ($stmt->rowCount() > 0) {
            # code...
            $this->resultcheck = false;
        }else{
            $this->resultcheck = true;
        }

        return $this->resultcheck;
    }

   } 



?>