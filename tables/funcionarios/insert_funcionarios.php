<?php 


    function SalvarFuncionarios($nome, $cpf, $endereco, $setor){

        include_once('../../banco/conn/conn_pg.php');
            
        $sql = "insert into funcionarios (nome, cpf, endereco, setor) values('$nome', '$cpf', '$endereco', '$setor')";
          
        $pgsql->exec($sql); 

    } 
 
?>