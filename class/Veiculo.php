<?php 

class Veiculo{
      private $fabricante ;
      private $cor;
      private $ano;
      private $modelo;
      private $situacao;   
      private $novo;
      private $preco;
      private $placa;

     public function  __get($atributo){
         return $this->$atributo;   
     }

     public function __set( $atributo ,$valor ){
       $this->$atributo = $valor;
     }

    }

?>