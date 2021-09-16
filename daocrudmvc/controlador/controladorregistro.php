<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vista/estilos.css">
    <title>Document</title>
</head>
<body>
<?php 
require('../vista/indexinsertar.php');
require('../dao/DaoAprendizImpl.php');
$dao=new DaoAprendizImpl();
if (isset($_GET['boton'])) {
    $nombre=$_GET['nombre'];
     $documento=$_GET['doc'];
     $formacion=$_GET['forma'];
     $sexo=$_GET['sexo']; 
     $a=new Aprendiz($nombre,$documento,$formacion,$sexo);
    $dao->registrar($a);
    echo "REGISTRO INSERTADO CON EXITO";    
}
           
?>    
</body>
</html>
