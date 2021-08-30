<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'Comenzamos el desarrollo de software gestionado con GIT y Github';
    $arreglo=array();
    $arreglo[0]=100;
    $arreglo[1]='sena';
    $arreglo[2]=3.5;
    $arreglo2=['uno',2,3.0,'cuatro'];
echo '<br>';
echo 'Tamaño del arreglo con función count:'.count($arreglo);
echo '<br>';
for ($i=0; $i < count($arreglo) ; $i++) { 
    echo $arreglo[$i].'<br>';
}
echo 'ciclo for <br>';
for ($i=0; $i < count($arreglo2) ; $i++) { 
    echo $arreglo2[$i].'<br>';
}

$j=0;

echo 'ciclo while <br>';
while ($j < count($arreglo)) {    
    echo $arreglo[$j].'<br>';
    $j++;
}

?>
</body>
</html>