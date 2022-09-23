<?PHP

session_start();
if(isset($_GET['logout'])) {
	session_destroy();
	session_start();
}
if(!$_SESSION['username']) {	
    header("Location: /admin");
	die();
}
?>
						
<?PHP
$title="Admin";
$topic='all';
$description='Get all latest and trending news all over from Nepal! ';
require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

  
<div class="row">


<div class="col-md-12" align="center">
<h1> Welcome Admin ! </h1>
<hr>
<br>
</div>
</div>

<div class="row">
				<div class="col-md-6" >
				<h1> ARTICLES : 
				<?PHP 
				$count="select count(*) from news_main";
	$result = $connect_news->query($count);
	$row=$result->fetch_assoc();
	echo $row['count(*)'];
				?>
				</h1>
				 <hr color="#00B1FE" style="height:5px">
				 
				 	<?PHP 
				$query="SELECT * FROM `news_main`";
	$result = $connect_news->query($query);
	 while($row = $result->fetch_assoc()) {
		 
		$news_title=$row['title'];	
	$news_description=$row['text'];
	$image=$row['thumbnail'];
	if($image=='') {
	$image='/img/icon.png';
	} 
	$link='/article/?id='.$row['id'];
	$publisher='Nepal News Portal';
	$date=$row['date'];
	
		echo search_content($news_title,$news_description,$link,$publisher,$date,$image,100,150).'<br>';
	}
				?>
				
				
				</div>
				<div class="col-md-6" >
				<h1> SUBSCRIBERS : 
				<?PHP 
				$file_name=$_SERVER['DOCUMENT_ROOT'].'/newsletter/email_LIST_39293912.txt';
				
				echo count(file($file_name)); 
				?>
				</h1>
				 <hr color="#00B1FE" style="height:5px">
				 <div class="card bg-light mb-3" ><div class="card-body"><pre><?PHP echo file_get_contents($file_name); ?></pre></div></div>
				</div>
			</div>

			<div class="row" >
			<div class="col-md-12" >
 <?PHP
if(isset($_POST['edit_article'])||isset($_POST['edit_article_update'])) {
require('edit_article.php');
}
?>
</div>
</div>

<hr>


<p class="text-right">
	<button type="button" class="btn btn-outline-danger"><a href="?logout">Logout</a></button>
	</p>

<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>