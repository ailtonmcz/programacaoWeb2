<?php 

class Clientes{
      private $nome;
      private $cpf;
      private $endereco;

     public function  __get($atributo){
         return $this->$atributo;   
     }

     public function __set( $atributo ,$valor ){
       $this->$atributo = $valor;
     }

    }

?>