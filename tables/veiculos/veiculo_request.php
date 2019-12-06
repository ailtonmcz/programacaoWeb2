<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CADASTRO EFETUADO COM SUCESSO</b></font></head>

<?php 
 
include_once('../../estrutura/layouts.php');
head();
menu();

require_once('../../class/Veiculo.php');
require_once('insert_veiculos.php');
 

   $veiculo = new veiculo(); 
   
   $v = $_POST['veiculos']; 

   
   $veiculo->__set('fabricante', $v['fabricante']);
   $veiculo->__set('cor', $v['cor']);
   $veiculo->__set('ano', $v['ano']);
   $veiculo->__set('portas', $v['portas']);
   $veiculo->__set('modelo', $v['modelo']);
   $veiculo->__set('situacao', $v['situacao']);
   $veiculo->__set('novo', $v['novo']);
   $veiculo->__set('preco', $v['preco']);
   $veiculo->__set('placa', $v['placa']);


   SalvarVeiculo ( $veiculo->__get('fabricante'), $veiculo->__get('cor'), $veiculo->__get('ano'), $veiculo->__get('portas'), $veiculo->__get('modelo'), $veiculo->__get('situacao'),
                   $veiculo->__get('novo'), $veiculo->__get('preco'), $veiculo->__get('placa')  );


                   
  


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