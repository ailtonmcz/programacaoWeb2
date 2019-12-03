<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CONSULTA EFETUADA COM SUCESSO</b></font></head>

<?php 
 
include_once('estrutura/layouts.php');
head();
menu();

     $consulta_cliente = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $consulta_cliente = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "select * from veiculos_caracteristicas";
        
        
        $consulta_cliente->exec($sql);
        $resultado = $consulta_cliente->query($sql);

        while($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo ' <br> ' . ' <font size="3" color="white" face="Arial">' . $row['id'] . ' , '. $row['veiculo_id'] . ' , ' . $row['descricao'];
        }
     

    
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