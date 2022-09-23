<hr color="red">
			  <button type="button" onclick="heading()" class="btn btn-info btn-sm">Heading</button>
			   - 
    <button type="button" onclick="actions('underline')" class="btn btn-info btn-sm"><u>Underline</u></button>
		  <button  type="button" onclick="actions('italic')" class="btn btn-info btn-sm"><i>Italics</i></button>
	  	  <button  type="button" onclick="actions('bold')" class="btn btn-info btn-sm"><b>Bold</b></button>
		  	  <button  type="button" onclick="actions('insertHorizontalRule')" class="btn btn-info btn-sm">HR</button>

			   - 
			   <button  type="button" onclick="foreColor('red')" class="btn btn-info btn-sm">Red Text</button>
			    <button  type="button" onclick="foreColor('blue')" class="btn btn-info btn-sm">Blue Text</button>
			     <button  type="button" onclick="foreColor('black')" class="btn btn-info btn-sm">Black Text</button>
		  - 
    <button  type="button" onclick="link()" class="btn btn-info btn-sm">Link</button>
	    <button  type="button" onclick="image()" class="btn btn-info btn-sm">Image</button>
				  	  <button  type="button" onclick="actions('insertUnorderedList')" class="btn btn-info btn-sm">Bullet List</button>
					  	  <button  type="button" onclick="actions('insertOrderedList')" class="btn btn-info btn-sm">Number List</button>
 - 
<button  type="button" onclick="actions('justifyLeft')" class="btn btn-info btn-sm">Left</button>
	    <button  type="button" onclick="actions('justifyCenter')" class="btn btn-info btn-sm">Center</button>
			    <button  type="button" onclick="actions('justifyRight')" class="btn btn-info btn-sm">Right</button>
		 - 
		 <button  type="button" onclick="actions('removeFormat')" class="btn btn-info btn-sm">Clear Formatting</button>
		 		 <button  type="button" onclick="actions('undo')" class="btn btn-info btn-sm">Undo</button>
				 	 <button  type="button" onclick="actions('redo')" class="btn btn-info btn-sm">Redo</button>
		  - 
    <button  type="button" onclick="displayhtml()" class="btn btn-success btn-sm">Display HTML</button>
	
  
<br><br>
	 <div class="card border-dark">
	 <div type="input" class="card-body" id="editor" name="editor" rows="3" contenteditable="true" spellcheck="false">
        <?PHP if(isset($content)) { echo $content; } ?>
		</div>
		</div>
		
<br><br>

      <textarea id="hidden_information" name="hidden_information" hidden></textarea>
	  
   <div class="card text-black bg-light">
  <div class="card-body" id="htmloutput">
        <pre id="">
        </pre>
    </div>
	</div>

<script>
    window.addEventListener("load", function(){
        
        if(document.contentEditable != undefined && document.execCommand != undefined)
       {
           alert("HTML5 Document Editing API Is Not Supported");
        }
        else
        {
            document.execCommand('styleWithCSS', false, true);
        }
    }, false);
    

    function actions(n)
    {
        document.execCommand(n, false, null);
    }
			  	 
			function foreColor(n)
	{
		document.execCommand("foreColor", false, n);
	}
	
	function heading(){
		document.execCommand("formatBlock", false, '<h2>');
	}

	
	
    function link()
    {
        var url = prompt("Enter the URL");
        document.execCommand("createLink", false, url);
    }
    
		
    function image()
    {
        var url = prompt("Enter the Image URL");
        document.execCommand("insertImage", false, url);
    }
 
    function displayhtml()
    {
        document.getElementById("htmloutput").textContent = document.getElementById("editor").innerHTML;
    }
</script>
<hr color="red">
