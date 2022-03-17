<?php
if($_POST){
  try{
    include('conexao.php');
    $stmt = $conn->prepare('SELECT * FROM produtos WHERE id = :id' );
    $stmt->execute(array('id' => $_POST['id'])); 
    $quantidade = $stmt->fetchAll();

    $stmt = $conn->prepare('UPDATE produtos SET custo = :custo, preco = :preco, quantidade = :quantidade WHERE id = :id' );
    $stmt->execute(
      array(
        'custo' => $_POST['custo'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade'] + $quantidade[0]['quantidade'],
        'id' => $_POST['id']
      )); 
    
    print_r('ok');
  }catch(PDOException $e){
     print_r($e);
  } 
}


?>