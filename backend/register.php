<link rel="stylesheet" href="/overstock/frontend/css/form.css">
<form method="post">
    <h1>Cadastrar</h1>
    <label for="e-mail">E-mail:</label>
    <input type="text" id="e-mail" name="e-mail" required>
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    <label for="senha_">Confirmar Senha:</label>
    <input type="password" id="senha_" name="senha_" required>
    <button type="submit">Confirmar</button>

  <?php
  if($_POST){

    try{
    include('conexao.php');
    $stmt = $conn->prepare('INSERT INTO usuarios (email, senha) VALUES (:email,:senha)' );
    $stmt->execute(array('email' => $_POST['e-mail'], 'senha' => $_POST['senha']));
    header("location: ../pages/login.php");
    }catch(PDOException $e){
      echo '<p class="invalido">E-mail inválido!</p>'; 
    } 
  }
?>
</form>