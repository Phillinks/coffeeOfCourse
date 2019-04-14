<?php
require './views/include/header.php';
require './config/Config.php';
?>


<div class="teste col-md-08">
 <h1>Teste de PHP</h1>
 
 <?php
 $listarUsuarios = new controleUsuario();
 $listarUsuarios->index();

 $cadUsuario = new controleUsuario();
 $cadUsuario->cadastrar();
 ?>

 
</div>

 <?php
 require './views/include/footer.php';
 