<?php
    $database = 'mysql:host=localhost;dbname=formulario';
    $user = 'root';
    $pass = '';

try{
    $conect = new PDO($database,$user,$pass);
    echo 'conectado';
}catch(PDOException $e){
    echo 'error' .$e -> getMessage();
}
if($_POST){
    $nombre = $_POST['NOMBRE'];
    $edad = $_POST['EDAD'];
    $email = $_POST['EMAIL'];
    $telefono = $_POST['TELEFONO'];
    $direccion = $_POST['DIRECCION'];
    $celular = $_POST['CELULAR'];
    $select = $_POST['select1'];

    $agregar = $conect -> prepare('INSERT INTO campos(nombre,edad,email,telefono,direccion,celular,area_trabajo)  VALUES (?,?,?,?,?,?,?)');
    $agregar -> execute(array($nombre,$edad,$email,$telefono,$direccion,$celular,$select));
}
?>