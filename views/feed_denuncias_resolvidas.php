<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/olhonailha/templates/_cabecalho.php';




?>

<section class="denunciasresolvidas">
  <div class="titulo" style="background-color: green; color:white; text-align:center">
<h1>Denúncias solucionadas</h1>
  </div>  
  <div class="postagem">
      
  </div>
  <?php foreach ($denuncias as $d): ?>
    <?= $d['id_usario'] ?>
    <?= $d['id denuncia'] ?>
    <?= $p['id_tipo'] ?>
    <?= $p['titulo'] ?>
    <?= $p['local_denuncia'] ?>
    <?= $p['descricao'] ?>
    <?= $p['foto_denuncia'] ?>



</section>
