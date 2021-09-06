<?php 
include('Persona.php');
class Instructor extends  Persona{

private $area;

function __construct($nombre, $documento, $correo, $area){
    parent::__construct($nombre, $documento, $correo);
    $this->area=$area;
}
function getNombre(){
    return $this->nombre;
}
function getArea(){
    return $this->area;
}
}


$ob=new Instructor("Evelio Nieves",123456,'inst1@sena.edu.co',"tics");
//echo '******'.$ob->area;

$ob->getArea();
echo $ob->getNombre();
?>