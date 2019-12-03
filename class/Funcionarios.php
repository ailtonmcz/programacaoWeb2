<?php 

class Funcionarios{
      private $nome;
      private $cpf;
      private $endereco;
      private $setor;

     public function  __get($atributo){
         return $this->$atributo;   
     }

     public function __set( $atributo ,$valor ){
       $this->$atributo = $valor;
     }

    }

?>
