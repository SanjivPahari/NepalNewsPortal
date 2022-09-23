<?PHP 
foreach($_SESSION['news_collection'] as $mydata)
{

	$news_title=$mydata[0];	
	$news_description=$mydata[1];
	
	$link=$mydata[3];
	
	if($mydata[7]=='recent_content') {
		
		if($topic!=='all') {
	if($mydata[8]==$topic) {
		echo recent_content($news_title,$news_description,$link).'<br>';
	} 
	
		} else {
		echo recent_content($news_title,$news_description,$link).'<br>';
	}
	
	}
	
}
?>