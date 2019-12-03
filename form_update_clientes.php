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
                    <h2>INFORME OS DADOS DO CLIENTE<h2>
                </div>
                <div class="card-body">
                        <form action="update_clientes.php" method="post">

                        <div>
                            <label for="id_cliente">Id do cliente a ser atualizado:</label>
                            <input type="text" id="id_cliente" class="form-control" name="id_cliente" required />
                        </div> 
                         
                        <div>
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" class="form-control" name="nome" required />
                        </div> 

                        <div>
                            <label for="cpf">CPF:</label>
                            <input type="number" id="cpf" class="form-control" name="cpf" required />
                        </div>

                        <div>
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" class="form-control" name="endereco" required />
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