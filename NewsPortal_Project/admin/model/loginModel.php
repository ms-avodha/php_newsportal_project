<?php
session_start();
include('./../../connection.php');
class Login extends Connection{

    public function adminLogin($username,$password){

         //  ***************Function for Login Page***************

        $password = md5($password);

        $sql ="SELECT * FROM `login` where `username`='$username' AND `password` = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
            }
            header('Location:./../view/adminhome.php?success=1');
        }
        else{
            header('Location:./../view/login.php?success=1');
        }
        
    }
}

?>