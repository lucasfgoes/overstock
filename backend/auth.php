<link rel="stylesheet" href="/overstock/frontend/css/form.css">
<form method="post">
    <h1>Login</h1>
    <label for="e-mail">E-mail:</label>
    <input type="text" id="e-mail" name="e-mail">
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha">
    <button type="submit">Entrar</button>
    <button type='button' onClick='redireciona()'>Cadastrar</button>

<?php
  if($_POST){
    include('conexao.php');
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email and senha = :senha' );
    $stmt->execute(array('email' => $_POST['e-mail'], 'senha' => $_POST['senha']));

    $dados = $stmt->fetchAll();

    if(count($dados)>0){
      $_SESSION['auth'] = true;
      header("location: ../index.php");
    }else{
      echo '<p class="invalido">Dados inválidos!</p>';
    }
  }
?>

</form>

<script>
  const redireciona = ()=> window.location.href = '/overstock/pages/cadastro.php';
</script>

