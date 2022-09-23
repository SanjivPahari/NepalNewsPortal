<?PHP

	if(!isset($_SESSION)) {
session_start();
	}

	if(isset($_SESSION['username'])) {	
    header("Location: /admin/panel.php");
	die();
}

if(isset($_POST['submit'])) {
							
######################################################

    if(empty($_POST['Username']))
    {
        Echo "Username is empty! <br> ";
    } 
	elseif(empty($_POST['Password']))
    {
        echo "Password is empty! <br> ";
    } else {
    
    $username = trim($_POST['Username']);
    $password = trim($_POST['Password']);
    
    if($username=='Sanjivv'&&$password=='PASSWORD')
    {
    
    session_start();
    
    $_SESSION['username'] = $username;

	 
    header("Location: /admin/panel.php");
	}
	 else {
		echo 'Unable to Login ! <br>';
	}
	}
######################################################
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
<h1> Admin Login </h1>
<br>

<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				
				<hr>

  <form role="form" method="post" >
						<div class="form-group">
							 
							<label for="Username">
								Username
							</label>
							<input class="form-control" name="Username" placeholder="Enter Username..." value="<?PHP if(isset($_POST['Username'])) { echo $_POST['Username']; } ?>">
						</div>
						<div class="form-group">
							 
							<label for="Password">
								Password
							</label>
							<input type="password" class="form-control" name="Password" placeholder="Enter Password..." value="<?PHP if(isset($_POST['Password'])) { echo $_POST['Password']; } ?>">
						</div>
						
					
						<button type="submit" class="btn btn-primary" name="submit">
						 Submit
						</button>
						
						
						
						
					</form>
  

					
					
					
				</div>
				<div class="col-md-4">
				</div>
			</div>



</div>

</div>

<?PHP
require($_SERVER['DOCUMENT_ROOT']."/footer.php");
?>