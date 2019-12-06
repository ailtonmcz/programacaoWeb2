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
                    <br><h2>INFORME OS DADOS DO PEDIDO<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/pedidos/pedidos_request.php" method="post">
                         
                        <div>
                            <label for="veiculo_id">ID do veículo:</label>
                            <input type="number" id="veiculo_id" class="form-control" name="pedidos[veiculo_id]" required />
                        </div> 

                        
                        <div>
                            <label for="cliente_id">Código do cliente:</label>
                            <input type="number" id="cliente_id" class="form-control" name="pedidos[cliente_id]" required />
                        </div>

                        <div>
                            <label for="funcionario_id">Código do funcionário:</label>
                            <input type="number" id="funcionario_id" class="form-control" name="pedidos[funcionario_id]" required />
                        </div>

                        <div>
                            <br><label for="vendido_em">Data da venda:</label>
                          <input type="date" id="vendido_em" class="fom-control" name="pedidos[vendido_em]" required/>
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