<?php
//$screen_name = "twitterapi";
$screen_name = "frightening";
$dataUrl = file_get_contents("http://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts=true&screen_name=" . $screen_name . "&count=10");
file_put_contents("tweets.json", $dataUrl);
?>