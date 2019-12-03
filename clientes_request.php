<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('estrutura/layouts.php');
head();
menu();

require_once('class/Clientes.php');
require_once('banco/bd_clientes.php');
 

   $clientes = new Clientes(); 
   
   $v = $_POST['clientes']; 

   
   $clientes->__set('nome', $v['nome']);
   $clientes->__set('cpf', $v['cpf']);
   $clientes->__set('endereco', $v['endereco']);
   

   SalvarClientes ( $clientes->__get('nome'), $clientes->__get('cpf'), $clientes->__get('endereco'));

              
  


?>
<body>
    <div class="container">
      <body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
        <div class="row">
          <a href="home.php">
          <br><br><img src="img/home.jpg" width="200" height="200">
          <div class="container">
            <font size="3" color="white" face="Arial"><b><br>VOLTAR PARA O INICIO</b></font>
            </div>
            </div>                         
            </a>
            </div>
            </div>
          </body>
</html>