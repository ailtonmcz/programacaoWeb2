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
                    <h2>INFORME O PEDIDO QUE SERÁ ALTERADO<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/pedidos/update_veiculos_clientes.php" method="post">

                        <div>
                            <label for="id">Id do pedido:</label>
                            <input type="number" id="id" class="form-control" name="id" required />
                        </div> 

                        <div>
                            <label for="veiculo_id">Id Veículo:</label>
                            <input type="number" id="veiculo_id" class="form-control" name="veiculo_id" required />
                        </div> 
                         
                        <div>
                            <label for="cliente_id">Id do ciente:</label>
                            <input type="number" id="cliente_id" class="form-control" name="cliente_id" required />
                        </div> 

                        <div>
                            <label for="funcionario_id">Id do funcionário:</label>
                            <input type="number" id="funcionario_id" class="form-control" name="funcionario_id" required />
                        </div> 

                        <div>
                            <br><label for="vendido_em">Data da venda:</label>
                          <input type="date" id="vendido_em" class="fom-control" name="vendido_em" required/>
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