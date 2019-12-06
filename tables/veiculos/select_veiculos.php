<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CONSULTA EFETUADA COM SUCESSO</b></font></head>

<?php

include_once('../../estrutura/layouts.php');
include_once('../../banco/conn/conn_pg.php');
head();
menu();

                        
        $sql = "select * from veiculos";
                
        $pgsql->exec($sql);
        $resultado = $pgsql->query($sql);

 ?>

<body>
<style type="text/css">
  table    { border:ridge 5px #6959CD; background-color:#ADD8E6; color:#000000; }
  table td { border:inset 1px #000; }
</style>

  <table border="5px" cellpadding="6px" cellspacing="0">
    <tr>
      <td><b><font size="5" color="black" face="Arial">Código do veículo</td>
      <td><b><font size="5" color="black" face="Arial">Fabricante</td>
      <td><b><font size="5" color="black" face="Arial">Ano</td>
      <td><b><font size="5" color="black" face="Arial">Portas</td>
      <td><b><font size="5" color="black" face="Arial">Modelo</td>
      <td><b><font size="5" color="black" face="Arial">Situação</td>
      <td><b><font size="5" color="black" face="Arial">Novo</td>
      <td><b><font size="5" color="black" face="Arial">Preço</td>
      <td><b><font size="5" color="black" face="Arial">Placa</td>
      
   </tr>
  
<?php 
 
  while($dado = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
  <tr>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['id']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['fabricante']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['ano']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['portas']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['modelo']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['situacao']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['novo']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['preco']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['placa']; ?></td>
    
  <?php } ?> 



    <div class="container">
      <body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
        <div class="row">
          <a href="/home.php">
          <br><br><img src="/img/home.jpg" width="110" height="110">
            <div class="container">
              <font size="3" color="white" face="Arial"><b><br>VOLTAR</b></font>
                </div>
                 </div>                         
                </a>
               </div>
            </div>
          </body>
       </td>
    </tr>
</table>
</html>
