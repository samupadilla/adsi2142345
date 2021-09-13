<?php
class Aprendiz{
private $nombre;
private $documento;
private $formacion;
private $sexo;

function __construct($nombre,$documento,$formacion,$sexo){
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->formacion=$formacion;
    $this->sexo=$sexo;
}

function getNombre() {
    return $this->nombre;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function getDocumento() {
    return $this->documento;
}

function setDocumento($documento) {
    $this->documento = $documento;
}

function getFormacion() {
    return $this->formacion;
}

function setFormacion($formacion) {
    $this->formacion = $formacion;
}

function  getSexo() {
    return $this->sexo;
}

function  setSexo($sexo) {
    $this->sexo = $sexo;
}

}
