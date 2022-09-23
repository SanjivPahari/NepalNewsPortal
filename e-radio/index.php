<?PHP
$title="E-Radio";
$icon='e-radio';
$topic='e-radio';
$description='Tune in to all your favourite online radio stations ! ';
require($_SERVER['DOCUMENT_ROOT']."/header.php");
require('radio_list.php');
?>
<h1><span class="ico-large radio"> E-Radio </h1>

<div class="row">
<div class="col-md-6">
 <h3 class="text-muted">Tune in to all your favourite online radio stations ! </h3> 
 </div>
 <div class="col-md-6">
<div class="row no-gutters ">
<div class="col">

<input class="form-control form-control-md form-control-borderless" id="myInput" type="search" placeholder="Search radio stations">
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
    <a class="nav-link" data-toggle="tab" href="#local">Local</a>
  </li>
  <li class="nav-item">
    <a class="nav-link  active show" data-toggle="tab" href="#national">National</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#international">International</a>
  </li>
  
</ul>
<hr>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade " id="local">
  

  <?PHP echo list_radio('local'); ?>

  </div>
  <div class="tab-pane fade active show" id="national">
  
    <?PHP echo list_radio('national'); ?>  
	</div>
  <div class="tab-pane fade" id="international">
 
     <?PHP echo list_radio('international'); ?>
	 </div>
</div>

<?PHP

function list_radio($type) {
	echo '<div class="row" id="data">';
	global $radio_list;
$xx=0;
foreach($radio_list as $key=>$info) {
	if ($info[4]==$type) {
	$xx++;
	
	
	
	if($xx>3) {
	echo '</div><br><div class="row" id="data">';
	
	$xx=1;
	}
	 echo '<div class="col-md-4" >
	      <div class="card">
          <div class="card-body">
          <h4 class="card-title">
		 <img src="/img/logos/'.$info[3].'" height="50px" width="auto"> '.$info[0].'
		 </h4>
         <hr>
		 
		 <audio controls="false" src="'.$info[2].'"></audio>
		 <div class="card-footer text-muted">
         URL: <a href="'.$info[1].'" target="_blank">'.$info[1].'</a>
		 </div>
		 </div>
		 </div>
		 </div>'; 
		 


	
	
}
}
echo '</div>';
}

?>

</div>
</div>

<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>