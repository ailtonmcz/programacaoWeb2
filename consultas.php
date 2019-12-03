<!DOCTYPE html>
<html>

<?php

include_once('estrutura/layouts.php');

head();
menu();
?>
<body>

<div class="container-fluid">

<body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
  <div style="display:flex; flex-direction:row; flex-wrap: wrap; align-content: space-between;">
    <div >
     <a href="select_veiculos.php">
        <br><br><img src="img/cadastro_veiculo.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>VEICULOS</b></font>
            </div>
                             
          </a>
      </div>
   
    <div >
     <a href="select_clientes.php">
        <br><br><img src="img/Search_Client.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CLIENTES</b></font>
            </div>
          </a>
      </div>
   
    <div>
     <a href="select_funcionarios.php">
        <br><br><img src="img/lupa_funcionarios.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>FUNCIONARIOS</b></font>
            </div>
          </a>
      </div>
   

   <div>
      <a href="select_usuarios.php">
        <br><br><img src="img/users.jpg" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>USUARIOS</b></font>
            </div>
          </a>
      </div>
   
   <div>
     <a href="select_veic_caracteristicas.php">
        <br><br><img src="img/veic_carects.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CARACTERISTICAS</b></font>
            </div>
           </a>
        </div>

    <div> 
      <a href="select_veiculos_clientes.php">
        <br><br><img src="img/venda_veiculos.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>PEDIDOS</b></font>
            </div>
          </a>
      </div>
   </div>
</body>
</body>
</html>