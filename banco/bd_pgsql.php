<?php 


    function SalvarVeiculo($fabricante, $cor, $ano, $portas, $modelo, $situacao, $novo, $preco, $placa){

        $pgdb = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
        try {
            $pgdb = new PDO("pgsql:host=balarama.db.elephantsql.com port=5432 dbname=ajdemjnu user=ajdemjnu password=T1ZJIpsDUwwt-brNM8u2wX6x_ZESPTtU");
         } catch (PDOException  $e) {
            print $e->getMessage();
         }
            
        $sql = "insert into veiculos (fabricante, cor, ano, portas, modelo, situacao, novo, preco, placa)
        values('$fabricante', '$cor', '$ano', '$portas', '$modelo', '$situacao', '$novo', '$preco', '$placa')";
          
        $pgdb->exec($sql); 

    } 
 
?>

