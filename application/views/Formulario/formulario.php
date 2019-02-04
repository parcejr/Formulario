<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Consulta</title>
</head>
<body>    
    <div class="row container" id="app">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 bordado">
            <h1 class="text">TRANSMISIÓN</h1> <br>
            <form  id="form1" @submit="revisar" action="index.php/Ejecutar/guardar" method="POST">
                <!-- NOMBRE -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text celeste"><i class="fas fa-user yellow"></i></span>
                    </div>
                    <input type="text" class="form form-control" placeholder="Nombre y Apellido" id ="NOMBRE" name="nombre" v-model="nombre"><br>
                </div><br>
                <!-- EDAD -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-sort-numeric-up"></i></span>
                    </div>
                    <input type="number" class="form form-control" placeholder="EDAD" id ="EDAD" name="edad" v-model.number="edad" > 
                </div><br>
                <!-- EMAIL -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text celeste"> <i class="fas fa-at yellow"></i></span>
                    </div>
                    <input type="text"  placeholder="EMAIL" class="form form-control" id= "EMAIL" name="email" v-model="email" ><br>
                </div> <br>
                <!-- TELEFONO -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="number" :class="['form','form-control']" placeholder="TELEFONO" id = "TELEFONO" name="telefono" v-model="telefono"><br>
                </div><br>
                <!-- DIRECCIÓN -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text celeste"><i class="fas fa-map-marker-alt yellow"></i></span>
                    </div>
                    <input type="text" class="form form-control" placeholder="DIRECCIÓN" id="DIRECCION" name="direccion" v-model="direccion" ><br>
                </div> <br>
                <!-- CELULAR -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                    </div>
                    <input type="number" class="form form-control" placeholder="NUMERO DE CELULAR" id="CELULAR" name="celular" v-model="celular" ><br>
                </div> <br>
                <!-- AREA DE TRABAJO -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" for ="select1">Area De Trabajo</span>
                    </div>
                    <select required name="area_trabajo" id="select1"  v-model="selected" class="custom-select">
                        <option :value="valor[0]" selected > SELECCIONE UNA OPCION</option>
                        <option :value="valor[1]"> Equipos Electromecanicos</option>
                        <option :value="valor[2]">Equipos Electromecanicos Gestion</option>
                        <option :value="valor[3]">Gestion Implementación</option>
                        <option :value="valor[4]"> Implementacion</option>
                        <option :value="valor[5]"> Red De Transporte</option>
                        <option :value="valor[6]">Red De Transporte RF - Calidad Red De Datos </option>
                        <option :value="valor[7]"> RF - Calidad De Datos RF Planeación De Diseño</option>
                    </select>
                </div><br>
                <div class="alert alert-warning" v-for="error of errores">{{error}}</div>
                <input type="submit" value="Enviar" class="btn btn-primary float-right">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
    <script src="assets/js/validacion.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>