<?php
function Sumdivisores($num){
    $suma=0;
    if (is_numeric($num)) {
        for ($i=1; $i <=$num ; $i++) { 
        if ($num%$i==0) {
            $suma+=$i;
        }
        }
        return $suma;
    }else{
        throw new Exception('Debe ingrar un numero');
    }    
}

try{
echo Sumdivisores(28);
}catch(Exception $x){
    echo $x->getMessage();
    echo '<br>Vuelva a intentar';
}

try {
    $op = 10 / 0;
    echo $op;
} catch (Error $obj) {
    echo $obj->getMessage();
}

echo 'soy la última linea del programa';
