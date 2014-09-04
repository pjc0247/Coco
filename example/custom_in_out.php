<?php
require_once "coco.php";

function my_in(){
  $json = $_POST["data"];
  
  return json_decode($json);
}
function my_out($data){
  return base64_encode(
    json_encode($data));
}

?>
