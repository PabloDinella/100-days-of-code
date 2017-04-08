<?php

require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '31533451-hLIhsRFsZZzKdpUUaCETCG0tk3nxdnsU7iMTK9RiY';
$oauth_access_token_secret = 'jn3t7EogXAWC8HbZZEcksmS3yWD2jRbTBs3Hz3BAQPbky';
$consumer_key = 'O9EzO7EnPErbuoiPZorLJwF8T';
$consumer_secret = '5Tc7zT0IQxxfnPOFX0D8wN92kHcYZOkALS6QSbRUsFXUP43BoE';
$user_id = '31533451';
$screen_name = 'pablordinella';
$count = 50;

// $twitter_url = 'statuses/user_timeline.json';
// $twitter_url .= '?user_id=' . $user_id;
// $twitter_url .= '&screen_name=' . $screen_name;
// $twitter_url .= '&count=' . $count;
// $twitter_url .= '&q=%23100DaysOfCode';

$twitter_url = 'search/tweets.json';
$twitter_url .= '?q=%3Apablordinella%20%23100DaysOfCode';
// $twitter_url .= '?q=%23jdmr%2Bfrom%3ABarrySpang';


// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>
