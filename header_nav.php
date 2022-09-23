<nav class="navbar navbar-expand-lg  navbar-toggleable-md  fixed-top navbar-dark bg-primary">

<a class="navbar-brand" href="/"><img  src="/img/icon.png" alt="Logo" width="50" height="50"> Nepal News Portal</a>

<button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault"> 
<ul class="navbar-nav mr-auto">
     
      <li class="nav-item <?PHP if(strrpos(dirname($_SERVER['PHP_SELF']),'trending')==true) { echo 'active'; } ?>">
        <a class="nav-link" href="/trending"> <span class="ico trending"></span> Trending</a>
      </li>
     
	  <li class="nav-item">
        <a class="nav-link" href="/politics"> <span class="ico politics"></span> Politics</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="/economy"> <span class="ico economy"></span> Economy</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="/sports"> <span class="ico sports"></span> Sports</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="/lifestyle"> <span class="ico lifestyle"></span> Lifestyle</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="/entertainment"> <span class="ico entertainment"></span> Entertainment</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="/international"> <span class="ico international"></span> International</a>
      </li>
	  
	  
	     <li class="nav-item">
<a  class="nav-link" data-toggle="modal" data-target="#moreModal">
 <span class="ico more"></span> More
</a>
</li>

	  
</ul>	

<form class="form-inline my-2 my-lg-0" action="/search/" method="get">	 
<input class="form-control mr-sm-2" type="search" placeholder="Enter Keyword" name="q" value="<?PHP if(isset($_GET['q'])&&$_GET['q']!=='') { echo $search; } ?>">    
<?PHP
echo SubmitButton('Search','','search','search.png','normal_size','info','normal','enabled','').' &nbsp; &nbsp; ';
?>  
</form>

</div>



</nav>