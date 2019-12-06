<!DOCTYPE html>
<html>
<head><font size="5" color="white" face="Arial"><b><br>CONSULTA EFETUADA COM SUCESSO</b></font></head>

<?php

include_once('../../estrutura/layouts.php');
include_once('../../banco/conn/conn_pg.php');
head();
menu();

                        
        $sql = "select * from clientes";
                
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
      <td><b><font size="5" color="black" face="Arial">Código do cliente</td>
      <td><b><font size="5" color="black" face="Arial">Nome</td>
      <td><b><font size="5" color="black" face="Arial">CPF</td>
      <td><b><font size="5" color="black" face="Arial">Endereço</td>
   </tr>
  
<?php 
 
  while($dado = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
  <tr>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['id_cliente']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['nome']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['cpf']; ?></td>
    <td><?php echo  '<b><font size="4" color="black" face="Arial">' . $dado['endereco']; ?></td>
    
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