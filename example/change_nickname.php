<?php
require_once "coco.php";

coco::in([
  "session" => "session_key",
  "nickname" => "required va-length[8,16] va-rex[/[a-zA-Z0-9_]+/] as[new_nickname]",
  "account" => "required session"]);
coco::out([
  "timestamp" => "timestamp"]);

$account->nickname = $new_nickname;
?>
