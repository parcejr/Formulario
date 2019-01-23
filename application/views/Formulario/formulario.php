<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Consulta</title>
</head>
<body>
    
    <div class="row container" id="app">
        <div class="col-md-3"></div>
        <div class="col-md-6 bordado">
            <h1 align="center">TRANSMISIÓN</h1>
            <form  id="form1" @submit="revisar" action="index.php/Ejecutar/guardar" method="POST">
                <label for="NOMBRE">NOMBRE:</label><br>
                <input type="text" class="form form-control" id ="NOMBRE" name="nombre" v-model="nombre" ><br>
                <label for="EDAD">EDAD:</label><br>
                <input type="number" class="form form-control" id ="EDAD" name="edad" v-model="edad" > <br>
                <label for="EMAIL">EMAIL</label>
                <input type="text"  class="form form-control" id= "EMAIL" name="email" v-model="email" ><br>
                <label for="TELEFONO">TELEFONO</label>
                <input type="number" class="form form-control" id = "TELEFONO" name="telefono" v-model.number="telefono"><br>
                <label for="DIRECCION"> DIRECCION</label>
                <input type="text" class="form form-control" id="DIRECCION" name="direccion" v-model="direccion" ><br>
                <label for="CELULAR"> CELULAR</label>
                <input type="number" class="form form-control" id="CELULAR" name="celular" v-model.number="celular" ><br>
                <label for="select1"> AREA DE TRABAJO</label><br>
                <select required name="area_trabajo" id="select1"  v-model="selected" class="custom-select mb-5">
                    <option value="EquiposElectromecanicos"> Equipos Electromecanicos</option>
                    <option value="EquiposElectromecanicosGestion">Equipos Electromecanicos Gestion</option>
                    <option value="GestionImplementación">Gestion Implementación</option>
                    <option value="Implementacion"> Implementacion</option>
                    <option value="RedTransporte"> Red De Transporte</option>
                    <option value="RedTransporteCalidadDatosRF">Red De Transporte RF - Calidad Red De Datos </option>
                    <option value="RF-CalidadDatos-RF-PlaneacionDiseño"> RF - Calidad De Datos RF Planeación De Diseño</option>
                </select> 
                <div class="alert alert-warning" v-for="error of errores">{{error}}</div>
                <input type="submit" value="Enviar" class="btn btn-primary float-right"><br>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <script src="assets/js/validacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>