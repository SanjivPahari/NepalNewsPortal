<?PHP
function video_recommend($topic) {
	
	if($topic=='all'||$topic=='trending') {
		$channels=array('UC3yDoaqQzOd1bNP74ZrGPTA',
		'UCjG2HX7jfwqIjzTlaF1CPGA',
		'UCbzFzlBEU_xFahqhGbEMJXQ',
		'UCkCSiXuhwTybDnH7DDDP61A',
		'UCeqFlIPsgUg2sPWLWkLtLzA',
		'UCcXxCTJ9RdTu_p9FzE2ee1w');
	} 
	elseif ($topic=='politics') {
				$channels=array('UCIh-NElauMOYsGUDXvlJ0AA',
				'UCXIJgqnII2ZOINSWNOGFThA',
				'UCT3v6vL2H5HK4loLMc8pmCw',
				'UCupvZG-5ko_eiXAupbDfxWw',
				'UC-bvMga0aykve2JDkH0KL4A',
				'UCL1Zr3XniRSwZOcqnpAKtfg');
	}
	elseif ($topic=='economy') {
				$channels=array('UCCXoCcu9Rp7NPbTzIvogpZg',
				'UCUMZ7gohGI9HcU9VNsr2FJQ',
				'UCIh-NElauMOYsGUDXvlJ0AA',
				'UCcXxCTJ9RdTu_p9FzE2ee1w',
				'UCIALMKvObZNtJ6AmdCLP7Lg',
				'UCL1Zr3XniRSwZOcqnpAKtfg');
	}
	elseif ($topic=='sports') {
				$channels=array('UCpcTrCXblq78GZrTUTLWeBw',
				'UCZ5C1HBPMEcCA1YGQmqj6Iw',
				'UCJ5v_MCY6GNUBTO8-D3XoAg',
				'UCY_5h5zaSwN7Or4kIJDYNXA',
				'UCt2JXOLNxqry7B_4rRZME3Q',
				'UCW8LEW1vVQ5xMwls6op14hQ');
	}
	elseif ($topic=='lifestyle') {
				$channels=array('UC295-Dw_tDNtZXFeAPAW6Aw',
				'UCUGo1WlJ8rIOi4ptYs2ZkfA',
				'UCZyfMdM8fukBBxQvAwgTf5A',
				'UC9gcxSRzjeZyZGlRQW-0rrQ',
				'UCRXiA3h1no_PFkb1JCP0yMA',
				'UClzDIMsdz5O5hHNz4iRgGTw');
	}
	elseif ($topic=='entertainment') {
				$channels=array('UCAclVGCh7QyLH41jJGQVhaw',
				'UCeqFlIPsgUg2sPWLWkLtLzA',
				'UCmdBdDnYnsOEO8vbuHn8orA',
				'UCb1Zz-O1RfB2IEATS8av2Mg',
				'UC2l1AZ5OOWgKz-Zgpw4SLMw',
				'UC2rJLq19N0dGrxfib80M_fg');
	}
		elseif ($topic=='international') {
				$channels=array('UCi8e0iOVk1fEOogdfu4YgfA',
				'UCoMdktPbSTixAyNGwb-UYkQ',
				'UCPP3etACgdUWvizcES1dJ8Q',
				'UCupvZG-5ko_eiXAupbDfxWw',
				'UC16niRr50-MSBwiO3YDb3RA',
				'UCNye-wNBqNL5ZzHSJj3l8Bg');
	}
	
	$final='';
	foreach($channels as $id)
{
	$key_id='';
$x=Send_Request('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId='.$id.'&maxResults=1&order=date&type=video&key='.$key_id,null);
 $user=json_decode($x);
foreach($user->items as $mydata)
{
	$final.='<div class="col-md-6">';
	$final.=video_content ($mydata->snippet->title,'https://www.youtube.com/watch?v='.$mydata->id->videoId,$mydata->snippet->thumbnails->medium->url,'auto',350);
    $final.='</div>';
	}
}
return $final;
}

function main_content($topic) {



foreach($_SESSION['news_collection'] as $mydata)
{

	$news_title=$mydata[0];	
	$news_description=$mydata[1];
	$image=$mydata[2];
	$link=$mydata[3];
	$publisher=$mydata[4];
	$date=$mydata[5];
	if($mydata[7]=='main_content') {
		
		if($topic!=='all') {
	if($mydata[8]==$topic) {
	echo large_content($news_title,$news_description,$image,$link,$publisher,$date).'<br>';
	} 
	
		} else {
	echo large_content($news_title,$news_description,$image,$link,$publisher,$date).'<br>';
		}
	}
	
	}	
}

function sub_content($topic) {
	
	$a=0;
	


foreach($_SESSION['news_collection'] as $mydata)
{

	$news_title=$mydata[0];	
	
	$image=$mydata[2];
	$link=$mydata[3];
	$publisher=$mydata[4];
	
	$tags=array($mydata[8]);
	
	if($mydata[7]=='sub_content') {
		
		$a++;
		if($a>2) {
		$break='<br>';
		
	} else {
		
		$break='';
	}
	
	if($topic!=='all') {
	if($mydata[8]==$topic) {
	echo small_content($break,$news_title,$image,$link,$publisher,$tags).'<br>';
	}
	} else {
		
		echo small_content($break,$news_title,$image,$link,$publisher,$tags).'<br>';
	
	}
	}
	
}
}

?>