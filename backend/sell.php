<?php
include('./conexao.php');

$stmt = $conn->prepare('SELECT * FROM produtos WHERE produto = :produto and marca = :marca' );

$stmt->execute(array(
  'produto' => $_GET['produto'],
  'marca' => $_GET['marca'],
));
$dados = $stmt->fetchAll();

$p = $_GET['produto'];
$m = $_GET['marca'];
$id = $dados[0]['id'];
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