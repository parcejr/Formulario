<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="/../Formulario/assets/css/style_tabla.css">
    <title>TABLA</title>
</head>
<body>   
    <div class="container"> 
        <h1>Usuarios</h1>
        <br>
        <table id="book-table" class="table table-striped table-bordered TLetra" style="width:100%">
            <thead>
                <tr class="trs">
                    <th style = "display: none">#</th>
                    <th>NOMBRE</th>
                    <th>EDAD</th>
                    <th>EMAIL</th>
                    <th>TELEFONO</th>
                    <th>DIRECCIÓN</th>
                    <th>CELULAR</th>
                    <th>AREA DE TRABAJO</th>
                    <th>Editar y Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($arreglo as $row): ?>
                <tr>
                    <th style = "display: none"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['edad'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['direccion'] ?></td>
                    <td><?php echo $row['celular'] ?></td>
                    <td><?php echo $row['area_trabajo'] ?></td>
                    <th class="">
                        <div class="float-right">
                            <a class="edit" id="edit" title="EDITAR"><i class="fas fa-edit edit  mr-1 blue" title="EDITAR"></i></a>
                            <a id="delete" title="ELIMINAR" onclick="eliminar_registro(<?php echo $row['id'] ?>)"><i class="far fa-trash-alt red"></i></a>        
                        </div>
                    </th>    
                </tr>
            <?php endforeach ?>                    
            </tbody>
        </table> 
        <!-- MODAL -->
        <div class="modal fade bd-example-modal-lg" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg border border-primary rounder">
                <div class="modal-content formul container p-5">
                    <div class="modal-header">
                        <h1 class="textStyle">EDITAR</h1>
                    </div>
                    <form action="actualizar" @submit="validaciones" method = "POST" id="form1">
                        <div class="modal-body">
                            <input type="text" style="display:none" class="form form-control" id ="ID" name="id"> <br>

                            <input type="hidden" class="form form-control"  id ="NOMBRE_ant" name="nombre_ant">
                            <!-- NOMBRE -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user black"></i></span>
                                </div><br>
                                <input type="text" class="form form-control"  id ="NOMBRE" name="nombre"><br>
                            </div> <br>
                            <!-- EDAD -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text black"><i class="fas fa-sort-numeric-up"></i></span>
                                </div>
                                <input type="number" class="form form-control" id ="EDAD" name="edad"><br>
                            </div> <br>
                            <!-- EMAIL -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text black"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="text" class="form form-control" id= "EMAIL" name="email"><br>
                            </div><br>
                            <!-- TELEFONO -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone black"></i></span>
                                </div>
                                <input type="number" class="form form-control" id = "TELEFONO" name="telefono"><br>
                            </div> <br>
                            <!-- DIRECCIÓN -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt black"></i></span>
                                </div>
                                <input type="text" class="form form-control " id="DIRECCION" name="direccion"><br>
                            </div><br>
                            <!-- CELULAR -->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mobile-alt black"></i></span>
                                </div>
                                <input type="number" class="form form-control" id="CELULAR" name="celular"><br>
                            </div> <br>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text black">AREA DE TRABAJO</span>
                                </div>
                                <select  required  name="area_trabajo" class = "custom-select" id="select1">
                                    <option value="EquiposElectromecanicos"> Equipos Electromecanicos</option>
                                    <option value="EquiposElectromecanicosGestion">Equipos Electromecanicos Gestion</option>
                                    <option value="GestionImplementación">Gestion Implementación</option>
                                    <option value="Implementacion"> Implementacion</option>
                                    <option value="RedTransporte"> Red De Transporte</option>
                                    <option value="RedTransporteCalidadDatosRF">Red De Transporte RF - Calidad Red De Datos </option>
                                    <option value="RF-CalidadDatos-RF-PlaneacionDiseño"> RF - Calidad De Datos RF Planeación De Diseño</option>
                                </select>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="alert alert-danger mt-3" v-for="item of errores">
                                {{item}}
                            </div>
                            <input type="submit" id="envio" value="Actualizar" onclick = "actualizar()" class="btn btn-warning float-right mt-3"><br>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            tabla_contactos = $('#book-table').DataTable();
        });
        $('#book-table').on('click', 'a.edit',function (e) {
            const data = tabla_contactos.row( $(this).parents('tr') ).data();
            console.log(data)
            $('#formModal').modal('show');

            $('#ID').val(data[0])
            $('#NOMBRE').val(data[1])
            $('#NOMBRE_ant').val(data[1])
            $('#EDAD').val(data[2])
            $('#EMAIL').val(data[3])
            $('#TELEFONO').val(data[4])
            $('#DIRECCION').val(data[5])
            $('#CELULAR').val(data[6])
            $('#select1').val(data[7])
        });       
    </script> 
    <script src="/../Formulario/assets/js/validacion_editar.js"></script>
</body>
</html>