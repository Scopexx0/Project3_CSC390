<?php
Class UserAuth {
    private $userName = "admin";
    private $userPswd = "1234";

    public function isLoggedIn(){
        return $_SESSION["name"] === $this->userName;
    }
    
    public function authenticate($user, $password){
        if($user === $this->userName && $password === $this->userPswd)
        {
            $this->logUserIn($this->userName);
            return true;
        }
        return false;
    }

    private function logUserIn($userName){
        session_start();
        $_SESSION["name"] = $userName;
        return;
    }

    public function logOut(){
        unset($_SESSION['name']);
        session_destroy();
        session_regenerate_id(TRUE);
        return;
    }

    public function redirectToLogin(){
        header("Location: index.php");
        return;
    }
}

?>