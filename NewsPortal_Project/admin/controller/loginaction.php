 <!-- **************** Action Page for login *************** -->

<?php
include('../model/loginModel.php');

// *********Object Calling from loginModel*********
if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $password= $_POST['password'];

    $obj= new Login;
    $obj->adminLogin($username,$password);
}

?>