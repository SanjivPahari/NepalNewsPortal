<h1> 
EDIT ARTICLE
</h1>
<hr color="#00B1FE" style="height:5px">
				 


<?PHP
if(isset($_POST['edit_article'])||isset($_POST['edit_article_update'])) {

	
	$id=Protect($_POST['edit_article']);
	$query="SELECT * FROM `news_main` WHERE `id` = '".$id."'";
	$result = $connect_news->query($query);
	if ($result->num_rows <= 0) {
    echo 'ARTICLE NOT FOUND !';
     goto last;
	}
	 $row = $result->fetch_assoc();
?>
<div class="row" >
<div class="col-md-12" > 
<form  method="post" name="myform">

<div class="form-group">
<label class="col-form-label col-form-label-lg" for="inputLarge">Title</label>
<input class="form-control form-control-lg" type="text" placeholder="Title" name="title" value="<?PHP echo $row['title']; ?>">
</div>

<div class="row">
<div class="col-md-10" > 

<div class="form-group">
<label class="col-form-label col-form-label-lg" for="inputLarge">Thumbnail</label>
<input class="form-control form-control-lg" type="text" onKeyup="trackChange(this.value)" placeholder="Thumbnail Link" name="thumbnail" value="<?PHP echo $row['thumbnail']; ?>" id="thumbnail"> 
</div>

<div class="form-group">
<label class="col-form-label col-form-label-lg" for="inputLarge">Tags</label>
<input class="form-control form-control-lg" type="text" placeholder="Tags : Seperate each by comma" name="tags" value="<?PHP echo $row['tags']; ?>">
</div>

</div>
<div class="col-md-2" > 
 <img src="<?PHP echo $row['thumbnail']; ?>" alt="<?PHP echo $row['title']; ?>" height="200" width="200" id="thumb">
 
 <script type='text/javascript'>
function trackChange(value)
{
          var imgfilename = document.getElementById("thumbnail").value;;

          // Set your file name
          $('#thumb').attr('src', imgfilename);
    }
</script>

 </div>
 </div>

			
<?PHP
$content=$row['text'];
require("editor.php");
?>


<br>
<input name="edit_article" value="<?PHP echo $id; ?>" hidden />
<input name="edit_article_update" hidden />
<button type="button" onclick="submitform()" class="btn btn-primary" name="submit_update_edit" id="submit_update_edit">
Update Edit
</button>							
</form>
                  
				
				
</div></div><br><br>
<?PHP
}
last:
?>
<script>
 function submitform()
        {
			
        var mysave = $('#editor').html();
        $('#hidden_information').val(mysave);
		document.myform.submit();
	}
	
</script>

