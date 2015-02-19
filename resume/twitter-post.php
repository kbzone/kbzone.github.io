<?php

/*
'oauth_access_token' => "YLYaFITWxycoRrpeEVPeLHw7I",
'oauth_access_token_secret' => "kCZwHm1tAOtYmflZ4iUmDtDdbrWMJ0tw18FRFaqgIcUmhDDafp",
'consumer_key' => "3044817825-FrX98ymOhckDlL2hOaQyfsp8r11eom2B2VRqv2T",
'consumer_secret' => "JaFhUOpnc26NPbDJWT1njwXsDqrw8rfwns6rdxLGV8ZvS"
*/

require_once ('twitteroauth-master/autoload.php');
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey        = "YLYaFITWxycoRrpeEVPeLHw7I"; //add the key from your app
$consumerSecret     = "kCZwHm1tAOtYmflZ4iUmDtDdbrWMJ0tw18FRFaqgIcUmhDDafp"; //add the secret from your app
$accessToken        = "3044817825-FrX98ymOhckDlL2hOaQyfsp8r11eom2B2VRqv2T"; //add the access token from your app
$accessSecret       = "JaFhUOpnc26NPbDJWT1njwXsDqrw8rfwns6rdxLGV8ZvS"; //add the access secret from your app
$message            = "This is another Test";

$connection         = new TwitterOAuth($consumerKey,$consumerSecret,$accessToken,$accessSecret);

$connection->post("statuses/update", array("status" => $message));

//$statues = $connection->post("statuses/update", array("status" => "hello world"));
if ($connection->getLastHttpCode() == 200) {
    // Tweet posted succesfully
    echo 'si: ' . $connection->getLastHttpCode();
} else {
    // Handle error case
    echo 'no: ' . $connection->getLastHttpCode();
}