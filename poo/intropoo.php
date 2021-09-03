<?php

class Aprendiz{
    //atributos
    private $nombre;
    private $programa;
    private $ficha;
    //metodos
    function saludar(){
        echo "Hola, soy $this->nombre un aprendiz muy alegre<br>";
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

}
$galleta=new Aprendiz();
$galleta->setNombre("galletita");
//echo '...'.$galleta->nombre;//nombre tendría que ser público

$ob1=new Aprendiz();
$ob1->setNombre("Maria");
echo 'Me llamo '.$ob1->getNombre();
$ob1->saludar();
$ob2=new Aprendiz();
$ob2->setNombre("Pedro");
echo 'Me llamo '.$ob2->getNombre();
$ob2->saludar();
$ob3=new Aprendiz();
$ob3->setNombre("Jose");
echo 'Me llamo '.$ob3->getNombre();
$ob3->saludar();

//var_dump($objeto);
?>
