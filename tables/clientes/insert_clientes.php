<?php 


    function SalvarClientes($nome, $cpf, $endereco){

        include_once('../../banco/conn/conn_pg.php');
                  
        $sql = "insert into clientes (nome, cpf, endereco) values('$nome', '$cpf', '$endereco')";
          
        $pgsql->exec($sql); 

    } 
 
?>