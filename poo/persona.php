<?php 
class Persona{
    protected $nombre;
    private $documento;
    private $correo;
function __construct($nombre,$documento, $correo){
    $this->nombre=$nombre;
    $this->documento=$documento;
    $this->correo=$correo;
}

}

?>