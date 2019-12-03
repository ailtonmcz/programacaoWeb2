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
                    <h2>INFORME OS DADOS DO USUÁRIO<h2>
                </div>
                <div class="card-body">
                        <form action="update_usuarios.php" method="post">

                        <div>
                            <label for="id">Id do usuário a ser atualizado:</label>
                            <input type="number" id="id" class="form-control" name="id" required />
                        </div> 

                        <div>
                            <label for="funcionario_id">Id do funcionário:</label>
                            <input type="number" id="funcionario_id" class="form-control" name="funcionario_id" required />
                        </div> 
                         
                        <div>
                            <label for="username">Username:</label>
                            <input type="text" id="username" class="form-control" name="username" required />
                        </div> 

                        <div>
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" class="form-control" name="senha" required />
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