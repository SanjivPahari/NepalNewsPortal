<?PHP
require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

<hr>
<h1>Search: <?PHP echo $search; ?></h1>
<hr>
<div class="card border-success">
  <div class="card-body">
  
  <?PHP
  foreach($_SESSION['news_collection'] as $mydata)
{
if(strpos(strtolower($mydata[0]),strtolower($search))==true||strpos(strtolower($mydata[1]),strtolower($search))==true) {
	$news_title=$mydata[0];	
	$news_description=$mydata[1];
	$image=$mydata[2];
	$link=$mydata[3];
	$publisher=$mydata[4];
	$date=$mydata[5];
	
		echo search_content($news_title,$news_description,$link,$publisher,$date,$image,100,150).'<br>';
	
}
}
?>

<ul class="list-group">
   <script>
  (function() {
    var cx = '';
   var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
</ul>

  </div>
</div>


	

<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>