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
                    <h2>INFORME OS DADOS DO FUNCIONÁRIO<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/funcionarios/funcionarios_request.php" method="post">
                         
                        <div>
                            <label for="name">Nome:</label>
                            <input type="text" id="nome" class="form-control" name="funcionarios[nome]" required />
                        </div> 

                        <div>
                            <label for="cpf">CPF:</label>
                            <input type="number" id="cpf" class="form-control" name="funcionarios[cpf]" required />
                        </div>

                        <div>
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" class="form-control" name="funcionarios[endereco]" required />
                        </div>

                        <div>
                            <label for="setor">Setor:</label>
                                <br><input type="radio" id="setor" name="funcionarios[setor]"value="RH" checked>RH<br>
                                <input type="radio" id="setor" name="funcionarios[setor]"value="Finaceiro" >Financeiro<br>
                                <input type="radio" id="setor" name="funcionarios[setor]"value="Vendas" >Vendas<br>
                                <input type="radio" id="setor" name="funcionarios[setor]"value="Recepcao" >Recepcao<br>
                                <input type="radio" id="setor" name="funcionarios[setor]"value="Diretoria" >Diretoria<br>
                                <input type="radio" id="setor" name="funcionarios[setor]"value="Gerencia" >Gerência<br>
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