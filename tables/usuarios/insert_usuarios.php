<?php 


    function SalvarUsuarios($funcionario_id, $username, $senha, $endereco, $setor){

        include_once('../../banco/conn/conn_pg.php');
            
        $sql = "insert into usuarios (funcionario_id, username, senha, endereco, setor) 
        values('$funcionario_id', '$username', '$senha', '$endereco', '$setor')";
          
        $pgsql->exec($sql); 

    } 
 
?>