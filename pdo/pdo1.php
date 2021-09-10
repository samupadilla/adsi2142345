<?php 
//PDO= PHP Data Objects
$dsn='mysql:host=localhost;dbname=adsi';
$usuario='root';
$psw='';
$cnx='';
try{
$cnx=new PDO($dsn,$usuario,$psw);
$statement=$cnx->prepare('select * from aprendiz');
$statement->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}
//var_dump($cnx);

//var_dump($statement);
//print_r($statement);
foreach ($statement as $key) {
    echo $key[0].'<br>';
}
echo 'Linea final EOF php'
?>