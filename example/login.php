<?php
require_once "coco.php";

coco::in([
  "id" => "required pk[accounts] as[account] va-length[4,16]",
  "password" => "required va-length[8,32]"]);
coco::out([
  "nickname" => "from[account->nickname]",
  "level" => "from[account->level]",
  "session" => "session_key",
  "timestamp" => "timestamp"]);
  
if( $account->password != $password )
  coco::abort(INCORRECT_PASSWORD);

coco::session("account", $account);
?>
