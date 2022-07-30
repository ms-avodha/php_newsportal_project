<!-- ***************Home Page*************** -->

<?php
include('header.php');
include('indexModel.php');

// *********Object Calling from indexModel*********

if(isset($_REQUEST['catelog_id'])){
$obj = new Display;
$result=$obj->dropDownMenu($_REQUEST['catelog_id']);
}
else{
    $obj= new Display;
    $result=$obj->newsDisplay();
}
if($result->num_rows > 0){
    $i=1;
    while($row=$result->fetch_assoc()){
        if ($row['enddate'] >= date("Y-m-d")){
?>
<div class="container mt-5">
    <div class="row mx-0 px-0">
        <div class="col-md-12 ">
            <div class="news-card">
                <div class="row">
                    <div class="col-md-4">
                        <img class="news-img" src="images/<?php echo $row['image'];?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="news-title"><?php echo $row["topic"]; ?></h2>
                        <h6 class="news-date"><?php echo $row["date"]; ?></h6>
                        <p class="news-content"><?php echo $row["content"]; ?></p>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</div>
<?php
    }
}
}
?>

<?php
include('footer.php');
?>