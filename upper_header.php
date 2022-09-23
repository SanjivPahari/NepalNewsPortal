<h1><span class="ico-large <?PHP echo $icon; ?>"> <?PHP echo $title; ?> </h1>

<div class="row">
<div class="col-md-6">
 <h3 class="text-muted"><?PHP echo $description; ?> </h3> 
 </div>
 <div class="col-md-6">
<div class="row no-gutters ">
<div class="col">

<input class="form-control form-control-md form-control-borderless" id="myInput" type="search" placeholder="Search news and videos">
</div>
<div class="col-auto">
<button class="btn btn-md btn-success" ><span class="ico search"></span></button>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".searchx div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
</div>
</div>
</div>

<hr color="#FF0039" style="height:10px">