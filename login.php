<?php
require_once 'lib/conexion.php';
if(isset($_POST["email"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = hash("sha512",$password);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password2'";
    $r = mysqli_query($conn,$sql);
    $n = mysqli_num_rows($r);
    if($n==1){
        //Pasamos los datos a un objeto
        $usuario = mysqli_fetch_assoc($r);
        //Iniciamos la sesion
        session_start();
        //Creamos la variable de sesion
        $_SESSION['usuario']=$usuario;
        header('location:index.php');
    }
    else{
        $error = "Error en el login";
    }
}

require 'views/login.view.php';