<?php
class associado extends empresa{
private $idassociado;


function setIdassociado($idassociado){
$this->idassociado->$idassociado;
  }


  function getIdassociado(){
    return $this->idassociado;
  }


  function cadastar(){
  //echo "assiciado teste excluindo"."</br>";
  echo parent:: getNome()."</br>"."teste";
  }

  function consultar(){
  echo "teste consultando";
  }

  function excluir(){
    echo "teste cadastrando";

  }







}

?>
