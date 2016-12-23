<?php 
header("Content-type: Application/json;charset=UTF-8");

include_once '../class/users.class.php';

$file=file_get_contents("php://input");
$data=json_decode($file);

$dados=array();

foreach ($data as $key => $value) {
if(empty($value)) die("Campos de formulário em branco!");

$dados[$key]= trim($value);


}

$user= new users();

foreach ($dados as $key => $value) {

$user->$key=$value;
}

if(isset($_GET['edit'])) $user->editar(); else $user->inserir();

$msg=(isset($_GET['edit'])) ? 'Registro alterado' : 'Cadastrado';

$retorno= array(
	'class' => 'success',
	'msg' => $msg.' com sucesso!');

echo json_encode($retorno);
 ?>