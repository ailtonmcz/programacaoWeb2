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
          <a href="/tables/veiculos/form_veiculos.php">
              <br><br><img src="img/cadastro_veiculo.png" width="110" height="110">
              <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>CADASTRAR VEICULO</b></font>
              </div>
                            
          </a>
        </div>  

        <div >
           <a href="/tables/clientes/form_clientes.php">
              <br><br><img src="img/clients.png" width="110" height="110">
              <div class="container">
                <font size="2" color="white" face="Arial"><b><br>CADASTRAR CLIENTE</b></font>
              </div>                 
            </a>
        </div>

        <div >
          <a href="/tables/funcionarios/form_funcionarios.php">
              <br><br><img src="img/funcionarios.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>CADASTRAR FUNCIONARIOS</b></font>
                </div>
             </a>
         </div>


        <div >
          <a href="/tables/usuarios/form_usuarios.php">
              <br><br><img src="img/usuarios.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>CADASTRAR USUÁRIOS</b></font>
                </div>                  
              </a>
          </div>

        <div >
          <a href="./tables/veiculos_caracteristicas/form_veic_caracts.php">
              <br><br><img src="img/veic_carects.png" width="110" height="110">
                <div class="container">
                  <font size="2" color="white" face="Arial"><b><br>CARACTERISTICAS DE VEICULOS</b></font>
                </div>                 
               </a>
            </div>
          </div>
       </body>
    </body>
  </html>