<?php

class administradorController extends Administrador{
    public function crear(){
        require_once('views/administrador/crear.php');
    }
    public function create(){
        parent::insertar(
        $_POST['nombres'],
        $_POST['apellidos'],
        $_POST['correo'],
        $_POST['documento'],
        $_POST['pass'],
        $_POST['fk_tipo_documento'],
        $_POST['fk_cargo'],
        $_POST['fk_rol'],
        $_POST['fk_genero']);
        
        header("location:?c=empleado&m=index");
    }

}


?>