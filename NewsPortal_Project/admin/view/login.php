<!-- ***************Login Page for Admin*************** -->

<?php
include('../../connection.php');

// ***********For Success Message************
$alert = isset($_REQUEST['success']) ? $_REQUEST['success'] : "";
$success = isset($_REQUEST['success']) ? $_REQUEST['success'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  
  <!-- ***************CSS Only*************** -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="./../../css/style.css">
</head>
<body>

  <!--******** Plane Header for Login Page *******-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MS News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./../../index.php">User</a></li>
          </ul>
        </li>
    </ul>
    </div>
  </div>
</nav>

<!-- ***************Admin Login Form*************** -->

<form action="../controller/loginaction.php" method="post">
  <div align="center" class="login">
      <h1>Admin Login</h1>
      <hr>
      <table cellpadding="10px;" cellspacing="10px;"> 
        <thead>
          <tr >
            <td><label for="">Username</label></td>
            <td><input type=text name="username" ></td>
          </tr>
          <tr>
            <td><label for="">Password</label></td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td  colspan=2 style="text-align:center;"><input type="submit" name="submit" value="Sign In"></td>
          </tr>              
        </thead>
      </table>
  </div>
</form>
<div align="center">
  <?php 
  if($alert ==1){
    echo '<div style="color:red;">Username or Password Mismatch !</div>';} 
  ?>
</div>
</body>
</html>



<?php
include('footer.php');
?>