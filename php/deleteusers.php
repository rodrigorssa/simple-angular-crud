<?php 
include_once '../class/users.class.php';
$file=file_get_contents("php://input");
$data=json_decode($file);
 $id=$data->id;
 
$user=new users();

if($user->delete($id)) {

$msg= array( 'msg' => 'Usuário deletado com sucesso!');

echo json_encode($msg);
} 

 ?>