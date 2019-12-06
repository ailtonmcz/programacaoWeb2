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
                    <h2>INFORME OS DADOS DO CLIENTE<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/clientes/clientes_request.php" method="post">
                         
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" class="form-control" name="clientes[nome]" required />
                        </div> 

                        <div>
                            <label for="cpf">CPF:</label>
                            <input type="number" id="cpf" class="form-control" name="clientes[cpf]" required />
                        </div>

                        <div>
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" class="form-control" name="clientes[endereco]" required />
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