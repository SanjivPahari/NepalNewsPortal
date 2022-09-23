<?PHP

require($_SERVER['DOCUMENT_ROOT']."/container.php");
require($_SERVER['DOCUMENT_ROOT']."/processor.php");

/* Button for Linking */
function LinkButton($Caption,$name,$id,$link,$image,$size,$color,$design,$status,$length)
{
	
	$button='<a class="btn btn';
	
	if($design!==''&&$design=='outline') {
		$button.='-outline';
	} 
	
	if($color!=='') {
		$button.='-'.$color;
	} else {
		$button.='-primary';
	}
	
	if($size=='small') {
		$button.=' btn-sm';
	} elseif ($size=='large') {
		$button.=' btn-lg';
	}
	
	if($length=='long') {
		$button.=' btn-lg btn-block';
	} 
	
	if($status=='disabled') {
		$button.=' disabled';
	}
	
	
	
	$button.='" ';
	
	$button.=' name="'.$name.'" ';
	$button.=' id="'.$id.'" ';
	$button.=' title="'.Protect2($Caption).'" ';
	
	
	$button.=' href="'.$link.'" >';
	
	//if ($image!=='') {
	//$button.='<img src="/img/'.$image.'" height="20" width="20" alt="'.$name.'">';
	
	//}
	
	if ($image!=='') {
		$image=explode('.',$image);
		$image=$image[0];
	$button.='<span class="ico '.$image.'"></span>';
	}
	

	
	$button.=' '.$Caption.' ';
	
	$button.='</a>';
	
	return $button;
}


/* Button for Linking */
function LinkButtonL($Caption,$name,$id,$link,$image,$status)
{
	
	$button='<a class="list-group-item list-group-item-action ';
	


	
	if($status=='disabled') {
		$button.=' disabled';
	}
	
	
	
	$button.='" ';
	
	$button.=' name="'.$name.'" ';
	$button.=' id="'.$id.'" ';
	$button.=' title="'.Protect2($Caption).'" ';
	
	
	$button.=' href="'.$link.'" >';
	
	//if ($image!=='') {
	//$button.='<img src="/img/'.$image.'" height="20" width="20" alt="'.$name.'">';
	//}
	
		if ($image!=='') {
		$image=explode('.',$image);
		$image=$image[0];
	$button.='<span class="ico '.$image.'"></span>';
	}
	
	$button.=' '.$Caption.' ';
	
	$button.='</a>';
	
	return $button;
}

/* Button for Linking */

function SubmitButton($Caption,$name,$id,$image,$size,$color,$design,$status,$onclick)
{
	
	$button='<button type="submit" class="btn btn';
	
	if($design!==''&&$design=='outline') {
		$button.='-outline';
	} 
	
	if($color!=='') {
		$button.='-'.$color;
	} else {
		$button.='-primary';
	}
	
	if($size=='small') {
		$button.=' btn-sm';
	} elseif ($size=='large') {
		$button.=' btn-lg';
	}
	
	if($status=='disabled') {
		$button.=' disabled';
	}
	
	
	$button.='" ';
	
	if($onclick!=='') {
		$button.='onclick="'.$onclick.'();"';
	}
	
	$button.=' name="'.$name.'" ';
	$button.=' id="'.$id.'" ';
	
	$button.=' >';
	
	//if ($image!=='') {
//	$button.='<img src="/img/'.$image.'" height="20" width="20" alt="'.$name.'">';
	//}
	
	if ($image!=='') {
		$image=explode('.',$image);
		$image=$image[0];
	$button.='<span class="ico '.$image.'"></span>';
	}
	
	$button.=' '.$Caption.' ';
	
	$button.='</button>';
	
	return $button;
}


/* Button for CardBoard */

function CardBoard($Header,$image,$title,$text,$color,$design)
{
	
	$cardboard='<div class="card ';
	
	if($design!==''&&$design=='colorful') {
		$cardboard.=' text-white bg-'.$color;
	} else {
		$cardboard.=' border-'.$color;
	}
	
	$cardboard.='" >';
	$im_final='';
	if ($image!=='') {
	//$im_final='<img src="/img/'.$image.'" height="20" width="20" alt="'.$Header.'">';
	
		$image=explode('.',$image);
		$image=$image[0];
	$im_final.='<span class="ico '.$image.'"></span>';
	
	} else {
		$im_final='';
	}
	if ($Header!=='') {
$cardboard.=' <div class="card-header"> '.$im_final.' <b> '.$Header.' </b></div>';
	}
	$cardboard.='<div class="card-body">';
	
	if ($title!=='') {
	$cardboard.='<h4 class="card-title"> '.$title.' </h4>';
	}
	
	if ($text!=='') {
	$cardboard.=' <p class="card-text"> '.$text.' </p>';
	}
	
	$cardboard.='
	';
	
	return $cardboard;
}

function CardBoardEnd()
{
	return '
	</div></div>';
}

/* Button for Input */
function FormInput($NameText,$name,$id,$placeholder,$value,$status)
{
	
	$input='<div class="form-group" >';
	
	
		$input.='<label for="'.$name.'"> <h5> '.$NameText.' </h5></label>';
	
	$input.='<input class="form-control" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'" value="'.$value.'"';
	
	if($status=='disabled') {
		$input.=' disabled="" ';
	}
	$input.= ' >';
	
	
	
	$input.='</div>';
	
	return $input;
}

?>