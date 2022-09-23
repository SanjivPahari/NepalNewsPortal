<?PHP
$title="Home";
$topic='all';
$description='Get all latest and trending news all over from Nepal! ';
require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>


<div class="row">

<div class="col-md-8">

<?PHP require($_SERVER['DOCUMENT_ROOT']."/news_carousel.php"); ?>

 </div>
 
 <div class="col-md-4">
 
 <div class="card"  style="height:300px;">
  <div class="card-body"  >
    <h4 class="card-title"><b>TOP STORIES</b></h4>
    <hr color="#FF0039" style="height:10px">
	
	<div id="topstories">
	
      <?PHP require($_SERVER['DOCUMENT_ROOT']."/topstories.php"); ?>
		
		</div>
    
	


 
   
   
  </div>
</div>

</div>
 </div>


<br>

  <?PHP require($_SERVER['DOCUMENT_ROOT']."/mid_content.php"); ?>

<div class="row" id="load_topic">


 <?PHP // require($_SERVER['DOCUMENT_ROOT']."/load_topic.php");  ?>




</div>




<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>