<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/all/css/style.css">
    <link rel="stylesheet" href="assets/libs/bootstrap-4/css/bootstrap.css">
    <title>Empleados</title>
</head>
<body background="assets/all/img/login-sena.jpg" class="fondo">
    

<div class="container">
    <div class="row">
        <div class="col-md-12 styldiv1">
            <div class="col-md-5">
                <h1 class="titulo">Registro entrada y salida</h1>
            </div>
            <div class="col-md-5 offset-md-8">
                <a href="" class="colortext">Administrador |</a>
                <a href="?c=consulta&m=index" class="colortext">consultar</a>
            </div>
        </div>

        <div class="col-md-5 margen1">
            <form action="?c=Empleado&m=store" method="post">
                <label for=""><b>Registrar entrada</b></label>
                <br>
                <label for=""><b>Documento</b></label>
                <br>
                <input type="number" placeholder="1000473..." name="Documento" required class="form-control "> 
                <br>
                <button class="btn btn-success">Ingresar</button>
            </form>
        </div>

        <div class="col-md-5 margen1">

            <label for=""><b>Registrar Salida</b></label>
            <form action="?c=Empleado&m=storedExit" method="post">
            
            <label for=""><b>Documento</b></label>
            <br>
            <input type="text" placeholder="1000473..." name="Documento" required class="form-control "> 
            <br>
            <button class="btn btn-success" type="submit">Registrar Salida</button>    
            <?php  if(isset($_REQUEST['DateExists'])): ?>
                <p class="text-danger">El registro ya existe! :(</p>        
            <?php endif; ?>
            </form>
            

            
        </div>  
    </div>
</div>






</body>
</html>