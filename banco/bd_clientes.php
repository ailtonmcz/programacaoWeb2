<?php 


    function SalvarClientes($nome, $cpf, $endereco){

        $pg_clientes = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pg_clientes = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into clientes (nome, cpf, endereco) values('$nome', '$cpf', '$endereco')";
          
        $pg_clientes->exec($sql); 

    } 
 
?>