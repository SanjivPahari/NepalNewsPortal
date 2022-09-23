<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	
	<?PHP
	$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	while ($data[2]=='') {
		$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	}
	?>
	<a href="<?PHP echo $data[3]; ?>">
      <img class="d-block w-100" height="300" src="<?PHP echo $data[2]; ?>" alt="First slide">
	  </a>
	    <div class="carousel-caption ">
    <h5><?PHP echo $data[0]; ?></h5>
    <p><?PHP echo $data[4]; ?></p>
	
  </div>
  
    </div>
	
  <div class="carousel-item">
	
	<?PHP
	$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	while ($data[2]=='') {
		$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	}
	?>
	<a href="<?PHP echo $data[3]; ?>">
      <img class="d-block w-100" height="300" src="<?PHP echo $data[2]; ?>" alt="First slide">
	  </a>
	    <div class="carousel-caption ">
    <h5><?PHP echo $data[0]; ?></h5>
    <p><?PHP echo $data[4]; ?></p>
	
  </div>
  
    </div>
	
	  <div class="carousel-item ">
	
	<?PHP
	$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	while ($data[2]=='') {
		$data=$_SESSION['news_collection'][array_rand($_SESSION['news_collection'])];
	}
	?>
	<a href="<?PHP echo $data[3]; ?>">
      <img class="d-block w-100" height="300" src="<?PHP echo $data[2]; ?>" alt="First slide">
	  </a>
	    <div class="carousel-caption ">
    <h5><?PHP echo $data[0]; ?></h5>
    <p><?PHP echo $data[4]; ?></p>
	
  </div>
  
    </div>
	
	
	
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>