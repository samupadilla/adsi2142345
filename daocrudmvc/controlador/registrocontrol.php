<?php 
 require('../dao/DaoAprendizImpl.php');
$dao=new DaoAprendizImpl();
$a=new Aprendiz("Henry Fals","852258","Documental","M");
//$dao->registrar($a);
 //echo '........'.var_dump($dao);
require('../vista/index.php');
?>