<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
require_once("./facebook-api-key.php");
 
// FacebookOAuth object 생성
$connection = new FacebookOAuth($consumer_key, $consumer_secret);
 
// 토큰 수령
$access_token = $connection->getAccessToken($_REQUEST['code']);
$token = $access_token['oauth_token'];
$_SESSION['token'] = $token; // 세션에 저장

?>
