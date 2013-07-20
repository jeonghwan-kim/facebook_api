<?php

// 변수 설정 등

$consumer_key = 'Insert consumer key';
$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/';
 
// 파라미터
$args = "scope=publish_stream,offline_access"
        . "&client_id=" . $consumer_key
        . "&redirect_uri=" . $domain . 'facebook_api/facebook-access.php';
 
// 호출 uri
$uri = "https://graph.facebook.com/oauth/authorize?" . $args;
 
// redirect
header('Location: ' . $uri);

?>
