<?php 


    function SalvarVeiculos_caracteristicas($veiculo_id, $descricao ){

        $pg_veic_carects = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pg_veic_carects = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into veiculos_caracteristicas (veiculo_id, descricao) values('$veiculo_id',  '$descricao')";
          
        $pg_veic_carects->exec($sql); 

    } 
 
?>