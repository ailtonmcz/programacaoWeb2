<?php 

class Usuarios{
      private $funcionario_id;
      private $username;
      private $senha;
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