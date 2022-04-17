<?php
    class User {
        
        public function __construct()
        {
            require_once('connection/config.php');
            $mysqli = new mysqli('localhost', 'root', '', 'moviesly');
            $this->dbh = $mysqli;
            if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            }
        }

        public function login($username, $pass) {  
            $query = $this->dbh->query("SELECT * FROM users where username='$username' AND password='$pass'");  
            $data = $query->fetch_array(MYSQLI_NUM);  
            $result = mysqli_num_rows($query);
            if ($result == 1) {  
                $_SESSION['login'] = true;  
                $_SESSION['id'] = $data['id'];  
                return true;  
            } else {  
                return false;  
            }  
        }  

        public function signup($username, $email, $pass) {   
            $checkuser = $this->dbh->query("SELECT username FROM users WHERE username='$username'");  
            $result = mysqli_num_rows($checkuser);  
            if ($result == 0) {  
                $signup = $this->dbh->query("INSERT INTO users (username, email, password) VALUES ('$username', '$email','$pass')");
                return $signup;
            } else {  
                return false;  
            }  
        }  

        public function session() {  
            if (isset($_SESSION['login'])) {  
                return $_SESSION['login'];  
            }  
        }  


    }
?>