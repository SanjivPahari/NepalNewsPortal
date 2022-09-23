<?PHP
if(!isset($_SESSION)) {
session_start();
	}
if((!isset($_SESSION['time']))||(($_SESSION['time']+120)<time())) {
$_SESSION['time']=time();

$news_collection=array();
$content_types=array("main_content","sub_content","top_stories","long_content","recent_content","marquee");

#####################################################################
$sitelist=array(
array('https://thehimalayantimes.com/category/entertainment/feed/','entertainment'),
array('https://thehimalayantimes.com/feed/',''),
array('https://thehimalayantimes.com/category/sports/feed/','sports'),
array('https://thehimalayantimes.com/category/nepal/feed/','politics'),
array('https://thehimalayantimes.com/category/world/feed/','international'),
array('https://thehimalayantimes.com/category/lifestyle/feed/','lifestyle'),
array('https://thehimalayantimes.com/category/real-estate/feed/','economy')
);


foreach ($sitelist as $site_info) {
	
$content=Send_Request($site_info[0]);

$xml=simplexml_load_string($content);
$namespaces = $xml->getNamespaces(true);
foreach($xml->channel->item as $mydata)
{


	$news_title= ($mydata->title);
	$news_description=Explode_Out('<p>','</p>',($mydata->description));
	
	$image=(string) $mydata->children($namespaces["content"])->encoded;
	$image=Explode_Out('data-orig-file="','"',($image));
	
	$link=($mydata->link);
	$date=strtotime($mydata->pubDate);
	$date=date('d F Y',$date);
	$publisher='The Himalayan Times';
	
if(isset($image)&&$image!=='') {
		$type=$content_types[array_rand($content_types)];
		
    } else {
		$type='top_stories';
		
	}
	
	array_push($news_collection,array($news_title,$news_description,$image,$link,$publisher,$date,'The Himalayan Times',$type,$site_info[1]));
	
}

}

##################################################################

$kantipur=Send_Request('http://kathmandupost.ekantipur.com/getapptrendingbysite');
$kantipur_newslist=json_decode($kantipur);


foreach($kantipur_newslist as $mydata)
{

	$news_title=$mydata->title;	
	$news_description=$mydata->description;
	$image=$mydata->image;
	$link=$mydata->news_url;
	$publisher=$mydata->site_exact_name;
	$date=$mydata->news_date;
	
	
	if(isset($image)&&$image!=='') {
		$type=$content_types[array_rand($content_types)];
		
    } else {
		$type='top_stories';
		
	}
	
	
	array_push($news_collection,array($news_title,$news_description,$image,$link,$publisher,$date,'kantipur',$type,''));
	
	
	}
	
	################################################
	
	$get_n_q="SELECT * FROM news_main ORDER BY id DESC;";
	$result_n_q = $connect_news->query($get_n_q);
	 while($row_n_q = $result_n_q->fetch_assoc()) {
		 
		$news_title=$row_n_q['title'];	
	$news_description=$row_n_q['text'];
	$image=$row_n_q['thumbnail'];
	if($image=='') {
	$image='/img/icon.png';
	} 
	$link='/article/?id='.$row_n_q['id'];
	$publisher='Nepal News Portal';
	$date=$row_n_q['date'];
	
	$tags = preg_split ("/\,/", $row_n_q['tags']);  
	
	$type=$content_types[array_rand($content_types)];
	
			array_push($news_collection,array($news_title,$news_description,$image,$link,$publisher,$date,'nnp',$type,$tags));
	}
	
	
	
	$_SESSION['news_collection']=$news_collection;
	
} 


Function RegE($string,$satu,$dua){
$pattern = "#".$satu."(.*?)".$dua."#s";
preg_match($pattern, $string, $matches);
if(isset($matches[1])){
return $matches[1];
}else{
return '-1';
}
}
	
	
function Explode_Out($Start,$End,$data)
{
$x = explode($Start,$data);
$z = explode($End,$x[1]);
$oh = $z[0];
if($x && $z) 
{ 
return $oh; 
} else { 
return false; 
}
}


function Send_Request($Url,$Data=null) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$Url);

        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.72 Safari/537.36');
        curl_setopt($ch, CURLOPT_HTTP_VERSION, 'HTTP/1.1');
        curl_setopt($ch, CURLOPT_ENCODING , "gzip");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/x-www-form-urlencoded','Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8'));
        
	if($Data!=null) {
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$Data);
	}
	
		
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec ($ch);
curl_close ($ch);
return $data;
}

?>