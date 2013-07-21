<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
$consumer_key = 'insert your consumer key';
$consumer_secret = 'insert your consumer secret key';
 
// FacebookOAuth object 생성
$connection = new FacebookOAuth($consumer_key, $consumer_secret);
 
// 토큰 수령
$access_token = $connection->getAccessToken($_REQUEST['code']);
$token = $access_token['oauth_token'];
$_SESSION['token'] = $token; // 세션에 저장

?>
