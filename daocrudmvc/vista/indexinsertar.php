<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
    <form action="../controlador/controladorregistro.php", method="GET">
    <label for="">NOMBRE</label>    
    <input type="text" name="nombre" id="nombre" class="form-control">
    
    <label for="">DOCUMENTO</label>    
    <input type="text" name="doc" id="doc" class="form-control">
    
    <label for="">FORMACION</label>    
    <input type="text" name="forma" id="forma" class="form-control">
    
    <label for="">SEXO</label>    
    <input type="text" name="sexo" id="sexo">
    <input type="submit" name="boton" value="Insertar Registro" class="btn btn-primary">
    </form>
    </div>     
</body>
</html>