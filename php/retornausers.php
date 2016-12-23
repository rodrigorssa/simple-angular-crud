<?php 
header("Content-type: application/json");

include __DIR__."/../class/users.class.php";

$users= new users();
$retorno=$users->selectAll();

echo '{ "result": '.json_encode($retorno).'}';
 ?>