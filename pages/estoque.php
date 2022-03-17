<?php require('../components/menu.php')?>
<?php if(!isset($_SESSION['auth'])){ header('location: /overstock'); } ?>
  <section class="estoque on">
    <?php require('../components/table.php')?>

    <div class="links">
      <a href="#add">adicionar</a>
      <a href="#edit">editar</a>
      <a href="#venda">vender</a>
    </div>
    
    <div class="crud">
      <?php require('../components/register_prod.php')?>
      <?php require('../components/add_estoque.php')?>
      <?php require('../components/edit_estoque.php')?>
      <?php require('../components/venda_estoque.php')?>
    </div>
  </section>
<script src="/overstock/frontend/js/crud.js" type="module"></script>
<?php require('../components/footer.php')?>
