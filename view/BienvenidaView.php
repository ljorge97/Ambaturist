<?php
    ini_get('register_globals'); 
    if(isset($_SESSION['error'])){
        echo '<script language="javascript">';
        $error=$_SESSION['error'];
        echo "alert('$error');";
        echo '</script>';
        unset($_SESSION['error']);
    }
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Ambato Turístico</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet"> 
    <style>body,center{margin-top:35px}.navbar-brand{text-shadow:0px 0px 1px yellow}a{outline:0;text-decoration:none}nav a:hover{text-shadow:0px 0px 1px yellow}.col-2{text-align: center;padding: 40px 20px 20px 20px}h2{padding-top: 50px}h2, h4{color: rgb(63, 63, 63); font-family: 'Kalam', cursive;}</style>
  </head>
  <body style="-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none; background-image: url('https://img.goraymi.com/2019/12/05/e1387d506af417e085a8ed0b4bd23b00_xl.jpg'); background-repeat: no-repeat; background-size: cover;">
  
  <nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color: green;">
        <a class="navbar-brand" href="#"><b>Ambato Turístico</b></a>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <H2 style="color: white;">¡BIENVENIDO!</H2>
        </div>

            <div class="row justify-content-center">
                <h4></h4>
            </div>
            <div></div>
            <div class="row justify-content-center">
             <div class="col-2">
                <a href="<?php echo $helper->url("usuario","iniciar"); ?>" role="button" class="btn btn-success" >Iniciar Sesión</a>
            </div>

                <div class="col-2">
                    <a href="<?php echo $helper->url("usuario","registrarse"); ?>" role="button" class="btn btn-success">Registrarse</a>
                </div>
            </div>
    </div>

    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>