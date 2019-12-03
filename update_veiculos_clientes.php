<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>ALTERAÇÃO EFETUADA COM SUCESSO</b></font></head>

<?php 
 
include_once('estrutura/layouts.php');
head();
menu();

     $a = $_POST['id'];
     $b = $_POST['veiculo_id'];
     $c = $_POST['cliente_id'];
     $d = $_POST['funcionario_id'];
     $e = $_POST['vendido_em'];
     
     $veiculos_clientes = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $veiculos_clientes = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
        
        
        $sql = "update veiculos_clientes set veiculo_id = '$b', cliente_id = '$c', funcionario_id = '$d', vendido_em = '$e' where id = '$a' ";
        
        
        $veiculos_clientes->exec($sql);
        
        
     

    
?>

<body>
    <div class="container">
      <body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
        <div class="row">
          <a href="home.php">
          <br><br><img src="img/home.jpg" width="120" height="120">
          <div class="container">
            <font size="3" color="white" face="Arial"><b><br>VOLTAR PARA O INICIO</b></font>
            </div>
            </div>                         
            </a>
            </div>
            </div>
          </body>
</html>