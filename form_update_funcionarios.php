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
                    <h2>INFORME OS DADOS DO FUNCIONÁRIO<h2>
                </div>
                <div class="card-body">
                        <form action="update_funcionario.php" method="post">

                        <div>
                            <label for="id">Id do funcionário a ser atualizado:</label>
                            <input type="text" id="id" class="form-control" name="id" required />
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

                        <div>
                            <label for="setor">Setor:</label>
                                <br><input type="radio" id="setor" name="setor"value="RH" checked>RH<br>
                                <input type="radio" id="setor" name="setor"value="Finaceiro" >Financeiro<br>
                                <input type="radio" id="setor" name="setor"value="Vendas" >Vendas<br>
                                <input type="radio" id="setor" name="setor"value="Recepcao" >Recepcao<br>
                                <input type="radio" id="setor" name="setor"value="Diretoria" >Diretoria<br>
                                <input type="radio" id="setor" name="setor"value="Gerencia" >Gerência<br>
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