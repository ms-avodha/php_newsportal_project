<!-- ***************News Detail Page for admin*************** -->

<?php
include('./header.php');
include('./../model/adminNewsManagementModel.php');

// *********Object Calling from  adminNewsManagementModel*********
if(isset($_REQUEST['catelog_id'])){
    $obj = new AdminNewsManagement;
    $result=$obj->adminDropDownMenu($_REQUEST['catelog_id']);
}
else{
    $obj= new AdminNewsManagement;
    $result=$obj->getDataFromNews();
}

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
</head>
<body>
    <div align="center" class="adminNewsManagetitle"><h1>News Management</h1></div>
    <?php 
    if($alert ==1){
    echo '<div style="color:green;" align="center" class="alert">News Edited Successfully !</div>';} 
    ?>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Catalog
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="adminNewsManagement.php">News</a></li>
            <li><a class="dropdown-item" href="adminNewsManagement.php?catelog_id=2">National</a></li>
            <li><a class="dropdown-item" href="adminNewsManagement.php?catelog_id=1">Sports</a></li>
            <li><a class="dropdown-item" href="adminNewsManagement.php?catelog_id=3">Entertainment</a></li>
            <li><a class="dropdown-item" href="adminNewsManagement.php?catelog_id=5">International</a></li>
            <li><a class="dropdown-item" href="adminNewsManagement.php?catelog_id=6">Oscar</a></li>
        </ul>
    </li> <br><br>
<!-- ***************News Detail Table for Admin*************** -->

    <table id="newstable">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>News Image</th>
                <th>News Topic</th>
                <th>News Content</th>
                <th>News Category</th>
                <th>News Sub Category</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr><td style="text-align:center;" colspan=10><a href="adminAddNews.php"><input type="button" value=" Add News "></td></a></tr>
        </thead>
        <?php
        if($result->num_rows >0){
            $i=1;
            while($row = $result->fetch_assoc()){

        ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="./../../images/<?php echo $row['image']; ?>" alt="" style="height:100px;width:150px;"></td>
                <td style="text-align:justify;"><?php echo $row['topic']; ?></td>
                <td style="text-align:justify;"><?php echo $row['content']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><?php echo $row['sub_name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['enddate']; ?></td>
                <td align="center"><a href="adminNewsEdit.php?news_id=<?php echo $row['news_id']; ?>"><i class="fas fa-edit" style="color:black;" ></i></a></td>
                <td align="center"><a href="./../controller/adminNewsDeleteAction.php?delete=1&news_id=<?php echo $row['news_id'];?>"><i class="fa fa-trash" aria-hidden="true" style="color:black;" ></i></a></td>
            </tr>
        <?php
            }
        }
        ?>
        </tbody>
    </table>
</body>
<?php
include('footer.php');
?>
</html>