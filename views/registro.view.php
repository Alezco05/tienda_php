
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/theme.css" type="text/css">

</head>

<body style="">
  <?php  require 'header.php';?>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-10">

        <?php 
        if(isset($errores)){
          if(count($errores)>0){
            print  '<div class="alert alert-danger">';
            foreach($errores as $error =>$valor){
              print "<strong> $valor </strong>";
            }
          }
          print '</div>';
             
        }
        ?>
         
            
          <h1>Registrate</h1>
          <form class="text-left" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group"> <label for="nombre">Nombre</label> <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre"> </div>
            <div class="form-group"> <label for="apellidos">Apellidos<br></label> <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingresa tus apellidos"> </div>
            <div class="form-group"> <label for="pais">Pais<br></label> <input type="text" class="form-control" id="pais" name="pais" placeholder="Ingresa tu pais"> </div>
            <div class="form-group"> <label for="ciudad">Ciudad<br></label> <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ingresa tu ciudad"> </div>
            <div class="form-group"> <label for="direccion">Direccion<br></label> <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingresa tu direccion"> </div>
            <div class="form-group"> <label for="email">Email</label> <input type="email" class="form-control email" name="email" id="email" placeholder="Ingresa tu email"> </div>
            <div class="form-row">
              <div class="form-group col-md-6"> <label for="password1">Contraseña</label> <input type="password" class="form-control" name="password1" id="password1" placeholder="••••"> </div>
              <div class="form-group col-md-6"> <label for="password2">Confirma tu contraseña</label> <input type="password" class="form-control" name="password2" id="password2" placeholder="••••"> </div>
            </div>
            <a href="../index.php"><button type="submit" class="btn btn-primary">Registrarse</button></a>
          </form>
        </div>
      </div>
    </div>
  </div>
 
  <?php  require 'footer.php';?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>