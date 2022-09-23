<?PHP
$title="Newsletter";
$icon='newsletter';
$topic='newsletter';
$description='Subscribe to Nepal News Portal Newsletter for fresh news right in your inbox everyday! ';
require($_SERVER['DOCUMENT_ROOT']."/header.php");
?>

<div class="row">


<div class="col-md-12" align="center">
<h1><span class="ico-large newsletter"> Newsletter </h1>
<h3 class="text-muted">Subscribe for fresh news right in your inbox everyday!  </h3> 
<br>

<form method="post">
<div class="col-md-6">
<div class="row no-gutters ">

<div class="col">

<input class="form-control form-control-md form-control-borderless" id="myInput" name="email" type="email" placeholder="Enter your email address !">
</div>
<div class="col-auto">
<button class="btn btn-md btn-success" type="submit"><span class="ico newsletter"></span> SUBSCRIBE ! </button>
</div>

</div>
<?PHP
if(isset($_POST['email'])) {
	echo '<br>';
	if($_POST['email']=='') {
		echo 'Please enter your email address !';
	} else {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			
			
               $myfile = fopen("email_LIST_39293912.txt", "a");
			   
			  $file_open=file_get_contents('email_LIST_39293912.txt');
			  
               if(strpos($file_open,$_POST['email'])==false) {
               fwrite($myfile, "\n". $_POST['email']);
     fclose($myfile);
		echo 'Thank You for Subscribing! '; }
		else {
			echo 'Email already Subscribed! ';
		}
		}
		else {
			echo 'Invalid Email Address! ';
		}
	}
	
}

?>

</div>
</form>



</div>

</div>

<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>