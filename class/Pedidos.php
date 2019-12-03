<?php 

class Pedidos{
      private $veiculo_id;
      private $cliente_id;
      private $funcionario_id;
      private $vendido_em;

     public function  __get($atributo){
         return $this->$atributo;   
     }

     public function __set( $atributo ,$valor ){
       $this->$atributo = $valor;
     }

    }

?>