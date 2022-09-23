<?PHP 

foreach($_SESSION['news_collection'] as $mydata)
{
	
	$news_title=$mydata[0];	
	$news_description=$mydata[1];
	$image=$mydata[2];
	$link=$mydata[3];
	$publisher=$mydata[4];
	$date=$mydata[5];
	
	if($mydata[7]=='long_content') {
		
if($topic!=='all') {
	if($mydata[8]==$topic) {
		echo long_content($news_title,$news_description,$link,$publisher,$date,$image,100,150).'<br>';
	}
	
} else {
		echo long_content($news_title,$news_description,$link,$publisher,$date,$image,100,150).'<br>';
	}
}
}
?>