<?PHP
require($_SERVER['DOCUMENT_ROOT'].'/config.php');
require($_SERVER['DOCUMENT_ROOT'].'/bootstrap.php');
require($_SERVER['DOCUMENT_ROOT']."/functions.php");
require($_SERVER['DOCUMENT_ROOT']."/db-connect.php");
require($_SERVER['DOCUMENT_ROOT']."/scrapping_functions.php");

if(dirname($_SERVER['PHP_SELF'])=='/search') {
	if(!isset($_GET['q'])||$_GET['q']==''||$_GET['q']==' ') {
	$search='news';
}
 else {
$search=htmlspecialchars(htmlentities(trim(Protect_Search($_GET['q']))));
}
$title="Search : ".$search;
}

if(isset($_GET['id'])&&$_GET['id']!==''&&dirname($_SERVER['PHP_SELF'])=='/article') {
$id=htmlspecialchars(htmlentities(trim(Protect_Search($_GET['id']))));
$title='Latest & Trending Articles!';

$query="SELECT * FROM `news_main` WHERE `id` = '".$id."'";
	$result = $connect_news->query($query);
	$row = $result->fetch_assoc();
	if ($row==true) {
		$title=$row['title'];
		$description=substr($row['text'],0,100).'...';
	}
}

if(!isset($description)) {
$description='Latest & Trending News from Nepal';	
}
if(!isset($title)) {
$title='Latest & Trending News from Nepal';	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?PHP echo $title; ?> | Nepal News Portal </title> 
<meta name="keywords" content="nepal, news, online, portal, aggregator, fresh, latest, trending">
<meta name="description" content="<?PHP echo $description; ?>"> 
<meta name="author" content="NepalNewsPortal">
<meta property="og:url" content="http://nepalnewsportal.com<?PHP echo dirname($_SERVER['PHP_SELF']); ?>">
<meta property="og:title" content="<?PHP echo $title; ?> | Nepal News Portal " />
<meta property="og:description" content="<?PHP echo $description; ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Nepal News Portal" />
<link rel="canonical" href="http://nepalnewsportal.com<?PHP echo dirname($_SERVER['PHP_SELF']); ?>">
<meta name="Robots" content="index, follow">
<link rel="shortcut icon" href="/img/icon.png" type="image/png">
<link rel="icon" type="image/x-icon" href="http://nepalnewsportal.com/img/icon.png"> 
<link href="/css/bootstrap.css" rel="stylesheet"> 
<link href="/css/dashboard.css" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bbd9a8bb2b6bd00118b8ae9&product=inline-share-buttons' async='async'></script>
</head>
<body >
<!--INFOLINKS_OFF-->
<noscript>  
<p style="color:red;">
To be able to use this site correctly. You need to enable javascript in your browser.
</p>
</noscript>
<?PHP
require(__DIR__.'/header_nav.php');
?>
<br><br><br><br>
<!-- Modal -->
<div class="modal fade" id="moreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <span class="ico more"></span> More</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
                <a class="dropdown-item" href="/e-papers"> <span class="ico epaper"></span> E-Papers</a>
               
                <a class="dropdown-item" href="/e-radio"> <span class="ico eradio"></span> E-Radio</a>
				
				  <a class="dropdown-item" href="/newsletter"> <span class="ico newsletter"></span> Newsletter</a>
				
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<div class="container-fluid">

<div class="row">

<div class="col-md-12">

<div class="row">
<div class="col-md-10">
<div class="alert alert-dismissible badge-warning">
<marquee>
   <?PHP 
   

foreach($_SESSION['news_collection'] as $mydata)
{

	$news_title=$mydata[0];	
	$link=$mydata[3];
	if($mydata[7]=='marquee') {
	 echo   '<a style="color : #FFFFFF;" href="'.$link.'">'.$news_title.'</a> | ';
	}
	}
	
  ?>
 
</marquee>
 </div>
 </div>
 <div class="col-md-2">
<div class="alert alert-dismissible badge-danger" id="date" style="height: 75%; text-align: center; font-size:15pt;">

</div>
<script>
var d = new Date();
document.getElementById("date").innerHTML = d.toDateString();
</script>
</div>
</div>


<br>