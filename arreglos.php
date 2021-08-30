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
    function sumaVector($vector){
        $sum=0;
        for ($i=0; $i <count($vector) ; $i++) { 
                $sum+=$vector[$i];
            }
        return $sum; 
    }
    function promedioVector($vector){
        $sum=0;
        for ($i=0; $i <count($vector) ; $i++) { 
                $sum+=$vector[$i];
            }
        return $sum/count($vector); 
 }


    $vec=array();

    $vec2=[34,56,123,87,1];

    for ($i=0; $i < 10 ; $i++) { 
        $vec[$i]=rand(0,100);
    }

    for ($i=0; $i <count($vec) ; $i++) { 
        echo $vec[$i].', ';
    }

    echo '<br> la suma de vec2 es= <br>'.sumaVector($vec2);
    echo '<br> la suma de vec es= <br>'.sumaVector($vec);
    echo '<br> promedio de vec2 es= <br>'.promedioVector($vec2);
    echo '<br> promedio de vec es= <br>'.promedioVector($vec);


    // $sum=0;
// for ($i=0; $i <count($vec) ; $i++) { 
//         $sum+=$vec[$i];
//     }
// echo '<br> la suma es= <br>'.$sum;
// $sum2=0;
// for ($i=0; $i <count($vec2) ; $i++) { 
//     $sum2+=$vec2[$i];
// }
// echo '<br> la suma es= <br>'.$sum2;

    ?>
</body>
</html>