<?php

class Signupcontr extends Signup {
    public function signupUsers($user, $email, $pass, $cpass) {
        //validate empty input
            if (empty($user) || empty($email) || empty($pass) ||  empty($cpass)) {
            header("location: ../index.php?error=emptyentry");
            exit();
        }
        //validate invalid data
        if (!preg_match("/^[a-zA-Z0-9]*$/", $user)) {
            header("location: ../index.php?error=invaliddata");
            exit();
        }
        // validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("location: ../index.php?error=invalidemail");
                exit();
        }
        // Validate password match
        if ($pass !== $cpass) {
            header("location: ../index.php?error=passwordMismatch");
            exit();
        }

        // Check if user already exists
        if (!$this->checkUser($user, $email)) {
            header("location: ../index.php?error=userExists");
            exit();
        }

        // Create new user
        $this->setUser($user, $email, $pass);

        // Redirect upon successful signup
        header("location: ../home.php?signup=success");
        exit();
    }
}



    // class SignupContr extends Signup{

    //     private $user;
    //     private $email;
    //     private $pass;
    //     private $cpass;

    //     public function __construct($user, $email, $pass, $cpass)
    //     {
    //         $this->user = $user;
    //         $this->email = $email;
    //         $this->pass = $pass;
    //         $this->cpass = $cpass;
    //     }

    //     public function signupUsers(){
    //         // if ($this->emptyinput() == false) {
    //         //     // echo "Empty input";
    //         //     header("location: ../index.php?error=emptyinput");
    //         //     exit();
    //         // }
    //         if ($this->invaliddata() == false) {
    //             // echo "invalid username";
    //             header("location: ../index.php?error=invaliddata");
    //             exit();
    //         }
    //         if ($this->invalidEmail() == false) {
    //             // echo "invalid email";
    //             header("location: ../index.php?error=invalidemail");
    //             exit();
    //         }
    //         if ($this->passMatch() == false) {
    //             // echo "password does not match";
    //             header("location: ../index.php?error=passwordmissmatch");
    //             exit();
    //         }
    //         if ($this->userchecking() == false) {
    //             // echo "username and password already submitted";
    //             header("location: ../index.php?error=useridcheck");
    //             exit();
    //         }

    //         $this->setUser($this->user, $this->email, $this->pass);
    //     }

    // private function emptyinput(){
    //     $result = false;
    
    //     if (empty($this->user) || empty($this->email) || empty($this->pass) ||  empty($this->cpass)) {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // // private function invaliddata(){
    // //     $result;
    // //     if (!preg_match("/^[a-zA-Z0-9]*$/", $this->user)) {
    // //         $result = false;
    // //     }else {
    // //         $result = true;
    // //     }
    // //     return $result;
    // // }

    // private function invaliddata() {
    //     // Initialize $result variable
    //     $result = false;

    //     // Check if $this->user contains only alphanumeric characters
    //     if (preg_match("/^[a-zA-Z0-9]*$/", $this->user)) {
    //         $result = true;
    //     }
        
    //     return $result;
    // }


    // private function invalidEmail(){
       
    //     if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
    //         $result = false;
    //     }else {
    //         $result = true;
    //     }
    //     return $result;
    // }

    // private function passMatch(){
    //     $result = false;
    //     if ($this->pass !== $this->cpass){
            
    //         $result = true;
    //     }
    //     return $result;
    // }

    // private function userchecking(){
        
    //     if (!$this->checkUser($this->user, $this->email)){
    //         $result = false;
    //     }else {
    //         $result = true;
    //     }
    //     return $result;
    // }
        
    // }



?>