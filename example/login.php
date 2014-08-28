<?php
require_once "coco.php";

/* IN
 *  id : 필수 항목, accounts테이블의 PK, 4~16자리의 문자열이어야 한다.
 *  password : 필수 항목, 8~32자리의 문자열이어야 한다. */
coco::in([
  "id" => "required pk[accounts] as[account] va-length[4,16]",
  "password" => "required va-length[8,32]"]);

/* OUT
 *  nickname : 필수 항목, $account->nickname으로부터 값을 가져온다.
    level : 필수 항목, $account->level으로부터 값을 가져온다.
    session : session_key값을 대입한다.
    timestamp : timestamp값을 대입한다. */
coco::out([
  "nickname" => "required from[account->nickname]",
  "level" => "required from[account->level]",
  "session" => "session_key",
  "timestamp" => "timestamp"]);
  
if( $account->password != $password )
  coco::abort(INCORRECT_PASSWORD);

/* session에 $account 변수를 저장. */
coco::session("account", $account);
?>
