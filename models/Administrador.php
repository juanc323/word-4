<?php

class Administrador extends DB{
    
    public function consultausuarios(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM usuarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultaTipoDocumento(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM tipo_documento");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultaCargo(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM cargos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultaGenero(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM genero");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function consultaRol(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM roles");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
    

    public function insertar($nombres, $apellidos, $correo, $documento, $pass, $fk_tipo_documento, $fk_cargo, $fk_rol, $fk_genero){
        try{
                $stm=parent::conectar()->prepare("INSERT INTO usuarios(nombres,apellidos,correo,documento,contraseña,fk_tipo_documento,fk_cargo,fk_rol,fk_genero)values(?,?,?,?,?,?,?,?,?)");
                $stm->bindParam(1,$nombres,PDO::PARAM_STR);
                $stm->bindParam(2,$apellidos,PDO::PARAM_STR);
                $stm->bindParam(3,$correo,PDO::PARAM_STR);
                $stm->bindParam(4,$documento,PDO::PARAM_INT);
                $stm->bindParam(5,$pass,PDO::PARAM_STR);
                $stm->bindParam(6,$fk_tipo_documento,PDO::PARAM_INT);
                $stm->bindParam(7,$fk_cargo,PDO::PARAM_INT);
                $stm->bindParam(8,$fk_rol,PDO::PARAM_INT);
                $stm->bindParam(9,$fk_genero,PDO::PARAM_INT);
                $stm->execute();
        }catch(Exteption $e){
            die($e->getMessage());
        }
    }
}
?>  