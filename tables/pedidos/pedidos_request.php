<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('../../estrutura/layouts.php');
head();
menu();

require_once('../../class/Pedidos.php');
require_once('insert_pedidos.php');
 

   $pedidos = new Pedidos(); 
   
   $v = $_POST['pedidos']; 

   
   $pedidos->__set('veiculo_id', $v['veiculo_id']);
   $pedidos->__set('cliente_id', $v['cliente_id']);
   $pedidos->__set('funcionario_id', $v['funcionario_id']);
   $pedidos->__set('vendido_em', $v['vendido_em']);
   

   SalvarPedidos( $pedidos->__get('veiculo_id'), $pedidos->__get('cliente_id'), $pedidos->__get('funcionario_id'), $pedidos->__get('vendido_em'));

              
  


?>
<body>
    <div class="container">
      <body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
        <div class="row">
          <a href="/home.php">
          <br><br><img src="/img/home.jpg" width="200" height="200">
          <div class="container">
            <font size="3" color="white" face="Arial"><b><br>VOLTAR PARA O INICIO</b></font>
            </div>
            </div>                         
            </a>
            </div>
            </div>
          </body>
</html>