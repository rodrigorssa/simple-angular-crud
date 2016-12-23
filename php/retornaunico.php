<?php 
header("Content-type: Application/json;charset=UTF-8");

include "../class/users.class.php";


$file=file_get_contents("php://input");
$data=json_decode($file);

$id=$data->id;

$retorno= new users();

echo json_encode($retorno->retornaunico($id));

 ?>