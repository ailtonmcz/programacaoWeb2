<?php 


    function SalvarFuncionarios($nome, $cpf, $endereco, $setor){

        $pg_funcionarios = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pg_funcionarios = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into funcionarios (nome, cpf, endereco, setor) values('$nome', '$cpf', '$endereco', '$setor')";
          
        $pg_funcionarios->exec($sql); 

    } 
 
?>