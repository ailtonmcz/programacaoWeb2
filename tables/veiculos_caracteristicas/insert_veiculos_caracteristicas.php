<?php 


    function SalvarVeiculos_caracteristicas($veiculo_id, $descricao ){

        include_once('../../banco/conn/conn_pg.php');
            
        $sql = "insert into veiculos_caracteristicas (veiculo_id, descricao) values('$veiculo_id',  '$descricao')";
          
        $pgsql->exec($sql); 

    } 
 
?>