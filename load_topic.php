<?PHP 


$topps=array(
array('Entertainment','entertainment'),
array('Sports','sports'),
array('Politics','politics'),
array('Lifestyle','lifestyle'),
array('International','international'),
array('Economy','economy'),
);

foreach ($topps as $toppi) {
	
	//echo $toppi[1];
	
	$news_listx=array();
	$x=1;
foreach($_SESSION['news_collection'] as $mydata)
{
	
	//echo $mydata[7];
	
	if(strpos($mydata[8],$toppi[1])==true) {
		
		echo $mydata[0];
		
	if($x==1) {
		$news_title=$mydata[0];
		$news_description=$mydata[1];
		$image=$mydata[2];
		$link=$mydata[3];
		
	} else {
	array_push($news_listx,array($mydata[0],$mydata[3]));
	}
	
	$x++;
	
	
	}
	
	//if($x==6) {
	//	break;
	//}
	
}

//print_r($news_listx).'<hr>';
echo topic_content ('',$toppi[0],$news_title,$news_description,$image,$link,$news_listx);

}

?>