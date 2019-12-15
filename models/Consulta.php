<?php
    class Consulta extends DB{

        public function consultarUsuarioPorDocumento($Documento){
            try{
                $stm=parent::conectar()->prepare("SELECT * FROM usuarios WHERE documento = ?");
                $stm->bindParam(1,$Documento,PDO::PARAM_STR);
                $stm->execute();
                return $stm->fetch(PDO::FETCH_OBJ);
            }catch(exception $e) {
                die($e->getMessage());
            }
        }

        public function consultarHorario($fk_usuario){
            try{
                $stm=parent::conectar()->prepare("SELECT * FROM horario INNER JOIN usuarios WHERE horario.fk_usuario = usuarios.id_usuarios AND fk_usuario = ?");
                $stm->bindParam(1,$fk_usuario,PDO::PARAM_STR);
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }catch(exception $e) {
                die($e->getMessage());
            }
        }
    }
?>