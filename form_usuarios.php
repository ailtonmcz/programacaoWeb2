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
                        <form action="usuarios_request.php" method="post">
                         
                        <div>
                            <label for="funcionario_id">Seu ID:</label>
                            <input type="text" id="funcionario_id" class="form-control" name="usuarios[funcionario_id]" required />
                        </div> 

                        <div>
                            <label for="username">Nome de usuário:</label>
                            <input type="text" id="username" class="form-control" name="usuarios[username]" required />
                        </div>

                        <div>
                            <label for="senha">Senha:</label>
                            <input type="password" id="senha" class="form-control" name="usuarios[senha]" required />
                        </div>

                        <div>
                            <label for="endereco">Endereco:</label>
                            <input type="text" id="endereco" class="form-control" name="usuarios[endereco]" required />
                        </div>

                        <div>
                            <label for="setor">Setor:</label>
                                <br><input type="radio" id="setor" name="usuarios[setor]"value="RH" checked>RH<br>
                                <input type="radio" id="setor" name="usuarios[setor]"value="Finaceiro" >Financeiro<br>
                                <input type="radio" id="setor" name="usuarios[setor]"value="Vendas" >Vendas<br>
                                <input type="radio" id="setor" name="usuarios[setor]"value="Recepcao" >Recepcao<br>
                                <input type="radio" id="setor" name="usuarios[setor]"value="Diretoria" >Diretoria<br>
                                <input type="radio" id="setor" name="usuarios[setor]"value="Gerencia" >Gerência<br>
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