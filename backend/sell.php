<?php
include('./conexao.php');

$stmt = $conn->prepare('SELECT * FROM produtos WHERE id = :id ' );

$stmt->execute(array('id' => $_GET['id']));
$dados = $stmt->fetchAll();

$id = $_GET['id'];
$q = $_GET['quantidade'];
$qtd_bd = $dados[0]['quantidade'];
$q_update;

if($q > $qtd_bd){
  echo json_encode(array(false));
}else{
  $q_update = $qtd_bd - $q;
  $stmt = $conn->prepare('UPDATE produtos SET quantidade = :quantidade WHERE id = :id');
  $stmt->execute(array(
    'quantidade' => $q_update,
    'id' => $id,
  ));

  echo json_encode(array(true));
}


?>