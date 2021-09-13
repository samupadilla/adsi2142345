<?php 
include('animal.php');

class Pez extends Animal implements Locomocion{
    public $tipoAgua;
    public $tamanio;
    function __construct($nombre,$especie,$habitat,$tipoAgua,$tamanio){
        parent::__construct($especie,$habitat,$nombre);
        $this->tipoAgua=$tipoAgua;
        $this->tamanio=$tamanio;
    } 
    function verDesplazamiento()
    {
        echo 'El pez '.$this->nombre.' se desplaza dependiendo de '.$this->habitat.'<br>';
    }  
    function escucharSonido(){    } 
}

class Ave extends Animal implements Locomocion{
    public $pico;
    public $pata;
    function __construct($nombre,$especie,$habitat,$pico,$pata){
        parent::__construct($especie,$habitat,$nombre);
        $this->pico=$pico;
        $this->pata=$pata;
    }

    function verDesplazamiento(){
        echo 'El '.$this->nombre.' vuela y se desplaza usando su pata '.$this->pata.'<br>';
    }
    function escucharSonido(){
        'El '.$this->nombre.' emite el sonido dependiendo del tipo de pico, que es...'.$this->pico.'<br>';
    }
}

$ave1=new Ave('aguila','tradicional','montañoso','rapaz','cazadora');
$pez1=new Pez('payaso','tropical','oceano','salada','pequeño');
$ave1->verDesplazamiento();
$ave1->escucharSonido();
$pez1->verDesplazamiento();
?>