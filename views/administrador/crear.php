<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">    
    <title>Crear Empleado</title>
</head>
<body background="assets/all/img/3.png" id="bodycrear">
<div class="container">
    <div class="row">
        <div class="col-md-7  offset-md-2">
        <h1 id="h1admin">REGISTRAR EMPLEADO</h1>
            <form action="?c=administrador&m=create" method="post" id="form_crearempleado">
                <div class="form-group">
                <h3>Nombres</h3>
                <input type="text" class="form-control" placeholder="Michael..." name="nombres" require>
                <h3>Apellidos</h3>
                <input type="text" class="form-control" placeholder="Rodriguez..." name="apellidos" require>
                <h3>Correo</h3>
                <input type="text" class="form-control" placeholder="Mda....@gmail.com" name="correo" require>
                <h3>Contraseña</h3>
                <input type="password" class="form-control" placeholder="***********" name="pass" require> 
                <h3>Documento</h3>
                <input type="number" class="form-control" placeholder="100215482..." name="documento" require>
                <h3>Tipo Documento</h3>
                <select class="form-control" name="fk_tipo_documento" id="fk_tipo_documento" require>
                <?php $tipoDocumento = parent::consultaTipoDocumento();
                 foreach($tipoDocumento as $documento){ ?>
                    <option value="<?php echo $documento->id_tipo_documento; ?>"><?php echo $documento->tipo_documento; ?></option>
                 <?php } ?>
                </select>
                <h3>cargo</h3>
                <select class="form-control" name="fk_cargo" id="fk_cargo" require>
                <?php $cargos = parent::consultaCargo();
                 foreach($cargos as $cargo){ ?>
                    <option value="<?php echo $cargo->id_cargo; ?>"><?php echo $cargo->cargo; ?></option>
                 <?php } ?>
                </select>
                <h3>Rol</h3>
                <select class="form-control" name="fk_rol" id="fk_rol" require>
                <?php $roles = parent::consultaRol();
                 foreach($roles as $rol){ ?>
                    <option value="<?php echo $rol->id_roles; ?>"><?php echo $rol->rol; ?></option>
                 <?php } ?>
                </select>
                <h3>Genero</h3>
                <select class="form-control" name="fk_genero" id="fk_genero" require>
                <?php $generos = parent::consultaGenero();
                 foreach($generos as $genero){ ?>
                    <option value="<?php echo $genero->id_genero; ?>"><?php echo $genero->genero; ?></option>
                 <?php } ?>
                </select>
                <br>
                <ul>
                    <button class="btn btn-dark" type="submit">Registrar</button>
                    <a href="?c=empleado&m=index" class="btn btn-dark">Regresar</a>
                </ul>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>