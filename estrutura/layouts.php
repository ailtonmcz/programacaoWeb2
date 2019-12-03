<!DOCTYPE html>

<html>

<?php function head(){ ?>

<head>
  <meta charset="utf-8" />
  <title>Veiculos</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    </head>



<?php }?>


<?php function menu(){?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="home.php">
            <b>CADASTROS</b>
          </a>

          <a class="navbar-brand" href="consultas.php">
             <b>CONSULTAS</b>
          </a>

          <a class="navbar-brand" href="pedidos.php">
             <b>PEDIDOS</b>
          </a>

          <a class="navbar-brand" href="delete.php">
             <b>EXCLUSÕES</b>
          </a>

          <a class="navbar-brand" href="updates.php">
             <b>ALTERAÇÕES</b>
          </a>
                    
</nav>
<?php }?>


<?php function body(){?>

<body>


  <div class="container-fluid painel-home">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-2 d-flex justify-content-center">
                <a href="form_veiculo.php">
                  <img src="cadastro_veiculo.png" width="120" height="120">
                  </br>
                  <h1>Cadastro Veículo</h1>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</body>
<?php }?>




</html>