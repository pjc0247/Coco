<?php
require_once "coco.php";

/* IN
 *  session : 이 값은 세션 키를 나타낸다.
 *  nickname : 필수 항목, 8~16자리의 문자열, 알파벳과 숫자만 포함된 문자열 임을 검증한다. 값을 $new_nickname이란 변수에 가져온다.
 *  account : 필수 항목, 값을 session 저장소로부터 가져온다. */
coco::in([
  "session" => "session_key",
  "nickname" => "required va-length[8,16] va-rex[/[a-zA-Z0-9]+/] as[new_nickname]",
  "account" => "required session"]);
  
/* OUT
 *  timestamp : timestamp값을 대입한다. */
coco::out([
  "timestamp" => "timestamp"]);


/* 변경된 값은 response이후에 자동으로 DB에 커밋된다. */
$account->nickname = $new_nickname;
?>
