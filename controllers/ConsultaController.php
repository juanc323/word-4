<?php

class ConsultaController extends Consulta{
    
    public function index(){
        require_once ('views/consultar/consultar.php');
    }

    public function consulta(){
        require_once ('views/consultar/consultaEmpleado.php');
    }

}











?>