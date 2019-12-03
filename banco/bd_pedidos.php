<?php 

    function SalvarPedidos($veiculo_id, $cliente_id, $funcionario_id, $vendido_em){

        $pg_pedidos = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pg_pedidos = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into veiculos_clientes (veiculo_id, cliente_id, funcionario_id, vendido_em)
        values('$veiculo_id', '$cliente_id', '$funcionario_id', '$vendido_em')";
          
        $pg_pedidos->exec($sql); 

    } 
 
?>