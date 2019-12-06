<!DOCTYPE html>
<html>
<?php include_once('../../estrutura/layouts.php'); 

head();
menu();

?>
<div class="container">
      <div class="form-row">

        <div class="card-login">
        
            <div class="card">
                <div class="panel-heading">
                    <h2>INFORME AS CARACETRISTICAS QUE SERÃO ALTERADAS<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/veiculos_caracteristicas/update_veic_caracts.php" method="post">

                        <div>
                            <label for="id">Id da Caracteristica:</label>
                            <input type="number" id="id" class="form-control" name="id" required />
                        </div> 

                        <div>
                            <label for="veiculo_id">Id Veículo:</label>
                            <input type="number" id="veiculo_id" class="form-control" name="veiculo_id" required />
                        </div> 
                         
                        <div>
                            <label for="descricao">Descriçãoo:</label>
                            <input type="text" id="descricao" class="form-control" name="descricao" required />
                        </div> 

                        <button class="btn btn-ml mt-5 btn-info btn-block" type="submit">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
    <body background="/img/background1.jpg">
    

   

</html>