<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
require_once("./facebook-api-key.php");
 
// FacebookOAuth object 생성 (access token 포함)
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 

// ========================================================
// Example 2. 내가 작성한 글 보기
// ========================================================
$message = $connection->get('me?fields=statuses.limit(5000).fields(message).since(2009-01-01).until(2013-07-22)');
  // until(a) 는 a 전날까지를 의미
header ("Content-Type: application/json");
echo json_encode($message->statuses);

?>
