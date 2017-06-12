<?php include"conn.php"; ?>


<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){




//count all rows except already displayed
$queryAll = mysqli_query($db,"SELECT COUNT(*) as num_rows FROM tab WHERE id < ".$_POST['id']." ORDER BY id DESC");
$row = mysqli_fetch_assoc($queryAll);
$allRows = $row['num_rows'];

$showLimit = 5;

//get rows query
$query = mysqli_query($db,"SELECT * FROM tab WHERE id < ".$_POST['id']." LIMIT ".$showLimit);


//number of rows
$rowCount = mysqli_num_rows($query);

if($rowCount > 0){ 
    while($row = mysqli_fetch_assoc($query)){ 
        $tutorial_id = $row["id"]; ?>
        
        <div class="row">		
            <div class="col-md-12">
            <h3 style="margin-bottom:5px;"><?php echo $row['tab_name']; ?></h3>
            </div>
		</div>

<div class="row-devider"></div> 
        <!---->
       
<?php } ?>
<?php if($allRows > $showLimit){ ?>
    <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
        <span id="<?php echo $tutorial_id; ?>" class="show_more" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading…</span></span>
    </div>
<?php } ?>  
<?php 
    } 
}
?>