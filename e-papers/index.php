<?PHP
$title="E-Papers";
$icon='e-papers';
$topic='e-papers';
$description='Get access to all the latest e-papers ! ';
require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>
<h1><span class="ico-large epaper"> E-Papers </h1>

<div class="row">
<div class="col-md-6">
 <h3 class="text-muted">Get access to all the latest e-papers ! </h3> 
 </div>
 <div class="col-md-6">
<div class="row no-gutters ">
<div class="col">

<input class="form-control form-control-md form-control-borderless" id="myInput" type="search" placeholder="Search e-paper">
</div>
<div class="col-auto">
<button class="btn btn-md btn-success" ><span class="ico search"></span></button>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#data div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
</div>
</div>
</div>
							
 <hr color="#FF0039" style="height:10px">

<div class="row">

<div class="col-md-12">

<ul class="nav nav-pills nav-justified">
  <li class="nav-item">
    <a class="nav-link  active show" data-toggle="tab" href="#daily">Daily Newspaper</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-toggle="tab" href="#magazine">Magazine</a>
  </li>
  
</ul>
<hr>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active show" id="daily">
  <div class="row" id="data">
  
<?PHP

$kantipur=Send_Request('http://epaper.ekantipur.com/');

$page_list=array(
0=>array('<section id="Kantipur"  class="kantipur">','Kantipur'), 
1=>array('<span class="anchor" id="TheKathmanduPost-anchor">','The Kathmandu Post'), 
2=>array('<span class="anchor" id="Saptahik-anchor">','Saptahik'), 
);


foreach($page_list as $key=>$info) {
	
	
	$kantipurx=Explode_Out($info[0],'<div class="jcarousel-wrapper">',$kantipur);
$thumb=Explode_Out('data-original="','"',$kantipurx);
$date=Explode_Out('<span class="date">','</span>',$kantipurx);
$link=Explode_Out('href="','"',$kantipurx);
	
	 echo '<div class="col-md-3" align="center">
	 <a href="'.$link.'"  target="_blank"><img src="'.$thumb.'" height="200px" width="auto" align="center"><br>'.$info[1].' <br>'.$date.'</a>
	 </div>'; 
	 
	
}

$nagarik=Send_Request('http://epaper.nagariknetwork.com/nagarik/src/index.php');

$nagarikx=Explode_Out('<h4 class="text-default"><b>NAGARIK E-PAPER</b></h4></div>','<div class="panel-footer">',$nagarik);
$link=Explode_Out('<a href = "','"',$nagarikx);
$date=Explode_Out($link.'">','</a>',$nagarikx);
$thumb=Explode_Out('src ="','"',$nagarikx);


	
	 echo '<div class="col-md-3" align="center">
	 <a href="'.$link.'"  target="_blank"><img src="'.$thumb.'" height="200px" width="auto" align="center"><br>'.$date.'</a>
	 </div>'; 
	 
	  echo '</div><br><div class="row">';	
	
	  // ANNAPURNA
	 
 $annapurna=Send_Request('https://epaper.amn.media/');

$annapurnax=Explode_Out('<a href="/annapurnapost-detail/','</a>',$annapurna);
$thumb=Explode_Out('<img src="','"',$annapurnax);
$date=Explode_Out('data-date="','"',$annapurnax);
$link=Explode_Out('<a href="/annapurnapost-detail/','">',$annapurna);
	
	 echo '<div class="col-md-3" align="center">
	 <a href="https://epaper.amn.media/annapurnapost-detail/'.$link.'"  target="_blank"><img src="https://epaper.amn.media/'.$thumb.'" height="200px" width="auto" align="center"><br> ANNAPURNA <br> '.$date.'</a>
	 </div>'; 
	 
	 
	
	 
	
	 
	
	 
	 
	

	 $annapurnax=Explode_Out('<a href="/annapurnaexpress-detail/','</a>',$annapurna);
$thumb=Explode_Out('<img src="','"',$annapurnax);
$date=Explode_Out('<time>','</time>',$annapurnax);
$link=Explode_Out('<a href="/annapurnaexpress-detail/','">',$annapurna);
	
	 echo '<div class="col-md-3" align="center">
	 <a href="https://epaper.amn.media/annapurnaexpress-detail/'.$link.'"  target="_blank"><img src="https://epaper.amn.media/'.$thumb.'" height="200px" width="auto" align="center"><br> Annapurna Express <br> '.$date.'</a>
	 </div>'; 

	 
	   echo '<div class="col-md-3" align="center">
	 <a href="http://epaper.himalayadarpan.com/index.aspx"  target="_blank"><img src="http://epaper.himalayadarpan.com/publications/HD/HD/todayspage/todaysthumbimage.jpg" height="200px" width="auto" align="center"><br>HIMALAYAN DARPAN</a>
	 </div>'; 
	 
	 
	 
	  $annapurnax=Explode_Out('<a href="/annapurnasampurna-detail/','</a>',$annapurna);
$thumb=Explode_Out('<img src="','"',$annapurnax);
$date=Explode_Out('data-date="','"',$annapurnax);
$link=Explode_Out('<a href="/annapurnasampurna-detail/','">',$annapurna);
	
	 echo '<div class="col-md-3" align="center">
	 <a href="https://epaper.amn.media/annapurnasampurna-detail/'.$link.'"  target="_blank"><img src="https://epaper.amn.media/'.$thumb.'" height="200px" width="auto" align="center"><br> Sampurna <br> '.$date.'</a>
	 </div>'; 
	 
	  echo '</div><br><div class="row">';	
	 
	  //SHUKRABAR
	 $nagarik=Send_Request('http://epaper.nagariknetwork.com/nagarik/src/shukrabar.php');

$nagarikx=Explode_Out('<h4 class="text-default"><b>SHUKRABAR E-PAPER</b></h4></div>','<div class="panel-footer">',$nagarik);
$link=Explode_Out('<a href = "','"',$nagarikx);
$date=Explode_Out($link.'">','</a>',$nagarikx);
$thumb=Explode_Out('src ="','"',$nagarikx);


	
	 echo '<div class="col-md-3" align="center">
	 <a href="'.$link.'" target="_blank"><img src="'.$thumb.'" height="200px" width="auto" align="center"><br>'.$date.'</a>
	 </div>'; 
	 
	 


?>
</div>
</div>
<div class="tab-pane fade" id="magazine">
<div class="row" id="data">

<?PHP


$page_list=array(
0=>array('<span class="anchor" id="Nepal-anchor">','NEPAL'), 
1=>array(' <span class="anchor" id="Nari-anchor">','NARI'), 

);

foreach($page_list as $key=>$info) {

	
	$kantipurx=Explode_Out($info[0],'<div class="jcarousel-wrapper">',$kantipur);
$thumb=Explode_Out('data-original="','"',$kantipurx);
$date=Explode_Out('<span class="date">','</span>',$kantipurx);
$link=Explode_Out('href="','"',$kantipurx);
	
	 echo '<div class="col-md-3" align="center">
	 <a href="'.$link.'" ><img src="'.$thumb.'" height="200px" width="auto" align="center"><br>'.$info[1].' <br>'.$date.'</a>
	 </div>'; 
	 
	

}

 // PARIWAR
	  $nagarik=Send_Request('http://epaper.nagariknetwork.com/nagarik/src/pariwar.php');

$nagarikx=Explode_Out('<h4 class="text-default"><b>Nagarik Pariwar E-PAPER</b></h4></div>','<div class="panel-footer">',$nagarik);
$link=Explode_Out('<a href = "','"',$nagarikx);
$date=Explode_Out($link.'">','</a>',$nagarikx);
$thumb=Explode_Out('src ="','"',$nagarikx);


	
	 echo '<div class="col-md-3" align="center">
	 <a href="'.$link.'" ><img src="'.$thumb.'" height="200px" width="auto" align="center"><br>'.$date.'</a>
	 </div>'; 
	 
	 
	 

?>	
	</div>
	</div>
	


</div>
</div>
<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>