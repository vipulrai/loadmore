<?php
include"conn.php";
?>
<!-- Load more -->
<style type="text/css">

.tutorial_list{ 
margin-bottom:20px;
}
div.list_item {
border-left: 4px solid #7ad03a;
padding: 1px 12px;
background-color:#F1F1F1;
-webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
div.list_item {
margin: 5px 15px 2px;
}
div.list_item p {
margin: .5em 0;
padding: 2px;
font-size: 13px;
line-height: 1.5;
}
.list_item a {
text-decoration: none;
padding-bottom: 2px;
color: #0074a2;
-webkit-transition-property: border,background,color;
transition-property: border,background,color;-webkit-transition-duration: .05s;
transition-duration: .05s;
-webkit-transition-timing-function: ease-in-out;
transition-timing-function: ease-in-out;
}
.list_item a:hover{ 
text-decoration:underline;
}
.show_more_main {
margin: 15px 0px;
}
.show_more {
background-color: #f8f8f8;
background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
background-image: linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);
border: 1px solid;
border-color: #d3d3d3;
color: #333;
font-size: 12px;
outline: 0;
}
.show_more {
cursor: pointer;
display: block;
padding: 10px 0;
text-align: center;
font-weight:bold;
}
.loding {
background-color: #e9e9e9;
border: 1px solid;
border-color: #c6c6c6;
color: #333;
font-size: 12px;
display: block;
text-align: center;
padding: 10px 0;
outline: 0;
font-weight:bold;
}
.loding_txt {
background-image: url(loading_16.gif);
background-position: left;
background-repeat: no-repeat;
border: 0;
display: inline-block;
height: 16px;
padding-left: 20px;
}

</style>

<?php
$par_meter="parameter";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','.show_more',function(){
		var ID = $(this).attr('id');
		$('.show_more').hide();
		$('.loding').show();
		$.ajax({
			type:'POST',
			url:'load_more-search.php?par=<?php echo $par_meter; ?>',		
			data:'id='+ID,
			success:function(html){
				$('#show_more_main'+ID).remove();
				$('.tutorial_list').append(html);
			}
		});
		
	});
});
</script>
<!-- / -->



<div class="tutorial_list">
			<?php
			$query = mysqli_query($db,"SELECT * FROM tab LIMIT 7");
			$rowCount = mysqli_num_rows($query);
			
			if($rowCount > 0){ 
				while($row = mysqli_fetch_assoc($query)){ 
                    $tutorial_id = 	$row['id'];
            ?>
        <div class="row">		
            <div class="col-md-12">
            <h3 style="margin-bottom:5px;"><?php echo $row['tab_name']; ?></h3>
            </div>
		</div>
            <?php } ?>
            
            <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
                <span id="<?php echo $tutorial_id; ?>" class="show_more" title="Load more posts">Show more</span>
                <span class="loding" style="display: none;"><span class="loding_txt">Loading...</span></span>
            </div>
             <?php } else { echo"<div class='alert alert-danger' role='alert'>No Result Found !</div>"; }?>
</div>