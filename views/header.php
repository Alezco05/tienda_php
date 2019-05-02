<?php
session_start();

if(isset($_SESSION['usuario'])){
    $nombre = $_SESSION['usuario']['nombre'];
    $apellido = $_SESSION['usuario']['apellidos'];
}
?>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <i class="fa d-inline fa-lg fa-circle-o"></i>
        <b> Mi sitio</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="nav-link" href="#">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Cursos<br></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Libros<br></a> </li>
          <li class="nav-item"><a class="nav-link" href="#">Sobre mí<br></a></li>
        </ul>
        <?php 
          if(isset($_SESSION['usuario'])){
            print ' <a class="nav-link" href="#">Hola '.$nombre.'<br></a>';
            print '<a class="btn btn-outline-primary navbar-btn ml-md-2" href="./logout.php">Log out  <i class="fa fa-sign-out"></i></a>';
          }else{
            print '<a class="btn btn-outline-primary navbar-btn ml-md-2" href="login.php">Login  <i class="fa fa-sign-in"></i></a>';
          }
          ?>
        
      </div>
    </div>
  </nav>