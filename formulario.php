<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validacion.js"></script>
    <title>Consulta</title>
</head>
<body>
    <h1 align="center">EJEMPLO DE FORMULARIO</h1>
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 bordado">
            <form action="php/conexion.php" method = "POST" onsubmit="return validar()" id="form1">
                <label for="">NOMBRE:</label><br>
                <input type="text" class="form form-control" id ="NOMBRE" name="NOMBRE"><br>
                <label for="">EDAD:</label><br>
                <input type="text" class="form form-control" id ="EDAD" name="EDAD"><br>
                <label for="">EMAIL</label>
                <input type="text" class="form form-control" id= "EMAIL" name="EMAIL"><br>
                <label for="">TELEFONO</label>
                <input type="text" class="form form-control" id = "TELEFONO" name="TELEFONO"><br>
                <label for=""> DIRECCION</label>
                <input type="text" class="form form-control" id="DIRECCION" name="DIRECCION"><br>
                <label for=""> CELULAR</label>
                <input type="text" class="form form-control" id="CELULAR" name="CELULAR"><br>
                <label for=""> AREA DE TRABAJO</label><br>
                <select required name="select1"id="select1">    
                    <option select> SELECCIONE UNO</option> 
                    <option value="EquiposElectromecanicos"> Equipos Electromecanicos</option>
                    <option value="EquiposElectromecanicosGestion">Equipos Electromecanicos Gestion</option>
                    <option value="GestionImplementación">Gestion Implementación</option>
                    <option value="Implementacion"> Implementacion</option>
                    <option value="RedTransporte"> Red De Transporte</option>
                    <option value="RedTransporteCalidadDatosRF">Red De Transporte RF - Calidad Red De Datos </option>
                    <option value="RF-CalidadDatos-RF-PlaneacionDiseño"> RF - Calidad De Datos RF Planeación De Diseño</option>
                </select>
                <input type="submit" value="Enviar" class="btn btn-primary float-right"><br>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>