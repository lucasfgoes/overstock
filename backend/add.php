<?php
if($_POST){
  try{
    include('conexao.php');
    $quantidade = $_POST['quantidade'];
    $produto = $_POST['produto'];
    $marca = $_POST['marca'];
    $custo = $_POST['custo'];
    $preco = $_POST['preco'];

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
  }catch(PDOException $e){
     print_r($e);
  } 
}


?>