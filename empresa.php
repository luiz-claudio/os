<?php
class empresa{
private $nome;
private $endereco;
private $telefone;
private $email;
private $celular;
private $site;


//set



function setNome($nome){
$this->nome=$nome;
}

function setEndereco($endereco){
$this->endereco=$endereco;
}

function setTelefone($telefone){
$this->telefone=$telefone;
}


  function setEmail($email){
$this->email =$email;

}

function setCelular($celular){
  $this->celular=$celular;
}

function setSite($site){
$this->site=$site;

}
//get


function getNome(){
return $this->nome;
}

function getEndereco(){
  return $this->endereco;
}
function getTelefone(){
  $this->telefone;
}
function getsetEmail(){
  return $this->email;
}
function getcelular(){
  return $this->celular;
}
function getSite(){
  return $this->site;
}

//consulta

function cadastar(){
echo "teste excluindo"."</br>";
}

function consultar(){
echo "teste consultando";
}

function excluir(){
  echo "teste cadastrando";

}







}


?>
