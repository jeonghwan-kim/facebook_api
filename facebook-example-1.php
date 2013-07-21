<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
require_once("./facebook-api-key.php");

// FacebookOAuth object 생성 (access token 포함)
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 
// ========================================================
// Example 1. show user name
//  사용자 이름 보기
// ========================================================
$user = $connection->get('me');
header ("Content-Type: application/json");
echo json_encode($user);


?>
