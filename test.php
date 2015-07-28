<?php
//Get Facebook Likes Count of a page
function fbLikeCount($id,$appid,$appsecret){
	//Construct a Facebook URL
	$json_url ='https://graph.facebook.com/'.$id.'?access_token='.$appid.'|'.$appsecret;
	$json = file_get_contents($json_url);
	$json_output = json_decode($json);
 
	//Extract the likes count from the JSON object
	if($json_output->likes){
		return $likes = $json_output->likes;
	}else{
		return 0;
	}
}
//This Will return like count of CoffeeCupWeb Facebook page
echo fbLikeCount('SachinTendulkar','849552235121531','ec28bb3cd19dec82e10fc68ba400a666');

 
// echo 'facebook comment count';
// echo $fb[0]->comment_count;

// require_once('includes/TwitterAPIExchange.php'); //get it from https://github.com/J7mbo/twitter-api-php

// // // /** Set access tokens here - see: https://dev.twitter.com/apps/ **/

// 	$settings = array(
// 	'oauth_access_token' => "86718371-g6UJncl2fdQKNwrcajeCTdWTLhpkE7NXHb7I6Wakf",
// 	'oauth_access_token_secret' => "YrpFSbpoBM3fm0Je4HL8AKTjsqgSQoiovMHtpVLmP1BaY",
// 	'consumer_key' => "fKQ4WVWe3x2Gp78b12ow4WtGO",
// 	'consumer_secret' => "R9Mey7gyondo9KQH4i0IhJDm1Rj63YCEOpcMy77LT5nz9wGLYY"
// 	);

// 	$ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
// 	$getfield = '?screen_name=sachin_rt';
// 	$requestMethod = 'GET';
// 	$twitter = new TwitterAPIExchange($settings);
// 	$follow_count=$twitter->setGetfield($getfield)
// 	->buildOauth($ta_url, $requestMethod)
// 	->performRequest();
// 	$data = json_decode($follow_count, true);
// 	$followers_count=$data[0]['user']['followers_count'];
// 	echo "Twittter Follower Count :- ";echo $followers_count;
?>
