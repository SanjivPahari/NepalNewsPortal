
<div style="overflow-y: scroll; height:200px;" >
<ul class="list-group list-group-flush">

   <?PHP 
   

foreach($_SESSION['news_collection'] as $mydata)
{

	$news_title=$mydata[0];	
	$link=$mydata[3];
	if($mydata[7]=='top_stories') {
	 echo   '<li class="list-group-item"><a href="'.$link.'">'.$news_title.'</a></li>';
	}
	}
	
  ?>
</ul> 
</div> 