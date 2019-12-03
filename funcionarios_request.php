<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('estrutura/layouts.php');
head();
menu();

require_once('class/Funcionarios.php');
require_once('banco/bd_funcionarios.php');
 

   $funcionarios = new Funcionarios(); 
   
   $v = $_POST['funcionarios']; 

   
   $funcionarios->__set('nome', $v['nome']);
   $funcionarios->__set('cpf', $v['cpf']);
   $funcionarios->__set('endereco', $v['endereco']);
   $funcionarios->__set('setor', $v['setor']);
   

   SalvarFuncionarios( $funcionarios->__get('nome'), $funcionarios->__get('cpf'), $funcionarios->__get('endereco'), $funcionarios->__get('setor'));

              
  


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