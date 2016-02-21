<?php
class os{
private $idos;
private $idfuncionario;
private $idassociado;
private $idcliente;
private $dataemissao;//
private $dataentrega;//
private $status;
private $acessorios;
private $obs;
private $tipo;
private $garantia;
private $defeito;
private $laudotecnico;//
private $prazo;//

function setIdos($idos){
  $this->idos=$idos;
}
function setidFuncionario($idfuncionario){
  $this->idfuncionario=$idfuncionario;
}
function setIdassociado($idassociado){
  $this->idassociado=$idassociado;
}
function setidcliente($idcliente){
  $this->idcliente=$idcliente;
}
function setdataemissao($dataemissao){
  $this-$dataemissao=$dataemissao;
}
function setDataentrega($dataentrega){
  $this->dataentrega=$dataentre;
}
function setStatus ($status){
  $this->status=$status;
}
function setAcessorios($acessorios){
  $this->acessorios=$acessorios;
}
function setObs($obs){
  $this->obs=$obs;
}
function SetTipo($tipo){
  $this->tipo=$tipo;
}
function SetGarantia($garantia){
  $this->garantia=$garantia;
}
function SetDefeito($defeito){
  $this->defeito=$defeito;
}
function SetLaudoTecnico($laudotecnico){
  $this->laudotecnico=$laudotecnico;
}
function setPrazo($prazo){
  $this->prazo=$prazo;
}
//get

function getIdos(){
  return $this->idos;
}
function getidFuncionario(){
  return $this->idfuncionario;
}
function getdassociado(){
  return $this->idassociado;
}
function getidcliente(){
  return $this->idcliente;
}
function getdataemissao(){
  return $this->$dataemissao;
}
function getDataentrega(){
  return $this->dataentrega;
}
function getStatus (){
  return $this->status;
}
function getAcessorios(){
  return $this->acessorios;
}
function getObs(){
  return $this->obs;
}
function getTipo(){
  return $this->tipo;
}
function getGarantia(){
  return $this->garantia;
}
function getDefeito(){
  return $this->garantia;
}
function getLaudoTecnico(){
  return $this->laudotecnico;
}
function getPrazo(){
return $this->prazo;
}

}
?>
