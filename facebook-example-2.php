<?php

session_start();

// library 로드, 변수 설정 등
require_once('./libs/facebookoauth.php');
$consumer_key = 'insert consumer key';
$consumer_secret = 'insert consumer secret';
 
// FacebookOAuth object 생성 (access token 포함)
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 

// ========================================================
// Example 2. 내가 작성한 글 보기 (댓글 포함)
// ========================================================
$feed = $connection->get('me/?fields=feed.limit(10).fields(message,story,from,actions)');

$no = 0;
foreach ($feed->feed->data as $data) {
		if ($data->story || $data->message ) {
			$post_link = $data->actions[0]->link;
			print("[" . $no++ . "]" 
				. $data->created_time . " : " 
				. $data->message 
				. $data->story 
				. " (by ". $data->from->name . " ) " 
				. "<a href=" . $post_link . ">link</a><br />");
		}
}

?>
