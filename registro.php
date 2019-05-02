<?php
require_once 'lib/conexion.php';
if (isset($_POST['nombre'])) {
    $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $apellidos = filter_var($_POST["apellidos"], FILTER_SANITIZE_STRING);
    $direccion = filter_var($_POST["direccion"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $pais = filter_var($_POST["pais"], FILTER_SANITIZE_STRING);
    $ciudad = filter_var($_POST["ciudad"], FILTER_SANITIZE_STRING);
    $password1 = filter_var($_POST["password1"], FILTER_SANITIZE_STRING);
    $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
    $errores = array();
    if ($nombre == "") {
        $errores[0] = "El nombre no puede estar vacio";
    } elseif ($apellidos == "") {
        $errores[1] = "Los apellidos no pueden estar vacio";
    } elseif ($direccion == "") {
        $errores[2] = "La direccion no puede estar vacio";
    } elseif ($email == "") {
        $errores[3] = "El email no puede estar vacio";
    } elseif ($pais == "") {
        $errores[4] = "El pais no puede estar vacio";
    } elseif ($ciudad == "") {
        $errores[4] = "La ciudad no puede estar vacio";
    } elseif ($password1 == "") {
        $errores[5] = "La contraseña no puede estar vacio";
    } elseif ($password1 != $password2) {
        $errores[6] = "Las contraseñas deben ser iguales";
    } else {
        if(validarCorreo($email,$conn)){
            $password1 = hash('sha512',$password1);
            $sql = "INSERT INTO usuarios (id,nombre , apellidos, email,direccion,pais,ciudad,password)";
            $sql .= "VALUES (0,'$nombre','$apellidos','$email','$direccion','$pais','$ciudad','$password1')";
            if (mysqli_query($conn, $sql)) {
                header('Location: login.php');
            } else {
                var_dump($errores);
            }
        }
        else{
            $errores[7]="El correo ya se encuentra en uso";
        }
    }
}

function validarCorreo($email,$conn){
    $sql = "SELECT * FROM usuarios where email='$email'";
    $r = mysqli_query($conn,$sql);
    $n = mysqli_num_rows($r);
    $flag = ($n==0) ? true:false;
    return $flag;
}

require 'views/registro.view.php';
