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
                    <h2>INFORME O ID DO VEÍCULO<h2>
                </div>
                <div class="card-body">
                        <form action="del_veiculo_req.php" method="post">
                         
                        <div>
                            <label for="id">ID do VEÍCULO:</label>
                            <input type="number" id="id" class="form-control" name="id" required />
                        </div> 

                       <button class="btn btn-ml mt-5 btn-info btn-block" type="submit">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </body>
    <body background="/img/background1.jpg">
    

   

</html>