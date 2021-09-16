<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Listar</title>    
</head>
<body>
    <div class="div">
    <table class="table">
            <caption>LISTADO DE APRENDICES</caption>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>DOCUMENTO</th>
                    <th>FORMACION</th>
                    <th>GENERO</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($Aprendices as $key) {
                    
                    echo "<tr><td>". $key->getNombre() . "</td>";
                    echo "<td>". $key->getDocumento() . "</td>";
                    echo "<td>". $key->getFormacion() . "</td>";
                    echo "<td>". $key->getSexo() . "</td></tr>";                   
                }?>
            </tbody>
    </table>
    </div>
</body>

</html>