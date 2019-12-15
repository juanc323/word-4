<?php

class Login extends DB{

    public function login(){
        try{
            $stm = parent::conectar()->prepare("SELECT * FROM usuarios");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}

?>