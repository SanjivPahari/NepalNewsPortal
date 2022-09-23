<?PHP
$title="Log Out ";
	
	
session_start();
session_destroy();	
  
require($_SERVER['DOCUMENT_ROOT']."/header.php");


	
   


?>

<hr>
<div class="card border-danger">
  <div class="card-body">
  <center>
  <img src="/img/lost.png" height="100" width="100">
  <br>
  <h1> <p class="text-success">Loging Out.....</p> </h1>
<h2> Redirecting!</h2>
<h3><a href="/"><button class="btn btn-primary">BACK TO HOME</button></a></h3>

<script> 
window.location="/premium/" 
</script>

</center>
  </div>
</div>
<hr>
<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>