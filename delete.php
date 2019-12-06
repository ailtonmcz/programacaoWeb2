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
     <a href="/tables/veiculos/form_delete_veiculos.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR VEICULOS</b></font>
            </div>
                            
          </a>
        </div>

    <div >
     <a href="/tables/clientes/form_delete_clientes.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR CLIENTES</b></font>
            </div>
           </a>
      </div>
   
    <div >
     <a href="/tables/funcionarios/form_delete_funcionarios.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR FUNCIONÁRIOS</b></font>
            </div>
           </a>
      </div>
   
      
     <div >
     <a href="/tables/usuarios/form_delete_usuarios.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR USUÁRIOS</b></font>
            </div>
          </a>
      </div>
   
    <div >
     <a href="/tables/veiculos_caracteristicas/form_delete_veic_caracts.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR CARACTERISTICAS</b></font>
            </div>
           </a>
      </div>
   
    <div >
     <a href="/tables/pedidos/form_delete_pedidos.php">
        <br><br><img src="img/trash.png" width="110" height="110">
          <div class="container">
            <font size="2" color="white" face="Arial"><b><br>EXCLUIR PEDIDOS</b></font>
            </div>                 
               </a>
            </div>
          </div>
       </body>
    </body>
  </html>