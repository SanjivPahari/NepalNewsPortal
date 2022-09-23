<?PHP
function video_content ($title,$link,$image,$height,$width) {
	return '
        <a target="_blank" href="'.$link.'">
       <img src="'.$image.'" alt="'.$title.'" height="'.$height.'" width="'.$width.'" style="max-width: 100%; "> </a>	
       <h6 class="card-title"> <a target="_blank" href="'.$link.'">'.$title.'</a></h6>   
       ';
}

function long_content ($title,$description,$link,$publisher,$date,$image,$height,$width) {
	
	$titlex=substr($title,0,50);
	if(strlen($title)>50) { $titlex.=' .....'; }
	
	$descriptionx=substr($description,0,150);
	if(strlen($description)>150) { $descriptionx.=' .....'; }
	
return '<div class="list-group">
      <a href="'.$link.'" class="list-group-item list-group-item-action flex-column align-items-start" target="_blank">
    <div class="row">	
	<div class="col-md-3">
	 <img src="'.$image.'" alt="'.$titlex.'" height="'.$height.'" width="'.$width.'" style="max-width: 100%; ">
	 </div>
	 <div class="col-md-9">
	 <b>'.$titlex.'</b>
	 <br>
	 <small class="text-muted"><p>'.$descriptionx.'</p> </small>
     <div class="row">
      <div class="col-md-6">
	<small>'.$publisher.'</small>
		</div>
		<div class="col-md-6" align="right">
		<small>'.$date.'</small>
		</div>
	   </div>
	 </div>
	</div>
  </a>
</div>';

}


function search_content ($title,$description,$link,$publisher,$date,$image,$height,$width) {
	
	if($image=='') {
		$image='/img/icon.png';
	}
	$titlex=substr($title,0,100);
	if(strlen($title)>100) { $titlex.=' .....'; }
	
	$descriptionx=substr($description,0,350);
	if(strlen($description)>350) { $descriptionx.=' .....'; }
	
return '<div class="list-group">
      <a href="'.$link.'" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="row">	
	<div class="col-md-2">
	 <img src="'.$image.'" alt="'.$titlex.'" height="'.$height.'" width="'.$width.'" style="max-width: 100%; ">
	 </div>
	 <div class="col-md-10">
	 <b>'.$titlex.'</b>
	 <br>
	 <small class="text-muted"><p>'.$descriptionx.'</p> </small>
     <div class="row">
      <div class="col-md-6">
	<small>'.$publisher.'</small>
		</div>
		<div class="col-md-6" align="right">
		<small>'.$date.'</small>
		</div>
	   </div>
	 </div>
	</div>
  </a>
</div>';

}


function recent_content ($title,$description,$link) {
	
	$titlex=substr($title,0,60);
	if(strlen($title)>60) { $titlex.=' .....'; }
	
	$descriptionx=substr($description,0,140);
	if(strlen($description)>140) { $descriptionx.=' .....'; }
	
return '<div class="col-md-3">	
<div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header"><a href="'.$link.'" target="_blank"><b>'.$titlex.'</b></a></div>
  <div class="card-body">
    <a href="'.$link.'"  target="_blank"><p class="card-text">'.$descriptionx.'</p></a>
  </div>
</div>
	</div>';
}

function topic_content ($break,$topic,$title,$description,$image,$link,$news_list) {
	
	$titlex=substr($title,0,60);
	if(strlen($title)>60) { $titlex.=' .....'; }
	
	$descriptionx=substr($description,0,140);
	if(strlen($description)>140) { $descriptionx.=' .....'; }
	
	$news_list_final='';
	
	foreach ($news_list as $info) {
$news_list_final.='<a href="'.$info[1].'" class="list-group-item list-group-item-action"  target="_blank">'.$info[0].'</a>';
	}
	
	
return '
<div class="col-md-4">
'.$break.'
<div class="card"  >
<div class="card-body"  >
<h4 class="card-title"><b>'.$topic.'</b></h4>
<hr color="#FF0039" style="height:10px">

  <a target="_blank" href="'.$info[1].'"  target="_blank">
   <img src="'.$image.'" alt="'.$titlex.'" height="auto" width="400" style="max-width: 100%; "> 
   </a>	

   <h4 class="card-title">'.$titlex.'</h4>
    <a href="'.$link.'" target="_blank"><h6 class="card-subtitle mb-2 text-muted">'.$descriptionx.'</h6></a>
	
<div class="list-group">
'.$news_list_final.'
</div>

</div>
</div>
</div>';

}

function large_content ($title,$description,$image,$link,$publisher,$date) {
	
	$titlex=substr($title,0,150);
	if(strlen($title)>150) { $titlex.=' .....'; }
	
	$descriptionx=substr($description,0,200);
	if(strlen($description)>200) { $descriptionx.=' .....'; }
	
return '<div class="card">
  <div class="card-body">
    <h4 class="card-title">'.$titlex.'</h4>
	'.$publisher.' | '.$date.'
	
	 <a href="'.$link.'" target="_blank"> <img src="'.$image.'" alt="'.$titlex.'" style="max-width: 100%; "> </a>
	  <br>
    <p class="card-text">'.$descriptionx.'</p>
    
	
	 
	<div class="row">
	
	
	<div class="col-md-12" align="right">
	<a href="'.$link.'" target="_blank" class="btn btn-danger btn-sm">Read more...</a>
	</div>
	
	</div>
	
	
  </div>
</div> ';

}

function small_content ($break,$title,$image,$link,$publisher,$tags) {
	
	$titlex=substr($title,0,150);
	if(strlen($title)>150) { $titlex.=' .....'; }
	
	$tags_final='';
	
	if ($tags!='') {
	foreach ($tags as $tag_title) {
$tags_final.='<span class="badge badge-success">'.$tag_title.'</span> ';
	}
	}
	
	
	

return '<div class="col-md-6">'.$break.'<div class="list-group">
  <a href="'.$link.'"  target="_blank" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <img src="'.$image.'" alt="'.$titlex.'" style="max-width: 100%; " height="200px"> 
    </div>
    <p class="mb-1">'.$titlex.'</p>
    <small class="text-muted">'.$publisher.' | '.$tags_final.'</small>
  </a>
</div></div>';


}

?>