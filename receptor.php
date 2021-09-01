<?php 
$tam=$_POST['num'];
$numeros=array();
for ($i=0; $i < $tam; $i++) { 
    //$numeros[$i]=rand(0,100);
    //array_push($numeros,rand(0,100));
    array_push($numeros,($i*$i));
}
//for each
foreach ($numeros as $key) {
    echo $key.',  ';
}

?>