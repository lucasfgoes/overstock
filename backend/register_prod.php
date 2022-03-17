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
      $stmt = $conn->prepare('INSERT INTO produtos (produto, marca,custo,preco,quantidade) VALUES (:produto,:marca,:custo,:preco,:quantidade)' );

    
      $stmt->execute(
      array(
        'produto' => $_POST['produto'],
        'marca' => $_POST['marca'],
        'custo' => $_POST['custo'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade'],
      )); 
    
    print_r('ok');
    }

    
  }catch(PDOException $e){
     print_r($e);
  } 
}


?>