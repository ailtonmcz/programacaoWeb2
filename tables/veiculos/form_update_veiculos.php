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
                    <h2>INFORME OS DADOS DO VEÍCULO<h2>
                </div>
                <div class="card-body">
                        <form action="/tables/veiculos/update_veiculo.php" method="post">

                        <div>
                            <label for="id">ID do Veículo a ser alterado:</label>
                            <input type="text" id="id" class="form-control" name="id" required/>
                        </div> 
                         
                        <div>
                            <label for="fabricante">Fabricante:</label>
                            <input type="text" id="fabricante" class="form-control" name="fabricante" required/>
                        </div> 

                        
                        <div>
                            <label for="cor">Cor:</label>
                            <input type="text" id="cor" class="form-control" name="cor" required/>
                        </div>

                        <div>
                            <label for="ano">Ano:</label>
                            <input type="number" id="ano" class="form-control" name="ano" required/>
                        </div>

                        <div>
                            <label for="portas">Portas:</label>
                            <input type="number" id="portas" class="form-control" name="portas" required/>
                        </div>


                        <div>
                            <label for="modelo">Modelo:</label>
                            <input type="text" id="modelo" class="form-control" name="modelo" required/>
                        </div>


                        <div>
                            <label for="situacao">Situação:</label>
                                <br><input type="radio" id="situacao" name="situacao" value="a venda" checked>a venda<br>
                                <input type="radio" id="situacao" name="situacao"value="vendido" >vendido<br>
                        </div>

                        <div>
                            <label for="novo"><br>Novo ou usado?</label>
                                <br><input type="radio" id="novo" name="novo" value="true" checked>Novo<br>
                                <input type="radio" id="novo" name="novo"value="false" >Usado<br>
                        </div>

                        <div>
                            <label for="preco">Preço :</label>
                            <input type="number" id="preco" class="form-control" name="[preco]" required/>
                        </div>

                        <div>
                            <label for="placa">Placa :</label>
                            <input type="text" id="placa" class="form-control" name="[placa]" required/>
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