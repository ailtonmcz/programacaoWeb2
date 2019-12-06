<?php 


    function SalvarVeiculo($fabricante, $cor, $ano, $portas, $modelo, $situacao, $novo, $preco, $placa){

        include_once('../../banco/conn/conn_pg.php');
            
        $sql = "insert into veiculos (fabricante, cor, ano, portas, modelo, situacao, novo, preco, placa)
        values('$fabricante', '$cor', '$ano', '$portas', '$modelo', '$situacao', '$novo', '$preco', '$placa')";
          
        $pgsql->exec($sql); 

    } 
 
?>

