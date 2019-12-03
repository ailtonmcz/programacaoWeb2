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
          <a href="form_update_veiculos.php">
              <br><br><img src="img/update_car.png" width="110" height="110">
              <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>ATUALIZAR VEICULO</b></font>
              </div>
                            
          </a>
        </div>  

        <div >
            <a href="form_update_clientes.php">
              <br><br><img src="img/cliente_update.png" width="110" height="110">
              <div class="container">
                <font size="2" color="white" face="Arial"><b><br>ATUALIZAR CLIENTE</b></font>
              </div>                 
            </a>
        </div>

        <div >
          <a href="form_update_funcionarios.php">
              <br><br><img src="img/funcionario_update.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>ATUALIZAR FUNCIONARIOS</b></font>
                </div>
            </a>
        </div>


        <div >
          <a href="form_update_usuarios.php">
              <br><br><img src="img/usuarios.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>ATUALIZAR USUÁRIOS</b></font>
                </div>                   
          </a>
        </div>

        <div >
          <a href="form_update_veic_caracts.php">
              <br><br><img src="img/veic_carects.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>ATUALIZAR CARACTERISTICAS</b></font>
                </div>                 
            </a>
        </div>

        <div >
          <a href="form_update_veiculos_clientes.php">
              <br><br><img src="img/venda_veiculos.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>ATUALIZAR PEDIDOS</b></font>
                </div>                 
            </a>
        </div>
   </div>

</body>
</body>

</html>