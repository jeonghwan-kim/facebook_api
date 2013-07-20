<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
$consumer_key = 'insert consumer key';
$consumer_secret = 'insert consumer secret';
 
// FacebookOAuth object 생성 (access token 포함)
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 
// ========================================================
// Example 1. show user name
//  사용자 이름 보기
// ========================================================
$user = $connection->get('me');
print_r($user->name);


?>
