<?php
    $Documento = $_POST['Documento'];
    $usuario = parent::consultarUsuarioPorDocumento($Documento);
    
    $horario = parent::consultarHorario($usuario->id_usuarios);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <title>Consulta</title>
</head>

<body background="assets/all/img/login-sena.jpg" class="fondo">
    

<div class="container">
    <div class="row">
        <div class="col-md-12 styldiv1">
            <div class="col-md-5">
                <h1 class="titulo">Registro entrada y salida</h1>
            </div>
            <div class="col-md-5 offset-md-8">
                <a href="?c=Empleado&m=index" class="colortext">Administrador |</a>
                <a href="?c=consulta&m=index" class="colortext">consultar</a>
            </div>
        </div>

       <center>
        <div class="col-md-5 margen1">
            <table class="table table-striped table-bordered ">
                <tr>
                    <th>NOMBRE</th>
                    <th>DOCUMENTO</th>
                    <th>HORA ENTRADA</th>
                    <th>HORA SALIDA</th>
                </tr>
                <?php foreach($horario as $j){ ?>
                <tr>
                    <td><?php echo $j->nombres ?></td>
                    <td><?php echo $j->documento ?></td>
                    <td><?php echo $j->entrada ?></td>
                    <td><?php echo $j->salida ?></td>
                </tr>

                <?php } ?>
            </table>
        </div>
        </center>
</body>
</html>