<?php

class Aprendiz{
    //atributos
    private $nombre;
    private $programa;
    private $ficha;
    //metodos
    function __construct($nombre, $programa, $ficha)
     {
         $this->nombre=$nombre;
         $this->programa=$programa;
         $this->ficha=$ficha;
        //echo 'Se activo el constructor <br>';
    }
    function saludar(){
        echo "Hola, soy $this->nombre un aprendiz muy alegre<br>";
    }

    function setNombre($nombre){
        $this->nombre=$nombre;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setPrograma($programa){
        $this->programa=$programa;
    }

    function getPrograma(){
        return $this->programa;
    }

    function setFicha($ficha){
        $this->ficha=$ficha;
    }

    function getFicha(){
        return $this->ficha;
    }

}
$galleta=new Aprendiz("Pedro Diaz","adsi",2142329);
//$galleta->setNombre("galletita");
//echo '...'.$galleta->nombre;//nombre tendría que ser público

$ob1=new Aprendiz("Maria Suarez","contabilidad",2145629);
//$ob1->setNombre("Maria");
echo 'Me llamo '.$ob1->getNombre();
echo 'estudio :'.$ob1->getPrograma();
$ob1->saludar();
$ob2=new Aprendiz("Marina Ochoa","cosmetología",2002329);
//$ob2->setNombre("Pedro");
echo 'Me llamo '.$ob2->getNombre();
$ob2->saludar();
//***************************** */
$ob3=new Aprendiz("Hugo Londoño","recursos humanos",2102300);
//$ob3->setNombre("Jose");
echo 'Me llamo '.$ob3->getNombre();
$ob3->saludar();
$ob3->setPrograma("ADSI");
$ob3->setFicha(2142345);
echo '<br>programa de ob3 '.$ob3->getPrograma();
//var_dump($objeto);
?>
