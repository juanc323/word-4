<?php

// $string = 'Hola Felipe';
// $int = 12312313;
// $float = 1.32;
// $bool = true;

class Empleado extends DB{

    public function all($id_usuarios){
        try{
            $stm=parent::conectar()->prepare("SELECT * FROM usuarios WHERE id_usuarios = '$id_usuarios' " );
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(exception $e) {
            die($e->getMessage());
        }
    }
    
    public function consultarUsuarioPorDocumento($Documento){
        try{
            $stm=parent::conectar()->prepare("SELECT * FROM usuarios WHERE documento = $Documento " );
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(exception $e) {
            die($e->getMessage());
        }
    }

    public function consultarHorarioPorDocumento($fk_usuario){
        try{
            $stm=parent::conectar()->prepare("SELECT * FROM Horario WHERE fk_usuario = $fk_usuario ");
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(exception $e) {
            die($e->getMessage());
        }
    }


    public function consultarFechaPorFechaActual($fecha){
        try{
            $stm=parent::conectar()->prepare("SELECT fecha FROM Horario WHERE fecha = '$fecha' " );
            $stm->execute();
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(exception $e) {
            die($e->getMessage());
        }
    }

    public function stored($fk_usuarios, $fecha, $hora){
        try{
            $stm=parent::conectar()->prepare("INSERT INTO horario(fk_usuario, fecha, entrada) VALUES('$fk_usuarios', '$fecha', '$hora')" );
            $stm->execute();
        }catch(exception $e) {
            die($e->getMessage());
        }
    }
    public function storeExit($hora_salida, $fecha, $fk_usuario){
        try{
            $stm=parent::conectar()->prepare("UPDATE horario SET  salida = '$hora_salida' WHERE fecha = '$fecha' AND fk_usuario = '$fk_usuario' " );
            $stm->execute();
        }catch(exception $e) {
            die($e->getMessage());
        }
    }

    public function ValidateExit($fk_usuario, $fecha){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM horario WHERE fk_usuario = $fk_usuario AND fecha = '$fecha'");
            $stm->execute();
            $data = $stm->fetch(PDO::FETCH_OBJ);
            return $data;
        }   
        catch(Exception $error){
            die("Error".$error->getMessage());
        }
    }
}




?>