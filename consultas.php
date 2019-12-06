<!DOCTYPE html>
<html>

<?php

include_once('estrutura/layouts.php');

head();
menu();
?>
<body>

<div class="container">

<body background="/img/background1.jpg" class="img-fluid" alt="Responsive image">
  <div style="display:flex; flex-direction:row; flex-wrap: wrap; align-content: space-between;">
    <div >
     <a href="/tables/veiculos/select_veiculos.php">
        <br><br><img src="img/cadastro_veiculo.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CONSULTA VEICULOS</b></font>
            </div>
                             
          </a>
      </div>
   
    <div >
     <a href="/tables/clientes/select_clientes.php">
        <br><br><img src="img/Search_Client.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CONSULTA CLIENTES</b></font>
            </div>
          </a>
      </div>
   
    <div>
     <a href="/tables/funcionarios/select_funcionarios.php">
        <br><br><img src="img/lupa_funcionarios.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>FUNCIONARIOS</b></font>
            </div>
          </a>
      </div>
   

   <div>
      <a href="/tables/usuarios/select_usuarios.php">
        <br><br><img src="img/users.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CONSULTAS USUARIOS</b></font>
            </div>
          </a>
      </div>
   
   <div>
     <a href="/tables/veiculos_caracteristicas/select_veic_caracteristicas.php">
        <br><br><img src="img/veic_carects.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>CARACTERISTICAS</b></font>
            </div>
           </a>
        </div>

    <div> 
      <a href="/tables/pedidos/select_veiculos_clientes.php">
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