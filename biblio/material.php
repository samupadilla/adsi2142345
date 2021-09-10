<?php
class Material{
    public $nombre;
    public $editorial;

    function setNombre($nombre){
        $this->nombre=$nombre;        
    }
    function getNombre(){
        return $this->nombre;
    }
}

class Libro extends Material{
    public $autor;
    public $anio;
}
class Revista extends Material{
    public $volumen;
    public $numArticulos;
}
?>
