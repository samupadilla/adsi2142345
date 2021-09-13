
<?php  
class Animal{
    public $especie;
    public $habitat;
    public $nombre;
    
    function __construct($especie,$habitat,$nombre)
    {
        $this->especie=$especie;
        $this->habitat=$habitat;        
        $this->nombre=$nombre;   

    }
    function getter($atributo){
        return $this->$atributo;
    }

    function setter($atributo,$valor){
        $this->$atributo=$valor;
    }
}

interface Locomocion{
    function verDesplazamiento();
    function escucharSonido();
}
?>