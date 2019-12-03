<!DOCTYPE html>
<html>
<?php include_once('estrutura/layouts.php'); 

head();
menu();

?>
<div class="container">
      <div class="form-row">

        <div class="card-login">
        
            <div class="card">
                <div class="panel-heading">
                    <h2>CARACTERISTICAS DO VEÍCULO<h2>
                </div>
                <div class="card-body">
                        <form action="veiculos_caracteristicas_request.php" method="post">
                         
                        <div>
                            <label for="veiculo_id">ID do Veículo:</label>
                            <input type="text" id="veiculo_id" class="form-control" name="veiculos_caracteristicas[veiculo_id]" required />
                        </div> 

                        <div>
                            <label for="descricao">Descrição das Caracteristiacas:</label>
                            <input type="text" id="descricao" class="form-control" name="veiculos_caracteristicas[descricao]" required />
                        </div>

                        
                        <button class="btn btn-ml mt-5 btn-info btn-block" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
    <body background="/img/background1.jpg">
    

   

</html>