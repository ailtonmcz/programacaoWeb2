<?php 

    function SalvarPedidos($veiculo_id, $cliente_id, $funcionario_id, $vendido_em){

        include_once('../../banco/conn/conn_pg.php');
            
        $sql = "insert into veiculos_clientes (veiculo_id, cliente_id, funcionario_id, vendido_em)
        values('$veiculo_id', '$cliente_id', '$funcionario_id', '$vendido_em')";
          
        $pgsql->exec($sql); 

    } 
 
?>