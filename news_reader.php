<?PHP
require($_SERVER['DOCUMENT_ROOT']."/header.php");
$x=Send_Request('http://kathmandupost.ekantipur.com/getapptrendingbysite');
$newslist=json_decode($x);
foreach($newslist as $mydata)
{
	$title=$mydata->title;
	}

?>