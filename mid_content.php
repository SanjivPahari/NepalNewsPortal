
<div class="row">

<div class="col-md-6">


			<div  id="main_content" class="searchx"> 	
		
<?PHP echo main_content($topic); ?>

</div>





</div>

<div class="col-md-6">
	<div  id="main_content" class="searchx"> 	
<div class="row">


   <?PHP echo sub_content($topic); ?>
   
   </div>
		</div>
		</div>
		
		



</div>

<br>

<div class="row">


<div class="col-md-6">
 <h4 class="card-title"><b>RECOMMENDED VIDEOS</b></h4>
    <hr color="#FF0039" style="height:10px">
		<div  class="searchx"> 	
	<div class="row" id="recommend_videos_all">
		
		<span class="loading"></span>
		
 </div>
 </div>
 
<script>
jQuery.get('/recommend_videos.php?topic=<?PHP echo $topic; ?>', function(data) {
    $("#recommend_videos_all").html(data);
});
</script>

	</div>
	
	<div class="col-md-6">
	
<div  id="load_best_content" class="searchx">
		
	
		
	<?PHP require($_SERVER['DOCUMENT_ROOT']."/load_best_content.php"); ?>
	
	

	
 </div>
 


	
	
	
</div>
</div>



<br>

<div class="row">



<div class="col-md-12">
<h4 class="card-title"><b>RECENT</b></h4>
<hr color="#FF0039" style="height:10px">

	<div class="searchx">
	<div class="row" id="load_recent_content">
	
<?PHP require($_SERVER['DOCUMENT_ROOT']."/load_recent_content.php"); ?>
	
   </div>
	

	</div>
	
	
	
</div>

</div>