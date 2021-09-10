<?php
include('material.php'); 
class Biblioteca{
    public $coleccion=array();  
          
    function agregar($material){
        array_push($this->coleccion,$material);
    }
//var_dump función de php que muestra el tipo
//de dato y su estructura.

    function verColeccion(){               
        foreach ($this->coleccion as $key) {
        echo $key->getNombre().', ';
        }
    }
}

$l1=new Libro();
$l1->setNombre('el principito');
$l2=new Libro();
$l2->setNombre('Maria');
$r1=new Revista();
$r1->setNombre('PCmagazine');
$r2=new Revista();
$r2->setNombre('Maria');

$biblio =new Biblioteca();
$biblio->agregar($l1);
$biblio->agregar($l2);
$biblio->agregar($r1);
$biblio->agregar($r2);
$biblio->verColeccion();



?>