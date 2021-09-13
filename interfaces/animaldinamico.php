<?php 
class Animal{
    public $especie;
    public $habitat;
    public $continente;
    public $tipo;

    function __construct($especie,$habitat,$continente,$tipo)
    {
        $this->especie=$especie;
        $this->habitat=$habitat;
        $this->continente=$continente;
        $this->tipo=$tipo;

    }

    function getter($atributo){
        return $this->$atributo;
    }

    function setter($atributo,$valor){
        $this->$atributo=$valor;
    }
}

// $ob=new Animal('mamiferos','terrestres','america','domestico');
// echo $ob->getter('tipo');
// echo $ob->getter('especie');
// echo $ob->getter('continente');
// echo $ob->getter('habitat');
// $ob->setter('continente','europa');
// echo '<br>'.$ob->getter('continente');
?>