<?php

class EmpleadoController extends Empleado{
    public function index(){
        require_once('views/Empleado/index.php');
    }

    public function store(){
        $Documento = $_POST['Documento'];
        $fecha = date('Y-m-d');

        $hora = date('G:i:s');

        $Usuario = parent::consultarUsuarioPorDocumento($Documento);
        $Horario = parent::consultarHorarioPorDocumento($Usuario->id_usuarios);
        $fecha_consultada = parent::consultarFechaPorFechaActual($fecha);


        if ($fecha == $fecha_consultada->fecha && $Usuario->id_usuarios == $Horario->fk_usuario){
             echo "ERROR";
             }else{
                parent::stored($Usuario->id_usuarios, $fecha , $hora);
                header('location:?c=Empleado&m=index');            
        } 
    }

    public function storedExit(){
        $Documento = $_POST['Documento'];
        $fecha = date('Y-m-d');
        $hora_salida = date('G:i:s');


        $Usuario = parent::consultarUsuarioPorDocumento($Documento);
        $fk_usuario = $Usuario->id_usuarios;
        $ValidateExit = parent::ValidateExit($fk_usuario, $fecha);
        print_r($ValidateExit);
        if($ValidateExit->salida == "00:00:00"){
            parent::storeExit($hora_salida, $fecha, $Usuario->id_usuarios );
            header('location:?c=Empleado&m=index');
        }else{
            header("location:?c=Empleado&m=index&DateExists=true");
        }
        // $Horario = parent::consultarHorarioPorDocumento($Usuario->id_usuarios);
        // $fecha_consultada = parent::consultarFechaPorFechaActual($fecha);

    }

}

?>