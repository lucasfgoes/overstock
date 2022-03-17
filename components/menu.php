<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Overstock</title>
  <link rel="stylesheet" href="/overstock/frontend/css/style.css">
  <link rel="stylesheet" href="/overstock/frontend/css/menu.css">
  <link rel="stylesheet" href="/overstock/frontend/css/banner.css">
  <link rel="stylesheet" href="/overstock/frontend/css/sessions.css">
  <link rel="stylesheet" href="/overstock/frontend/css/footer.css">
</head>

<body>
  <header class="header">
    <div class="container-menu">
      <div class="logo">
        <a class="logo-link" href="/overstock">Overstock</a>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="/overstock/pages/sobre.php">Sobre</a></li>
          <?php 
          if(!isset($_SESSION['auth'])){
            echo '<li><a href="/overstock/pages/login.php">Login</a></li>';
          }else{
            echo '<li><a href="/overstock/pages/estoque.php">estoque</a></li>';
            echo '<li><a href="?logout">sair</a></li>';

            if(isset($_GET['logout'])){
              unset($_SESSION['auth']);
              session_destroy();
              header('location: /overstock');
            }
          }
          ?>
        </ul>
      </nav>
    </div>
  </header>