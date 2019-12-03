<?php 

class Veiculos_caracteristicas{
      private $veiculo_id;
      private $descricao;
      

     public function  __get($atributo){
         return $this->$atributo;   
     }

     public function __set( $atributo ,$valor ){
       $this->$atributo = $valor;
     }

    }

?>