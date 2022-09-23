<?PHP

require($_SERVER['DOCUMENT_ROOT']."/header.php");

	if (isset($row)&&$row==true) {
		
	
?>

<div class="row">


<div class="col-md-8">
<div class="sharethis-inline-share-buttons"></div>
<br>
<div class="card">
  <div class="card-body">
    <h4 class="card-title"><?PHP echo $row['title']; ?></h4>
	
	  <img src="<?PHP echo $row['thumbnail']; ?>" alt="<?PHP echo $row['title']; ?>" style="max-width: 100%; ">
	  <br> <br>
    <h6 class="card-subtitle mb-2 text-muted">
	<?PHP 
	$str_arr = preg_split ("/\,/", $row['tags']);  
	foreach ($str_arr as $key) {
		echo '<span class="badge badge-success">'.$key.'</span> ';
	}
	?>
	
	
	<br></h6>
	<hr>
    <p class="card-text"><?PHP echo $row['text']; ?></p>
    
	
	 
	<div class="row">
	
	</div>
	<div class="row">
	<div class="col-md-12">
	
	<div class="card-footer text-muted">
	Date of Publication: <?PHP echo $row['date']; ?> </a> 
	</div>
	
	<?PHP
	 if(isset($_SESSION['username'])) {
  echo '<br>
 <form action="/admin/panel.php" method="post" target="_blank">
 <input name="edit_article" type="hidden" value="'.$row['id'].'"/>
 <button type="danger" class="btn btn-outline-danger">Edit</button>
 </form> ';
  }
	?>
	</div>
	</div>
	
	
  </div>
</div>

<br>
<div class="sharethis-inline-share-buttons"></div>
<br>
<div id="disqus_thread"></div>
<script>
(function() { 
var d = document, s = d.createElement('script');
s.src = 'https://nepalnewsportal.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
</div>

<div class="col-md-4">
 <?PHP $topic=''; require($_SERVER['DOCUMENT_ROOT']."/load_best_content.php"); ?>
</div>

</div>


<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
} 
else {
	$title='Latest & Trending Articles!';
	$topic='';
	require($_SERVER['DOCUMENT_ROOT']."/mid_content.php");
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
}

?>