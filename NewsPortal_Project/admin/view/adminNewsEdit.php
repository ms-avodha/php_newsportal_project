<!-- *************** News Editor page for Admin *************** -->

<?php
session_start();
include('./header.php');
include('./../model/adminNewsEditModel.php');

// *********Object Calling from  adminNewsEditModel*********
$obj= new AdminNewsEdit;
$result1=$obj->getDataFromCategory();
$result2=$obj->getDataFromSubCategory();
if(isset($_REQUEST['id'])){
    $news_id=$_REQUEST['id'];
    $obj = new AdminNewsEdit;
    $obj->imageDeleteNews($news_id);
}
else{
    $news_id=$_REQUEST['news_id'];
}
$obj= new AdminNewsEdit;
$result=$obj->getDataFromNewsandCategory($news_id);

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
    <form action="../controller/adminNewsEditAction.php?news_id=<?php echo $news_id;?>" method="post" enctype="multipart/form-data">
        <div align="center" class="adminNewsManagetitle"><h1>News Editor</h1></div>
        <div align="center">
            
<!-- ***************News Editor Table for Admin*************** -->

        <table cellpadding="10px;" cellspacing="10px;" class="adminNewsManagetitle">
            <?php
            if($result ->num_rows >0){
                $i=1;
                $row = $result->fetch_assoc();
                $category_name= $row['category_name'];
                $category_id = $row['category_id'];
                $sub_id = $row['sub_id'];
                $date= $row['date'];
                $enddate=$row['enddate'];
            ?>
            <tbody>
                <tr>
                    <td>News Image</td>
                    <td><input type="file" value="" name="image"><br><img src="./../../images/<?php echo $row['image']; ?>" style="height:150px;width:200px;" alt=""> 
                    <a href="adminNewsEdit.php?id=<?php echo $row['news_id']?>"><i class="fa fa-trash" aria-hidden="true" style="color:black;" ></i></a></td>
                    
                </tr>
                <tr>    
                    <td>News Topic</td>
                    <td><textarea name="topic" id="" cols="50" rows="5" style="text-align:justify;"><?php echo $row['topic']; ?></textarea></td>
                </tr>
                <tr>
                    <td>News Content</td>
                    <td><textarea name="content" id="" cols="50" rows="5" style="text-align:justify;"><?php echo $row['content']; ?></textarea></td>
                </tr>
                <tr>
                    <td>News Category</td>
                    <td>
                        <select name="category_id" id="" style="width:150px;">
                            <?php
                            if($result1->num_rows >0){
                                while($row = $result1->fetch_assoc()){
                            ?>
                            <option value="<?php echo $row['category_id'] ?>" <?php if($row['category_id'] == $category_id) echo 'selected="selected"'; ?> ><?php echo $row['category_name'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>News Sub Category</td>
                    <td>
                        <select name="sub_id" id="" style="width:150px;">
                            <?php
                            if($result2->num_rows >0){
                                while($row = $result2->fetch_assoc()){
                            ?>
                            <option value="<?php echo $row['sub_id'] ?>" <?php if($row['sub_id'] == $sub_id) echo 'selected="selected"'; ?> ><?php echo $row['sub_name'] ?></option>                            
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Start Date</td>
                    <td><input type="date" value="<?php echo $date ?>" name="date" style="width:150px;" id="dateEdit"></td>
                </tr>
                <tr>
                    <td>End Date</td>
                    <td><input type="date" value="<?php echo $enddate ?>" name="enddate" style="width:150px;" id="enddateEdit"></td>

                </tr>
                <tr>
                    <td colspan =2 style="text-align:center;" ><button type="submit" name="submit" style="width:100px;">Save</button></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
        </div>
    </form>
</body>
<?php
include('footer.php');
?>
</html>