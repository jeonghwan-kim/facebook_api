<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
$consumer_key = 'insert consumer key';
$consumer_secret = 'insert consumer secret';
 
// FacebookOAuth object 생성 (access token 포함)
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 

// ========================================================
// Example 2. 내가 작성한 글 보기
// ========================================================
$message = $connection->get('me?fields=statuses.limit(100).fields(message)');
header ("Content-Type: application/json");
echo json_encode($message->statuses);

?>
