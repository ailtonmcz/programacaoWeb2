<?php 


    function SalvarUsuarios($funcionario_id, $username, $senha, $endereco, $setor){

        $pg_usuarios = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pg_usuarios = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into usuarios (funcionario_id, username, senha, endereco, setor) 
        values('$funcionario_id', '$username', '$senha', '$endereco', '$setor')";
          
        $pg_usuarios->exec($sql); 

    } 
 
?>