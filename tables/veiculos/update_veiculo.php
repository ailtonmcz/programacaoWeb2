<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>ALTERAÇÃO EFETUADA COM SUCESSO</b></font></head>

<?php 
 
include_once('../../estrutura/layouts.php');
include_once('../../banco/conn/conn_pg.php');
head();
menu();

     $a = $_POST['id'];
     $b = $_POST['fabricante'];
     $c = $_POST['cor'];
     $d = $_POST['ano'];
     $e = $_POST['portas'];
     $f = $_POST['modelo'];

             
        $sql = "update veiculos set fabricante = '$b', cor = '$c', ano = '$d', portas = '$e', modelo = '$f' where id = '$a' ";
        
        
        $pgsql->exec($sql);
        
        
     

    
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