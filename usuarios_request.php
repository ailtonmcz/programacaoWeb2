<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('estrutura/layouts.php');
head();
menu();

require_once('class/usuarios.php');
require_once('banco/bd_usuarios.php');
 

   $usuarios = new Usuarios(); 
   
   $v = $_POST['usuarios']; 

   
   $usuarios->__set('funcionario_id', $v['funcionario_id']);
   $usuarios->__set('username', $v['username']);
   $usuarios->__set('senha', $v['senha']);
   $usuarios->__set('endereco', $v['endereco']);
   $usuarios->__set('setor', $v['setor']);

   

   SalvarUsuarios ( $usuarios->__get('funcionario_id'), $usuarios->__get('username'), $usuarios->__get('senha'),
                    $usuarios->__get('endereco'), $usuarios->__get('setor'),);

              
  


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