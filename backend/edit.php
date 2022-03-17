<?php
if($_POST){
  try{
    include('conexao.php');
    $stmt = $conn->prepare('SELECT id FROM produtos WHERE produto = :produto AND marca = :marca' );
    $stmt->execute(array('produto' => $_POST['produto'], 'marca' => $_POST['marca']));
    $dados = $stmt->fetchAll();

    if(count($dados)>0){
      print_r(false);
    }else{
      $stmt = $conn->prepare('UPDATE produtos SET produto = :produto, marca = :marca, preco = :preco WHERE id = :id' );
      $stmt->execute(
      array(
            'produto' => $_POST['produto'],
            'marca' => $_POST['marca'],
            'preco' => $_POST['preco'],
            'id' => $_POST['id']
      )); 
      print_r('ok');
    }

    
  }catch(PDOException $e){
    print_r($e);
  } 
}

