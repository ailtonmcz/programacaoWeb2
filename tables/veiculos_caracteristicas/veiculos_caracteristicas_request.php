<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('../../estrutura/layouts.php');
head();
menu();

require_once('../../class/Veiculos_caracteristicas.php');
require_once('insert_veiculos_caracteristicas.php');
 

   $veiculos_caracteristicas = new Veiculos_caracteristicas(); 
   
   $v = $_POST['veiculos_caracteristicas']; 

   
   $veiculos_caracteristicas->__set('veiculo_id', $v['veiculo_id']);
   $veiculos_caracteristicas->__set('descricao', $v['descricao']);
   
   SalvarVeiculos_caracteristicas($veiculos_caracteristicas->__get('veiculo_id'), $veiculos_caracteristicas->__get('descricao'));

              
  


?>
<body>
    <div class="container">
      <body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
        <div class="row">
          <a href="/home.php">
          <br><br><img src="/img/home.jpg" width="120" height="120">
          <div class="container">
            <font size="3" color="white" face="Arial"><b><br>VOLTAR PARA O INICIO</b></font>
            </div>
            </div>                         
            </a>
            </div>
            </div>
          </body>
</html>