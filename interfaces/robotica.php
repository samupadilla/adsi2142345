<?php 
include('animal.php');
class Robot implements Locomocion{
    public $marca;
    public $tipo;
    function __construct($marca,$tipo){
        $this->marca=$marca;
        $this->tipo=$tipo;
    }
    function verDesplazamiento()
    {
        echo 'El robot '.$this->marca.'se desplaza según su tipo que es: '.$this->tipo;
    }
    function escucharSonido()
    {
        echo 'El robot '.$this->marca.'genera sonidos propios de los '.$this->tipo;
    }
}
$rob=new Robot('Samsung','drone');
$rob->escucharSonido();
$rob->verDesplazamiento();
?>