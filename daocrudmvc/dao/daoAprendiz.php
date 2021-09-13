<?php 
interface DaoAprendiz{
    public function registrar(Aprendiz $a);
    public function modificar(Aprendiz $a);
    public function eliminar(Aprendiz $a);
    //public function buscar($campo,$dato);
    public function listar();
}
?>