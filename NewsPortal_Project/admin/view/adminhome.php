<!-- ***************Admin Home page*************** -->

<?php
include('./header.php');

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
    <title>Document</title>
    <style>
        .footer{
            margin-top:26px;
        }
    </style>
</head>
<body>
    <div align="center">
    <img src="./../../images/msnewslogo.png" alt="">
    <h1><i><b>MS NEWS</b></i></h1>
    </div>
  <?php 
  if($alert ==1){
    echo '<div style="color:green;" align="center" class="alert"><h1>Welcome Admin !</h1></div>';} 
  ?>
  <div class="blankadminhome"></div>
</body>
</html>

<?php
include('./footer.php');
?>