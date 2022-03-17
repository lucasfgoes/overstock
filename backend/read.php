<?php
include('../backend/conexao.php');
$stmt = $conn->prepare('SELECT * FROM produtos ORDER BY produto');
$stmt->execute();
$dados = $stmt->fetchAll();
$json = json_encode($dados);
print_r($json);
?>