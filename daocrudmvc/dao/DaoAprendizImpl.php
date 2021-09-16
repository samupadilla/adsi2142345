<?php
include('daoAprendiz.php');
include ('../conexion/conexion.php');
include ('../modelo/Aprendiz.php');

class DaoAprendizImpl extends Conexion implements DaoAprendiz{
   
    
    public function registrar(Aprendiz $a){ 
        try{
        if ($this->getCnx()!=null) {
        $nombre=$a->getNombre();
        $documento=$a->getDocumento();
        $formacion=$a->getFormacion();
        $sexo=$a->getSexo();
        $sql="insert into aprendiz values(?,?,?,?)";
        $stmt=$this->getCnx()->prepare($sql);
        $stmt->execute([$nombre,$documento,$formacion,$sexo]);        
        } else {
            echo $this->getCnx().' Es nulo <br>';
        }
    }catch(PDOException $p){
        echo $p->getMessage().'***********************';
    }
                       
    }    
    public function modificar(Aprendiz $a){        
        $nombre=$a->getNombre();
        $documento=$a->getDocumento();
        $formacion=$a->getFormacion();
        $sexo=$a->getSexo();
        $stmt=$this->getCnx()->prepare("UPDATE aprendiz " +
        "SET nombre =$nombre," +
        "formacion =$formacion," +
       "sexo = $sexo" +
        "where documento =$documento");
        $stmt->execute();        
    }

    public function eliminar(Aprendiz $a){        
        $documento=$a->getDocumento();
        $stmt=$this->getCnx()->prepare("delete from aprendiz where documento=$documento");
        $stmt->execute();        
    }
//public function listar();
public function listar(){
    $lista = null;
    try{    
        $stmt = $this->getCnx()->prepare("select * from aprendiz");
        $lista = array();
        $stmt->execute();
        foreach ($stmt as $key ) {           
            $a = new Aprendiz(null,null,null,null);
            $a->setNombre($key['nombre']);
            $a->setDocumento($key['documento']);
            $a->setFormacion($key['formacion']);
            $a->setSexo($key['sexo']);           
            array_push($lista,$a);            
        }        
        //$this->getCnx()->close();
    }catch(PDOException $e){
        $e->getMessage().'error en listar de DaoAprendizImpl';
    } 
        return $lista;       
    }       
    //public function buscar($campo,$dato);
    
}
?>
